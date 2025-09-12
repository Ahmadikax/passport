<?php
if (isset($_GET['action']) && ($_GET['action'] === 'export' || $_GET['action'] === 'export_all')) {
    // Set headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="all_countries_visa_data.csv"');
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
    
    // Include the export script and call the all countries function
    include 'export_all_countries.php';
    
    // Read visa data from CSV file
    $csvFile = 'all_countries_visa_data_2025-09-11.csv';
    $allVisaData = readVisaDataFromCSV($csvFile);
    
    if (exportAllCountries($allVisaData)) {
        exit;
    } else {
        // Error exporting data, redirect back with error
        header('Location: download_export.php?error=export_failed');
        exit;
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'export_single' && isset($_GET['country'])) {
    $country = $_GET['country'];
    
    // Set headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $country . '_visa_data.csv"');
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
    
    // Include the export script and call the single country function
    include 'export_all_countries.php';
    
    // Read visa data from CSV file
    $csvFile = 'all_countries_visa_data_2025-09-11.csv';
    $allVisaData = readVisaDataFromCSV($csvFile);
    
    if (exportSingleCountry($country, $allVisaData)) {
        exit;
    } else {
        // Country not found, redirect back with error
        header('Location: download_export.php?error=country_not_found');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export All Countries Visa Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .export-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        .export-icon {
            font-size: 4rem;
            color: #667eea;
            margin-bottom: 20px;
        }
        .btn-export {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-export:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            color: white;
        }
        .stats {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        .stat-item {
            display: inline-block;
            margin: 0 20px;
            text-align: center;
        }
        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #667eea;
        }
        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
        }
        .loading {
            display: none;
        }
        .loading.show {
            display: block;
        }
    </style>
</head>
<body>
    <div class="export-card">
        <div class="export-icon">📊</div>
        <h1 class="mb-4">Export Countries Visa Data</h1>
        <p class="text-muted mb-4">Get CSV files containing visa data for all countries or individual countries</p>
        
        <div class="stats">
            <?php
            // Get statistics from CSV file
            include 'export_all_countries.php';
            $csvFile = 'all_countries_visa_data_2025-09-11.csv';
            $allVisaData = readVisaDataFromCSV($csvFile);
            $uniqueCountries = getUniqueCountries($allVisaData);
            $totalRecords = count($allVisaData);
            $totalCountries = count($uniqueCountries);
            ?>
            <div class="stat-item">
                <div class="stat-number"><?php echo number_format($totalCountries); ?></div>
                <div class="stat-label">Countries</div>
            </div>
            <div class="stat-item">
                <div class="stat-number"><?php echo number_format($totalRecords); ?></div>
                <div class="stat-label">Records</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">CSV</div>
                <div class="stat-label">Format</div>
            </div>
        </div>
        
        <div class="loading">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Exporting...</span>
            </div>
            <p class="mt-3">Creating file, please wait...</p>
        </div>
        
        <div class="mb-4">
            <button id="exportAllBtn" class="btn btn-export btn-lg me-3">
                📥 Export All Countries
            </button>
        </div>
        
        <div class="mb-4">
            <h5>Export Single Country:</h5>
            <div class="row">
                <div class="col-8">
                    <select id="countrySelect" class="form-select">
                        <option value="">Select a country...</option>
                        <?php
                        // Generate country options dynamically from CSV data
                        foreach ($uniqueCountries as $country) {
                            $countryValue = strtolower(str_replace([' ', "'", '.'], ['-', '', ''], $country));
                            echo "<option value=\"$countryValue\">$country</option>\n";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-4">
                    <button id="exportSingleBtn" class="btn btn-outline-primary" disabled>
                        📄 Export
                    </button>
                </div>
            </div>
        </div>
        
        <div class="mt-4">
            <small class="text-muted">
                Files contain: Source Country, Destination Country, Visa Status, Visa Type, Duration, Visa Required (1=Required, 0=Not Required)
            </small>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Country list
        const countries = [
            'afghanistan', 'albania', 'algeria', 'andorra', 'angola', 'argentina', 'armenia', 'australia', 'austria', 'azerbaijan',
            'bahamas', 'bahrain', 'bangladesh', 'barbados', 'belarus', 'belgium', 'belize', 'benin', 'bhutan', 'bolivia',
            'botswana', 'brazil', 'brunei', 'bulgaria', 'burkina-faso', 'burundi', 'cambodia', 'cameroon', 'canada', 'cape-verde',
            'chad', 'chile', 'china', 'colombia', 'comoros', 'congo', 'costa-rica', 'croatia', 'cuba', 'cyprus',
            'czech-republic', 'denmark', 'djibouti', 'dominica', 'ecuador', 'egypt', 'el-salvador', 'eritrea', 'estonia', 'eswatini',
            'ethiopia', 'fiji', 'finland', 'france', 'gabon', 'gambia', 'georgia', 'germany', 'ghana', 'greece',
            'grenada', 'guatemala', 'guinea', 'guinea-bissau', 'guyana', 'haiti', 'honduras', 'hong-kong', 'hungary', 'iceland',
            'india', 'indonesia', 'iran', 'iraq', 'ireland', 'israel', 'italy', 'ivory-coast', 'jamaica', 'japan',
            'jordan', 'kazakhstan', 'kenya', 'kiribati', 'kosovo', 'kuwait', 'kyrgyzstan', 'laos', 'latvia', 'lebanon',
            'lesotho', 'liberia', 'libya', 'liechtenstein', 'lithuania', 'luxembourg', 'macao', 'madagascar', 'malawi', 'malaysia',
            'maldives', 'mali', 'malta', 'marshall-islands', 'mauritania', 'mauritius', 'mexico', 'micronesia', 'moldova', 'monaco',
            'mongolia', 'montenegro', 'morocco', 'mozambique', 'myanmar', 'namibia', 'nauru', 'nepal', 'netherlands', 'new-zealand',
            'nicaragua', 'niger', 'nigeria', 'north-korea', 'north-macedonia', 'norway', 'oman', 'pakistan', 'palau', 'palestine',
            'panama', 'papua-new-guinea', 'paraguay', 'peru', 'philippines', 'poland', 'portugal', 'qatar', 'romania', 'russia',
            'rwanda', 'saint-lucia', 'samoa', 'san-marino', 'saudi-arabia', 'senegal', 'serbia', 'seychelles', 'sierra-leone', 'singapore',
            'slovakia', 'slovenia', 'solomon-islands', 'somalia', 'south-africa', 'south-korea', 'south-sudan', 'spain', 'sri-lanka', 'sudan',
            'suriname', 'sweden', 'switzerland', 'syria', 'taiwan', 'tajikistan', 'tanzania', 'thailand', 'timor-leste', 'togo',
            'tonga', 'tunisia', 'turkey', 'turkmenistan', 'tuvalu', 'uganda', 'ukraine', 'united-kingdom', 'united-states', 'uruguay',
            'uzbekistan', 'vanuatu', 'vatican-city', 'venezuela', 'vietnam', 'yemen', 'zambia', 'zimbabwe'
        ];
        
        // Populate country select
        const countrySelect = document.getElementById('countrySelect');
        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country;
            option.textContent = country.split('-').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
            countrySelect.appendChild(option);
        });
        
        // Export all countries
        document.getElementById('exportAllBtn').addEventListener('click', function() {
            const btn = this;
            const loading = document.querySelector('.loading');
            
            btn.style.display = 'none';
            loading.classList.add('show');
            
            window.location.href = '?action=export';
            
            setTimeout(() => {
                btn.style.display = 'inline-block';
                loading.classList.remove('show');
            }, 5000);
        });
        
        // Enable/disable single export button
        countrySelect.addEventListener('change', function() {
            const exportSingleBtn = document.getElementById('exportSingleBtn');
            exportSingleBtn.disabled = !this.value;
        });
        
        // Export single country
        document.getElementById('exportSingleBtn').addEventListener('click', function() {
            const country = countrySelect.value;
            if (country) {
                window.location.href = `?action=export_single&country=${country}`;
            }
        });
    </script>
</body>
</html>