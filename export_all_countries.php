<?php
// Export all countries visa data to CSV file

// قائمة الدول
$countries = [
    ['code' => 'afghanistan', 'name' => 'Afghanistan'],
    ['code' => 'albania', 'name' => 'Albania'],
    ['code' => 'algeria', 'name' => 'Algeria'],
    ['code' => 'andorra', 'name' => 'Andorra'],
    ['code' => 'angola', 'name' => 'Angola'],
    ['code' => 'argentina', 'name' => 'Argentina'],
    ['code' => 'armenia', 'name' => 'Armenia'],
    ['code' => 'australia', 'name' => 'Australia'],
    ['code' => 'austria', 'name' => 'Austria'],
    ['code' => 'azerbaijan', 'name' => 'Azerbaijan'],
    ['code' => 'bahamas', 'name' => 'Bahamas'],
    ['code' => 'bahrain', 'name' => 'Bahrain'],
    ['code' => 'bangladesh', 'name' => 'Bangladesh'],
    ['code' => 'barbados', 'name' => 'Barbados'],
    ['code' => 'belarus', 'name' => 'Belarus'],
    ['code' => 'belgium', 'name' => 'Belgium'],
    ['code' => 'belize', 'name' => 'Belize'],
    ['code' => 'benin', 'name' => 'Benin'],
    ['code' => 'bhutan', 'name' => 'Bhutan'],
    ['code' => 'bolivia', 'name' => 'Bolivia'],
    ['code' => 'botswana', 'name' => 'Botswana'],
    ['code' => 'brazil', 'name' => 'Brazil'],
    ['code' => 'brunei', 'name' => 'Brunei'],
    ['code' => 'bulgaria', 'name' => 'Bulgaria'],
    ['code' => 'burkina-faso', 'name' => 'Burkina Faso'],
    ['code' => 'burundi', 'name' => 'Burundi'],
    ['code' => 'cambodia', 'name' => 'Cambodia'],
    ['code' => 'cameroon', 'name' => 'Cameroon'],
    ['code' => 'canada', 'name' => 'Canada'],
    ['code' => 'cape-verde', 'name' => 'Cape Verde'],
    ['code' => 'chad', 'name' => 'Chad'],
    ['code' => 'chile', 'name' => 'Chile'],
    ['code' => 'china', 'name' => 'China'],
    ['code' => 'colombia', 'name' => 'Colombia'],
    ['code' => 'comoros', 'name' => 'Comoros'],
    ['code' => 'congo', 'name' => 'Congo'],
    ['code' => 'costa-rica', 'name' => 'Costa Rica'],
    ['code' => 'croatia', 'name' => 'Croatia'],
    ['code' => 'cuba', 'name' => 'Cuba'],
    ['code' => 'cyprus', 'name' => 'Cyprus'],
    ['code' => 'denmark', 'name' => 'Denmark'],
    ['code' => 'djibouti', 'name' => 'Djibouti'],
    ['code' => 'dominica', 'name' => 'Dominica'],
    ['code' => 'ecuador', 'name' => 'Ecuador'],
    ['code' => 'egypt', 'name' => 'Egypt'],
    ['code' => 'el-salvador', 'name' => 'El Salvador'],
    ['code' => 'eritrea', 'name' => 'Eritrea'],
    ['code' => 'estonia', 'name' => 'Estonia'],
    ['code' => 'eswatini', 'name' => 'Eswatini'],
    ['code' => 'ethiopia', 'name' => 'Ethiopia'],
    ['code' => 'fiji', 'name' => 'Fiji'],
    ['code' => 'finland', 'name' => 'Finland'],
    ['code' => 'france', 'name' => 'France'],
    ['code' => 'gabon', 'name' => 'Gabon'],
    ['code' => 'gambia', 'name' => 'Gambia'],
    ['code' => 'georgia', 'name' => 'Georgia'],
    ['code' => 'germany', 'name' => 'Germany'],
    ['code' => 'ghana', 'name' => 'Ghana'],
    ['code' => 'greece', 'name' => 'Greece'],
    ['code' => 'grenada', 'name' => 'Grenada'],
    ['code' => 'guatemala', 'name' => 'Guatemala'],
    ['code' => 'guinea', 'name' => 'Guinea'],
    ['code' => 'guinea-bissau', 'name' => 'Guinea-Bissau'],
    ['code' => 'guyana', 'name' => 'Guyana'],
    ['code' => 'haiti', 'name' => 'Haiti'],
    ['code' => 'honduras', 'name' => 'Honduras'],
    ['code' => 'hong-kong', 'name' => 'Hong Kong'],
    ['code' => 'hungary', 'name' => 'Hungary'],
    ['code' => 'iceland', 'name' => 'Iceland'],
    ['code' => 'india', 'name' => 'India'],
    ['code' => 'indonesia', 'name' => 'Indonesia'],
    ['code' => 'iran', 'name' => 'Iran'],
    ['code' => 'iraq', 'name' => 'Iraq'],
    ['code' => 'ireland', 'name' => 'Ireland'],
    ['code' => 'israel', 'name' => 'Israel'],
    ['code' => 'italy', 'name' => 'Italy'],
    ['code' => 'ivory-coast', 'name' => 'Ivory Coast'],
    ['code' => 'jamaica', 'name' => 'Jamaica'],
    ['code' => 'japan', 'name' => 'Japan'],
    ['code' => 'jordan', 'name' => 'Jordan'],
    ['code' => 'kazakhstan', 'name' => 'Kazakhstan'],
    ['code' => 'kenya', 'name' => 'Kenya'],
    ['code' => 'kiribati', 'name' => 'Kiribati'],
    ['code' => 'kosovo', 'name' => 'Kosovo'],
    ['code' => 'kuwait', 'name' => 'Kuwait'],
    ['code' => 'kyrgyzstan', 'name' => 'Kyrgyzstan'],
    ['code' => 'laos', 'name' => 'Laos'],
    ['code' => 'latvia', 'name' => 'Latvia'],
    ['code' => 'lebanon', 'name' => 'Lebanon'],
    ['code' => 'lesotho', 'name' => 'Lesotho'],
    ['code' => 'liberia', 'name' => 'Liberia'],
    ['code' => 'libya', 'name' => 'Libya'],
    ['code' => 'liechtenstein', 'name' => 'Liechtenstein'],
    ['code' => 'lithuania', 'name' => 'Lithuania'],
    ['code' => 'luxembourg', 'name' => 'Luxembourg'],
    ['code' => 'macao', 'name' => 'Macao'],
    ['code' => 'madagascar', 'name' => 'Madagascar'],
    ['code' => 'malawi', 'name' => 'Malawi'],
    ['code' => 'malaysia', 'name' => 'Malaysia'],
    ['code' => 'maldives', 'name' => 'Maldives'],
    ['code' => 'mali', 'name' => 'Mali'],
    ['code' => 'malta', 'name' => 'Malta'],
    ['code' => 'mauritania', 'name' => 'Mauritania'],
    ['code' => 'mauritius', 'name' => 'Mauritius'],
    ['code' => 'mexico', 'name' => 'Mexico'],
    ['code' => 'micronesia', 'name' => 'Micronesia'],
    ['code' => 'moldova', 'name' => 'Moldova'],
    ['code' => 'monaco', 'name' => 'Monaco'],
    ['code' => 'mongolia', 'name' => 'Mongolia'],
    ['code' => 'montenegro', 'name' => 'Montenegro'],
    ['code' => 'morocco', 'name' => 'Morocco'],
    ['code' => 'mozambique', 'name' => 'Mozambique'],
    ['code' => 'myanmar', 'name' => 'Myanmar'],
    ['code' => 'namibia', 'name' => 'Namibia'],
    ['code' => 'nauru', 'name' => 'Nauru'],
    ['code' => 'nepal', 'name' => 'Nepal'],
    ['code' => 'netherlands', 'name' => 'Netherlands'],
    ['code' => 'new-zealand', 'name' => 'New Zealand'],
    ['code' => 'nicaragua', 'name' => 'Nicaragua'],
    ['code' => 'niger', 'name' => 'Niger'],
    ['code' => 'nigeria', 'name' => 'Nigeria'],
    ['code' => 'north-korea', 'name' => 'North Korea'],
    ['code' => 'norway', 'name' => 'Norway'],
    ['code' => 'oman', 'name' => 'Oman'],
    ['code' => 'pakistan', 'name' => 'Pakistan'],
    ['code' => 'palau', 'name' => 'Palau'],
    ['code' => 'palestine', 'name' => 'Palestine'],
    ['code' => 'panama', 'name' => 'Panama'],
    ['code' => 'paraguay', 'name' => 'Paraguay'],
    ['code' => 'peru', 'name' => 'Peru'],
    ['code' => 'philippines', 'name' => 'Philippines'],
    ['code' => 'poland', 'name' => 'Poland'],
    ['code' => 'portugal', 'name' => 'Portugal'],
    ['code' => 'qatar', 'name' => 'Qatar'],
    ['code' => 'romania', 'name' => 'Romania'],
    ['code' => 'russia', 'name' => 'Russia'],
    ['code' => 'rwanda', 'name' => 'Rwanda'],
    ['code' => 'saint-lucia', 'name' => 'Saint Lucia'],
    ['code' => 'samoa', 'name' => 'Samoa'],
    ['code' => 'san-marino', 'name' => 'San Marino'],
    ['code' => 'saudi-arabia', 'name' => 'Saudi Arabia'],
    ['code' => 'senegal', 'name' => 'Senegal'],
    ['code' => 'serbia', 'name' => 'Serbia'],
    ['code' => 'seychelles', 'name' => 'Seychelles'],
    ['code' => 'sierra-leone', 'name' => 'Sierra Leone'],
    ['code' => 'singapore', 'name' => 'Singapore'],
    ['code' => 'slovakia', 'name' => 'Slovakia'],
    ['code' => 'slovenia', 'name' => 'Slovenia'],
    ['code' => 'somalia', 'name' => 'Somalia'],
    ['code' => 'south-africa', 'name' => 'South Africa'],
    ['code' => 'south-korea', 'name' => 'South Korea'],
    ['code' => 'south-sudan', 'name' => 'South Sudan'],
    ['code' => 'spain', 'name' => 'Spain'],
    ['code' => 'sri-lanka', 'name' => 'Sri Lanka'],
    ['code' => 'sudan', 'name' => 'Sudan'],
    ['code' => 'suriname', 'name' => 'Suriname'],
    ['code' => 'sweden', 'name' => 'Sweden'],
    ['code' => 'switzerland', 'name' => 'Switzerland'],
    ['code' => 'syria', 'name' => 'Syria'],
    ['code' => 'taiwan', 'name' => 'Taiwan'],
    ['code' => 'tajikistan', 'name' => 'Tajikistan'],
    ['code' => 'tanzania', 'name' => 'Tanzania'],
    ['code' => 'thailand', 'name' => 'Thailand'],
    ['code' => 'timor-leste', 'name' => 'Timor-Leste'],
    ['code' => 'togo', 'name' => 'Togo'],
    ['code' => 'tonga', 'name' => 'Tonga'],
    ['code' => 'tunisia', 'name' => 'Tunisia'],
    ['code' => 'turkey', 'name' => 'Turkey'],
    ['code' => 'turkmenistan', 'name' => 'Turkmenistan'],
    ['code' => 'tuvalu', 'name' => 'Tuvalu'],
    ['code' => 'uganda', 'name' => 'Uganda'],
    ['code' => 'ukraine', 'name' => 'Ukraine'],
    ['code' => 'united-states', 'name' => 'United States'],
    ['code' => 'uruguay', 'name' => 'Uruguay'],
    ['code' => 'uzbekistan', 'name' => 'Uzbekistan'],
    ['code' => 'vanuatu', 'name' => 'Vanuatu'],
    ['code' => 'vatican-city', 'name' => 'Vatican City'],
    ['code' => 'venezuela', 'name' => 'Venezuela'],
    ['code' => 'vietnam', 'name' => 'Vietnam'],
    ['code' => 'yemen', 'name' => 'Yemen'],
    ['code' => 'zambia', 'name' => 'Zambia'],
    ['code' => 'zimbabwe', 'name' => 'Zimbabwe'],
    ['code' => 'antigua-and-barbuda', 'name' => 'Antigua and Barbuda'],
    ['code' => 'bosnia-and-herzegovina', 'name' => 'Bosnia and Herzegovina'],
    ['code' => 'central-african-republic', 'name' => 'Central African Republic'],
    ['code' => 'czech-republic', 'name' => 'Czech Republic'],
    ['code' => 'democratic-republic-of-the-congo', 'name' => 'Democratic Republic of the Congo'],
    ['code' => 'dominican-republic', 'name' => 'Dominican Republic'],
    ['code' => 'equatorial-guinea', 'name' => 'Equatorial Guinea'],
    ['code' => 'marshall-islands', 'name' => 'Marshall Islands'],
    ['code' => 'north-macedonia', 'name' => 'North Macedonia'],
    ['code' => 'papua-new-guinea', 'name' => 'Papua New Guinea'],
    ['code' => 'saint-kitts-and-nevis', 'name' => 'Saint Kitts and Nevis'],
    ['code' => 'saint-vincent-and-the-grenadines', 'name' => 'Saint Vincent and the Grenadines'],
    ['code' => 'sao-tome-and-principe', 'name' => 'Sao Tome and Principe'],
    ['code' => 'solomon-islands', 'name' => 'Solomon Islands'],
    ['code' => 'trinidad-and-tobago', 'name' => 'Trinidad and Tobago'],
    ['code' => 'united-arab-emirates', 'name' => 'United Arab Emirates'],
    ['code' => 'united-kingdom', 'name' => 'United Kingdom']
];

function extractVisaData($countryCode, $countryName) {
    $filename = "html_countries/passport_{$countryCode}_.html";
    
    if (!file_exists($filename)) {
        echo "File not found: $filename\n";
        return [];
    }
    
    $html = file_get_contents($filename);
    
    // Check if the file contains error message
    if (strpos($html, "We can't find that passport") !== false) {
        echo "No passport data available for: $countryName\n";
        return [];
    }
    if (!$html) {
        echo "Could not read file: $filename\n";
        return [];
    }
    
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    
    // Search for table rows containing visa data
    $rows = $xpath->query("//tbody//tr[contains(@class, 'show-tr')]");
    
    $visaData = [];
    
    foreach ($rows as $row) {
        // Extract destination country from first td
        $countryCell = $xpath->query(".//td[1]//a", $row)->item(0);
        if (!$countryCell) {
            $countryCell = $xpath->query(".//td[1]", $row)->item(0);
        }
        if (!$countryCell) continue;
        
        $destinationCountry = trim($countryCell->textContent);
        if (empty($destinationCountry)) continue;
        
        // Extract visa type from span class="vrules"
        $vrulesSpan = $xpath->query(".//span[@class='vrules']", $row)->item(0);
        $visaType = $vrulesSpan ? trim($vrulesSpan->textContent) : 'not specified';
        
        // Extract duration from span class="vdays"
        $vdaysSpan = $xpath->query(".//span[@class='vdays']", $row)->item(0);
        $duration = $vdaysSpan ? trim($vdaysSpan->textContent) : '';
        
        // Clean up visa type - replace · with /
        if (strpos($visaType, '·') !== false) {
            $visaType = str_replace(' · ', ' / ', $visaType);
        }
        
        // Determine visa required (1 = visa required, 0 = no visa required)
        $visaRequired = 1; // Default: visa required
        
        // Check for visa-free types (set to 0)
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
            'visa-free',
            'eTA',
            'visa on arrival (by email)',
            'visa on arrival (EASE)',
            'visa on arrival',
            'eVisa / visa on arrival'
        ];
        
        foreach ($visaFreeTypes as $freeType) {
            if (stripos($visaType, $freeType) !== false) {
                $visaRequired = 0;
                break;
            }
        }
        
        $visaData[] = [
            'destination' => $destinationCountry,
            'visa_required' => $visaRequired,
            'type' => $visaType,
            'duration' => $duration
        ];
    }
    
    return $visaData;
}

// Function to create CSV file for all countries
function createAllCountriesCSV() {
    global $countries;
    
    // Create CSV file
    $filename = 'all_countries_visa_data_' . date('Y-m-d') . '.csv';
    $file = fopen($filename, 'w');

    // Write CSV header
    fputcsv($file, ['Source Country', 'Destination Country', 'visa required', 'Visa Type', 'Duration', 'app_link']);

    $totalRecords = 0;

    // Process each country
    foreach ($countries as $country) {
        $visaData = extractVisaData($country['code'], $country['name']);
        
        foreach ($visaData as $visa) {
            // Keep app_link empty for all visa types
            $appLink = "";
            
            fputcsv($file, [
                $country['name'],
                $visa['destination'],
                $visa['visa_required'],
                $visa['type'],
                $visa['duration'],
                $appLink
            ]);
            
            $totalRecords++;
        }
        
        echo "Added " . count($visaData) . " records from {$country['name']}\n";
    }

    fclose($file);

    echo "Total records: $totalRecords\n";
    echo "CSV file created: $filename\n";
    
    return $filename;
}

// Only run the main export if this file is called directly (not included)
if (!isset($_GET['action'])) {
    createAllCountriesCSV();
}

// Function to export single country data
function exportSingleCountry($countryCode) {
    global $countries;
    
    // Find country name by code
    $countryName = '';
    foreach ($countries as $country) {
        if (strtolower($country['code']) === strtolower($countryCode)) {
            $countryName = $country['name'];
            break;
        }
    }
    
    if (empty($countryName)) {
        return false;
    }
    
    $visaData = extractVisaData($countryCode, $countryName);
    
    // Create CSV content
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Source Country', 'Destination Country', 'visa required', 'Visa Type', 'Duration', 'app_link']);
    
    foreach ($visaData as $visa) {
        // Keep app_link empty for all visa types
        $appLink = "";
        
        fputcsv($output, [
            $countryName,
            $visa['destination'],
            $visa['visa_required'],
            $visa['type'],
            $visa['duration'],
            $appLink
        ]);
    }
    
    fclose($output);
    return true;
}
?>