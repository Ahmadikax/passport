<?php
// Export all countries visa data to CSV file

// قائمة الدول مع أرقام الـ ID من قاعدة البيانات
$countries = [
    ['code' => 'afghanistan', 'name' => 'Afghanistan', 'id' => 1],
    ['code' => 'albania', 'name' => 'Albania', 'id' => 2],
    ['code' => 'algeria', 'name' => 'Algeria', 'id' => 3],
    ['code' => 'andorra', 'name' => 'Andorra', 'id' => 4],
    ['code' => 'angola', 'name' => 'Angola', 'id' => 5],
    ['code' => 'argentina', 'name' => 'Argentina', 'id' => 7],
    ['code' => 'armenia', 'name' => 'Armenia', 'id' => 8],
    ['code' => 'australia', 'name' => 'Australia', 'id' => 9],
    ['code' => 'austria', 'name' => 'Austria', 'id' => 10],
    ['code' => 'azerbaijan', 'name' => 'Azerbaijan', 'id' => 11],
    ['code' => 'bahamas', 'name' => 'Bahamas', 'id' => 12],
    ['code' => 'bahrain', 'name' => 'Bahrain', 'id' => 13],
    ['code' => 'bangladesh', 'name' => 'Bangladesh', 'id' => 14],
    ['code' => 'barbados', 'name' => 'Barbados', 'id' => 15],
    ['code' => 'belarus', 'name' => 'Belarus', 'id' => 16],
    ['code' => 'belgium', 'name' => 'Belgium', 'id' => 17],
    ['code' => 'belize', 'name' => 'Belize', 'id' => 18],
    ['code' => 'benin', 'name' => 'Benin', 'id' => 19],
    ['code' => 'bhutan', 'name' => 'Bhutan', 'id' => 20],
    ['code' => 'bolivia', 'name' => 'Bolivia', 'id' => 21],
    ['code' => 'botswana', 'name' => 'Botswana', 'id' => 23],
    ['code' => 'brazil', 'name' => 'Brazil', 'id' => 24],
    ['code' => 'brunei', 'name' => 'Brunei', 'id' => 25],
    ['code' => 'bulgaria', 'name' => 'Bulgaria', 'id' => 26],
    ['code' => 'burkina-faso', 'name' => 'Burkina Faso', 'id' => 27],
    ['code' => 'burundi', 'name' => 'Burundi', 'id' => 28],
    ['code' => 'cambodia', 'name' => 'Cambodia', 'id' => 29],
    ['code' => 'cameroon', 'name' => 'Cameroon', 'id' => 30],
    ['code' => 'canada', 'name' => 'Canada', 'id' => 31],
    ['code' => 'cape-verde', 'name' => 'Cape Verde', 'id' => 32],
    ['code' => 'chad', 'name' => 'Chad', 'id' => 34],
    ['code' => 'chile', 'name' => 'Chile', 'id' => 35],
    ['code' => 'china', 'name' => 'China', 'id' => 36],
    ['code' => 'colombia', 'name' => 'Colombia', 'id' => 37],
    ['code' => 'comoros', 'name' => 'Comoros', 'id' => 38],
    ['code' => 'congo', 'name' => 'Congo', 'id' => 39],
    ['code' => 'costa-rica', 'name' => 'Costa Rica', 'id' => 41],
    ['code' => 'croatia', 'name' => 'Croatia', 'id' => 43],
    ['code' => 'cuba', 'name' => 'Cuba', 'id' => 44],
    ['code' => 'cyprus', 'name' => 'Cyprus', 'id' => 45],
    ['code' => 'denmark', 'name' => 'Denmark', 'id' => 47],
    ['code' => 'djibouti', 'name' => 'Djibouti', 'id' => 48],
    ['code' => 'dominica', 'name' => 'Dominica', 'id' => 49],
    ['code' => 'ecuador', 'name' => 'Ecuador', 'id' => 51],
    ['code' => 'egypt', 'name' => 'Egypt', 'id' => 52],
    ['code' => 'el-salvador', 'name' => 'El Salvador', 'id' => 53],
    ['code' => 'eritrea', 'name' => 'Eritrea', 'id' => 55],
    ['code' => 'estonia', 'name' => 'Estonia', 'id' => 56],
    ['code' => 'eswatini', 'name' => 'Eswatini', 'id' => 57],
    ['code' => 'ethiopia', 'name' => 'Ethiopia', 'id' => 58],
    ['code' => 'fiji', 'name' => 'Fiji', 'id' => 59],
    ['code' => 'finland', 'name' => 'Finland', 'id' => 60],
    ['code' => 'france', 'name' => 'France', 'id' => 61],
    ['code' => 'gabon', 'name' => 'Gabon', 'id' => 62],
    ['code' => 'gambia', 'name' => 'Gambia', 'id' => 63],
    ['code' => 'georgia', 'name' => 'Georgia', 'id' => 64],
    ['code' => 'germany', 'name' => 'Germany', 'id' => 65],
    ['code' => 'ghana', 'name' => 'Ghana', 'id' => 66],
    ['code' => 'greece', 'name' => 'Greece', 'id' => 67],
    ['code' => 'grenada', 'name' => 'Grenada', 'id' => 68],
    ['code' => 'guatemala', 'name' => 'Guatemala', 'id' => 69],
    ['code' => 'guinea', 'name' => 'Guinea', 'id' => 70],
    ['code' => 'guinea-bissau', 'name' => 'Guinea-Bissau', 'id' => 71],
    ['code' => 'guyana', 'name' => 'Guyana', 'id' => 72],
    ['code' => 'haiti', 'name' => 'Haiti', 'id' => 73],
    ['code' => 'honduras', 'name' => 'Honduras', 'id' => 74],
    ['code' => 'hong-kong', 'name' => 'Hong Kong', 'id' => 75],
    ['code' => 'hungary', 'name' => 'Hungary', 'id' => 76],
    ['code' => 'iceland', 'name' => 'Iceland', 'id' => 77],
    ['code' => 'india', 'name' => 'India', 'id' => 78],
    ['code' => 'indonesia', 'name' => 'Indonesia', 'id' => 79],
    ['code' => 'iran', 'name' => 'Iran', 'id' => 80],
    ['code' => 'iraq', 'name' => 'Iraq', 'id' => 81],
    ['code' => 'ireland', 'name' => 'Ireland', 'id' => 82],
    ['code' => 'israel', 'name' => 'Israel', 'id' => 83],
    ['code' => 'italy', 'name' => 'Italy', 'id' => 84],
    ['code' => 'ivory-coast', 'name' => 'Ivory Coast', 'id' => 85],
    ['code' => 'jamaica', 'name' => 'Jamaica', 'id' => 86],
    ['code' => 'japan', 'name' => 'Japan', 'id' => 87],
    ['code' => 'jordan', 'name' => 'Jordan', 'id' => 88],
    ['code' => 'kazakhstan', 'name' => 'Kazakhstan', 'id' => 89],
    ['code' => 'kenya', 'name' => 'Kenya', 'id' => 90],
    ['code' => 'kiribati', 'name' => 'Kiribati', 'id' => 91],
    ['code' => 'kosovo', 'name' => 'Kosovo', 'id' => 92],
    ['code' => 'kuwait', 'name' => 'Kuwait', 'id' => 93],
    ['code' => 'kyrgyzstan', 'name' => 'Kyrgyzstan', 'id' => 94],
    ['code' => 'laos', 'name' => 'Laos', 'id' => 95],
    ['code' => 'latvia', 'name' => 'Latvia', 'id' => 96],
    ['code' => 'lebanon', 'name' => 'Lebanon', 'id' => 97],
    ['code' => 'lesotho', 'name' => 'Lesotho', 'id' => 98],
    ['code' => 'liberia', 'name' => 'Liberia', 'id' => 99],
    ['code' => 'libya', 'name' => 'Libya', 'id' => 100],
    ['code' => 'liechtenstein', 'name' => 'Liechtenstein', 'id' => 100],
    ['code' => 'lithuania', 'name' => 'Lithuania', 'id' => 101],
    ['code' => 'luxembourg', 'name' => 'Luxembourg', 'id' => 102],
    ['code' => 'macao', 'name' => 'Macao', 'id' => 103],
    ['code' => 'madagascar', 'name' => 'Madagascar', 'id' => 104],
    ['code' => 'malawi', 'name' => 'Malawi', 'id' => 105],
    ['code' => 'malaysia', 'name' => 'Malaysia', 'id' => 106],
    ['code' => 'maldives', 'name' => 'Maldives', 'id' => 107],
    ['code' => 'mali', 'name' => 'Mali', 'id' => 108],
    ['code' => 'malta', 'name' => 'Malta', 'id' => 109],
    ['code' => 'mauritania', 'name' => 'Mauritania', 'id' => 111],
    ['code' => 'mauritius', 'name' => 'Mauritius', 'id' => 112],
    ['code' => 'mexico', 'name' => 'Mexico', 'id' => 113],
    ['code' => 'micronesia', 'name' => 'Micronesia', 'id' => 114],
    ['code' => 'moldova', 'name' => 'Moldova', 'id' => 115],
    ['code' => 'monaco', 'name' => 'Monaco', 'id' => 116],
    ['code' => 'mongolia', 'name' => 'Mongolia', 'id' => 117],
    ['code' => 'montenegro', 'name' => 'Montenegro', 'id' => 118],
    ['code' => 'morocco', 'name' => 'Morocco', 'id' => 119],
    ['code' => 'mozambique', 'name' => 'Mozambique', 'id' => 120],
    ['code' => 'myanmar', 'name' => 'Myanmar', 'id' => 121],
    ['code' => 'namibia', 'name' => 'Namibia', 'id' => 122],
    ['code' => 'nauru', 'name' => 'Nauru', 'id' => 123],
    ['code' => 'nepal', 'name' => 'Nepal', 'id' => 124],
    ['code' => 'netherlands', 'name' => 'Netherlands', 'id' => 125],
    ['code' => 'new-zealand', 'name' => 'New Zealand', 'id' => 126],
    ['code' => 'nicaragua', 'name' => 'Nicaragua', 'id' => 127],
    ['code' => 'niger', 'name' => 'Niger', 'id' => 128],
    ['code' => 'nigeria', 'name' => 'Nigeria', 'id' => 129],
    ['code' => 'north-korea', 'name' => 'North Korea', 'id' => 130],
    ['code' => 'norway', 'name' => 'Norway', 'id' => 132],
    ['code' => 'oman', 'name' => 'Oman', 'id' => 133],
    ['code' => 'pakistan', 'name' => 'Pakistan', 'id' => 134],
    ['code' => 'palau', 'name' => 'Palau', 'id' => 135],
    ['code' => 'palestine', 'name' => 'Palestine', 'id' => 136],
    ['code' => 'panama', 'name' => 'Panama', 'id' => 137],
    ['code' => 'paraguay', 'name' => 'Paraguay', 'id' => 139],
    ['code' => 'peru', 'name' => 'Peru', 'id' => 140],
    ['code' => 'philippines', 'name' => 'Philippines', 'id' => 141],
    ['code' => 'poland', 'name' => 'Poland', 'id' => 142],
    ['code' => 'portugal', 'name' => 'Portugal', 'id' => 143],
    ['code' => 'qatar', 'name' => 'Qatar', 'id' => 144],
    ['code' => 'romania', 'name' => 'Romania', 'id' => 145],
    ['code' => 'russia', 'name' => 'Russia', 'id' => 146],
    ['code' => 'rwanda', 'name' => 'Rwanda', 'id' => 147],
    ['code' => 'saint-lucia', 'name' => 'Saint Lucia', 'id' => 149],
    ['code' => 'samoa', 'name' => 'Samoa', 'id' => 150],
    ['code' => 'san-marino', 'name' => 'San Marino', 'id' => 151],
    ['code' => 'saudi-arabia', 'name' => 'Saudi Arabia', 'id' => 153],
    ['code' => 'senegal', 'name' => 'Senegal', 'id' => 154],
    ['code' => 'serbia', 'name' => 'Serbia', 'id' => 155],
    ['code' => 'seychelles', 'name' => 'Seychelles', 'id' => 156],
    ['code' => 'sierra-leone', 'name' => 'Sierra Leone', 'id' => 157],
    ['code' => 'singapore', 'name' => 'Singapore', 'id' => 158],
    ['code' => 'slovakia', 'name' => 'Slovakia', 'id' => 159],
    ['code' => 'slovenia', 'name' => 'Slovenia', 'id' => 160],
    ['code' => 'somalia', 'name' => 'Somalia', 'id' => 162],
    ['code' => 'south-africa', 'name' => 'South Africa', 'id' => 163],
    ['code' => 'south-korea', 'name' => 'South Korea', 'id' => 164],
    ['code' => 'south-sudan', 'name' => 'South Sudan', 'id' => 165],
    ['code' => 'spain', 'name' => 'Spain', 'id' => 166],
    ['code' => 'sri-lanka', 'name' => 'Sri Lanka', 'id' => 167],
    ['code' => 'sudan', 'name' => 'Sudan', 'id' => 169],
    ['code' => 'suriname', 'name' => 'Suriname', 'id' => 170],
    ['code' => 'sweden', 'name' => 'Sweden', 'id' => 171],
    ['code' => 'switzerland', 'name' => 'Switzerland', 'id' => 172],
    ['code' => 'syria', 'name' => 'Syria', 'id' => 173],
    ['code' => 'taiwan', 'name' => 'Taiwan', 'id' => 174],
    ['code' => 'tajikistan', 'name' => 'Tajikistan', 'id' => 175],
    ['code' => 'tanzania', 'name' => 'Tanzania', 'id' => 176],
    ['code' => 'thailand', 'name' => 'Thailand', 'id' => 177],
    ['code' => 'timor-leste', 'name' => 'Timor-Leste', 'id' => 178],
    ['code' => 'togo', 'name' => 'Togo', 'id' => 179],
    ['code' => 'tonga', 'name' => 'Tonga', 'id' => 180],
    ['code' => 'tunisia', 'name' => 'Tunisia', 'id' => 182],
    ['code' => 'turkey', 'name' => 'Turkey', 'id' => 185],
    ['code' => 'turkmenistan', 'name' => 'Turkmenistan', 'id' => 183],
    ['code' => 'tuvalu', 'name' => 'Tuvalu', 'id' => 184],
    ['code' => 'uganda', 'name' => 'Uganda', 'id' => 186],
    ['code' => 'ukraine', 'name' => 'Ukraine', 'id' => 187],
    ['code' => 'united-states', 'name' => 'United States', 'id' => 190],
    ['code' => 'uruguay', 'name' => 'Uruguay', 'id' => 191],
    ['code' => 'uzbekistan', 'name' => 'Uzbekistan', 'id' => 192],
    ['code' => 'vanuatu', 'name' => 'Vanuatu', 'id' => 193],
    ['code' => 'vatican-city', 'name' => 'Vatican City', 'id' => 194],
    ['code' => 'venezuela', 'name' => 'Venezuela', 'id' => 195],
    ['code' => 'vietnam', 'name' => 'Vietnam', 'id' => 196],
    ['code' => 'yemen', 'name' => 'Yemen', 'id' => 197],
    ['code' => 'zambia', 'name' => 'Zambia', 'id' => 198],
    ['code' => 'zimbabwe', 'name' => 'Zimbabwe', 'id' => 199],
    ['code' => 'antigua-and-barbuda', 'name' => 'Antigua and Barbuda', 'id' => 6],
    ['code' => 'bosnia-and-herzegovina', 'name' => 'Bosnia and Herzegovina', 'id' => 22],
    ['code' => 'central-african-republic', 'name' => 'Central African Republic', 'id' => 33],
    ['code' => 'czech-republic', 'name' => 'Czech Republic', 'id' => 46],
    ['code' => 'democratic-republic-of-the-congo', 'name' => 'Democratic Republic of the Congo', 'id' => 39],
    ['code' => 'dominican-republic', 'name' => 'Dominican Republic', 'id' => 50],
    ['code' => 'equatorial-guinea', 'name' => 'Equatorial Guinea', 'id' => 54],
    ['code' => 'marshall-islands', 'name' => 'Marshall Islands', 'id' => 110],
    ['code' => 'north-macedonia', 'name' => 'North Macedonia', 'id' => 131],
    ['code' => 'papua-new-guinea', 'name' => 'Papua New Guinea', 'id' => 138],
    ['code' => 'saint-kitts-and-nevis', 'name' => 'Saint Kitts and Nevis', 'id' => 148],
    ['code' => 'saint-vincent-and-the-grenadines', 'name' => 'Saint Vincent and the Grenadines', 'id' => 168],
    ['code' => 'sao-tome-and-principe', 'name' => 'Sao Tome and Principe', 'id' => 152],
    ['code' => 'solomon-islands', 'name' => 'Solomon Islands', 'id' => 161],
    ['code' => 'trinidad-and-tobago', 'name' => 'Trinidad and Tobago', 'id' => 181],
    ['code' => 'united-arab-emirates', 'name' => 'United Arab Emirates', 'id' => 188],
    ['code' => 'united-kingdom', 'name' => 'United Kingdom', 'id' => 189]
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
    
    // Find country name and ID by code
    $countryName = '';
    $countryId = null;
    foreach ($countries as $country) {
        if (strtolower($country['code']) === strtolower($countryCode)) {
            $countryName = $country['name'];
            $countryId = isset($country['id']) ? $country['id'] : null;
            break;
        }
    }
    
    if (empty($countryName)) {
        return false;
    }
    
    $visaData = extractVisaData($countryCode, $countryName);
    
    // Create Excel content with new columns including IDs (using tab-separated values)
    $output = fopen('php://output', 'w');
    fputcsv($output, ['from_country_id', 'Source Country', 'to_country_id', 'Destination Country', 'visa_required', 'Visa Type', 'Duration', 'app_link'], "\t");
    
    foreach ($visaData as $visa) {
        // Find destination country ID with special name mappings
        $destinationId = null;
        $destinationName = $visa['destination'];
        
        // Map HTML country names to our array names
        $nameMapping = [
            'Congo (Dem. Rep.)' => 'Democratic Republic of the Congo',
            'Cote d\'Ivoire (Ivory Coast)' => 'Ivory Coast',
            'Palestinian Territories' => 'Palestine',
            'Russian Federation' => 'Russia',
            'St. Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
            'TÃ¼rkiye' => 'Turkey',
            'Türkiye' => 'Turkey',
            'United States of America' => 'United States',
            'Viet Nam' => 'Vietnam'
        ];
        
        // Apply name mapping if exists
        if (isset($nameMapping[$destinationName])) {
            $destinationName = $nameMapping[$destinationName];
        }
        
        foreach ($countries as $country) {
            if (strtolower($country['name']) === strtolower($destinationName)) {
                $destinationId = isset($country['id']) ? $country['id'] : null;
                break;
            }
        }
        
        // Keep app_link empty for all visa types
        $appLink = "";
        
        fputcsv($output, [
            $countryId,
            $countryName,
            $destinationId,
            $visa['destination'],
            $visa['visa_required'],
            $visa['type'],
            $visa['duration'],
            $appLink
        ], "\t");
    }
    
    fclose($output);
    return true;
}

// Function to export all countries data with IDs to Excel format
function exportAllCountriesWithIds() {
    global $countries;
    
    // Clear any previous output
    if (ob_get_level()) {
        ob_end_clean();
    }
    
    // Set headers for Excel download
    header('Content-Type: application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename="visa_requirements_with_ids_' . date('Y-m-d') . '.xls"');
    header('Cache-Control: max-age=0');
    header('Pragma: public');
    header('Expires: 0');
    
    $output = fopen('php://output', 'w');
    
    // Write header row
    fputcsv($output, ['from_country_id', 'Source Country', 'to_country_id', 'Destination Country', 'visa_required', 'Visa Type', 'Duration', 'app_link'], "\t");
    
    foreach ($countries as $sourceCountry) {
        if (!isset($sourceCountry['id'])) continue;
        
        $visaData = extractVisaData($sourceCountry['code'], $sourceCountry['name']);
        
        foreach ($visaData as $visa) {
            // Find destination country ID with special name mappings
            $destinationId = null;
            $destinationName = $visa['destination'];
            
            // Map HTML country names to our array names
            $nameMapping = [
                'Congo (Dem. Rep.)' => 'Democratic Republic of the Congo',
                'Cote d\'Ivoire (Ivory Coast)' => 'Ivory Coast',
                'Palestinian Territories' => 'Palestine',
                'Russian Federation' => 'Russia',
                'St. Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
                'TÃ¼rkiye' => 'Turkey',
                'Türkiye' => 'Turkey',
                'United States of America' => 'United States',
                'Viet Nam' => 'Vietnam'
            ];
            
            // Apply name mapping if exists
            if (isset($nameMapping[$destinationName])) {
                $destinationName = $nameMapping[$destinationName];
            }
            
            foreach ($countries as $destCountry) {
                if (strtolower($destCountry['name']) === strtolower($destinationName)) {
                    $destinationId = isset($destCountry['id']) ? $destCountry['id'] : null;
                    break;
                }
            }
            
            // Keep app_link empty for all visa types
            $appLink = "";
            
            fputcsv($output, [
                $sourceCountry['id'],
                $sourceCountry['name'],
                $destinationId,
                $visa['destination'],
                $visa['visa_required'],
                $visa['type'],
                $visa['duration'],
                $appLink
            ], "\t");
        }
    }
    
    fclose($output);
    exit;
}

// Check if export all is requested
if (isset($_GET['export_all_with_ids']) && $_GET['export_all_with_ids'] == '1') {
    exportAllCountriesWithIds();
}

?>