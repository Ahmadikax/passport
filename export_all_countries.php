<?php
// Export all countries visa data to CSV file

// Function to read visa data from CSV file
function readVisaDataFromCSV($csvFile) {
    $visaData = [];
    
    if (!file_exists($csvFile)) {
        return $visaData;
    }
    
    $handle = fopen($csvFile, 'r');
    if ($handle !== FALSE) {
        // Skip header row
        fgetcsv($handle);
        
        while (($data = fgetcsv($handle)) !== FALSE) {
            if (count($data) >= 4) {
                $sourceCountry = $data[0];
                $destinationCountry = $data[1];
                $visaStatus = $data[2];
                $visaType = $data[3];
                // Replace 'visa on arrival (EASE)' with 'visa on arrival'
                if ($visaType === 'visa on arrival (EASE)') {
                    $visaType = 'visa on arrival';
                }
                
                // Replace 'eVisa (fast track)' with 'eVisa'
                if ($visaType === 'eVisa (fast track)') {
                    $visaType = 'eVisa';
                }
                
                $duration = isset($data[4]) ? $data[4] : '';
                
                // Initialize visa required based on visa type first
                $visaRequired = 1; // Default to required
                
                // Visa-free types: set visa required to 0 for specific visa types
                $visaFreeTypes = [
                    'free visa on arrival',
                    'visa-free (EASE)',
                    'visa waiver registration',
                    'tourist registration',
                    'tourist card',
                    'E-Ticket',
                    'Arrival Card',
                    'Digital Arrival Card',
                    'pre-enrollment',
                    'visa-free'
                ];
                if (in_array($visaType, $visaFreeTypes)) {
                    $visaRequired = 0;
                }
                
                // Special cases: set visa required to 1 for 'not admitted' and 'Trump ban'
                if ($visaType === 'not admitted' || $visaType === 'Trump ban') {
                    $visaRequired = 1;
                }
                
                $visaData[] = [
                    'source' => $sourceCountry,
                    'destination' => $destinationCountry,
                    'status' => $visaStatus,
                    'required' => $visaRequired,
                    'type' => $visaType,
                    'duration' => $duration
                ];
            }
        }
        fclose($handle);
    }
    
    return $visaData;
}

// Function to get unique countries from visa data
function getUniqueCountries($visaData) {
    $countries = [];
    $seen = [];
    
    foreach ($visaData as $record) {
        $source = $record['source'];
        if (!isset($seen[$source])) {
            $countries[] = $source;
            $seen[$source] = true;
        }
    }
    
    sort($countries);
    return $countries;
}

// Function to filter visa data by source country
function filterVisaDataByCountry($visaData, $countryName) {
    $filtered = [];
    
    foreach ($visaData as $record) {
        if (strcasecmp($record['source'], $countryName) === 0) {
            $filtered[] = $record;
        }
    }
    
    return $filtered;
}

// Function to export single country data
function exportSingleCountry($countryName, $visaData) {
    $countryData = filterVisaDataByCountry($visaData, $countryName);
    
    if (empty($countryData)) {
        return false;
    }
    
    // Create CSV content
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Source Country', 'Destination Country', 'Visa Required', 'Visa Type', 'Duration', 'app_link']);
    
    foreach ($countryData as $record) {
        fputcsv($output, [
            $record['source'],
            $record['destination'],
            $record['required'],
            $record['type'],
            $record['duration'],
            '' // Empty app_link column
        ]);
    }
    
    fclose($output);
    return true;
}

// Function to export all countries data
function exportAllCountries($visaData) {
    if (empty($visaData)) {
        return false;
    }
    
    // Create CSV content
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Source Country', 'Destination Country', 'Visa Required', 'Visa Type', 'Duration', 'app_link']);
    
    foreach ($visaData as $record) {
        fputcsv($output, [
            $record['source'],
            $record['destination'],
            $record['required'],
            $record['type'],
            $record['duration'],
            '' // Empty app_link column
        ]);
    }
    
    fclose($output);
    return true;
}

// Main execution - only run if this file is called directly (not included)
if (!isset($_GET['action']) || $_GET['action'] === 'export_all') {
    // Check if this is being called for direct download (has headers set)
    $isDirectDownload = isset($_GET['action']) && $_GET['action'] === 'export_all';
    
    // Read all visa data from CSV file
    $csvFile = 'all_countries_visa_data_2025-09-11.csv';
    $allVisaData = readVisaDataFromCSV($csvFile);
    
    if (empty($allVisaData)) {
        if (!$isDirectDownload) {
            echo "Error: Could not read visa data from CSV file.\n";
        }
        exit;
    }
    
    // If this is a direct download request, don't create file, just output
    if ($isDirectDownload) {
        // This will be handled by the exportAllCountries function
        return;
    }
    
    // Create CSV file for all countries (for local storage)
    $filename = 'all_countries_visa_data_export_' . date('Y-m-d') . '.csv';
    $file = fopen($filename, 'w');
    
    // Write CSV header
    fputcsv($file, ['Source Country', 'Destination Country', 'Visa Required', 'Visa Type', 'Duration', 'app_link']);
    
    $totalRecords = 0;
    
    // Write all visa data
    foreach ($allVisaData as $record) {
        fputcsv($file, [
            $record['source'],
            $record['destination'],
            $record['required'],
            $record['type'],
            $record['duration'],
            '' // Empty app_link column
        ]);
        
        $totalRecords++;
    }
    
    fclose($file);
    
    // Get unique countries for statistics
    $uniqueCountries = getUniqueCountries($allVisaData);
    
    echo "Total records: $totalRecords\n";
    echo "Total countries: " . count($uniqueCountries) . "\n";
    echo "CSV file created: $filename\n";
}
?>