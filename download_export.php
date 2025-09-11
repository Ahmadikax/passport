<?php
if (isset($_GET['action']) && $_GET['action'] === 'export') {
    $filename = 'all_countries_visa_data_' . date('Y-m-d') . '.csv';
    
    // Check if file exists and is recent (less than 1 hour)
    if (file_exists($filename) && (time() - filemtime($filename)) < 3600) {
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        exit;
    }
    
    // Create file if it doesn't exist or is old
    set_time_limit(300); // 5 minutes
    ob_start();
    include 'export_all_countries.php';
    $output = ob_get_clean();
    
    if (file_exists($filename)) {
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        exit;
    }
    
    echo "<div class='alert alert-danger'>Error creating file</div>";
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
    exit;
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
    
    if (exportSingleCountry($country)) {
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
            <div class="stat-item">
                <div class="stat-number">195</div>
                <div class="stat-label">Countries</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">37,830</div>
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
                        <option value="afghanistan">Afghanistan</option>
                        <option value="albania">Albania</option>
                        <option value="algeria">Algeria</option>
                        <option value="andorra">Andorra</option>
                        <option value="angola">Angola</option>
                        <option value="argentina">Argentina</option>
                        <option value="armenia">Armenia</option>
                        <option value="australia">Australia</option>
                        <option value="austria">Austria</option>
                        <option value="azerbaijan">Azerbaijan</option>
                        <option value="bahamas">Bahamas</option>
                        <option value="bahrain">Bahrain</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="barbados">Barbados</option>
                        <option value="belarus">Belarus</option>
                        <option value="belgium">Belgium</option>
                        <option value="belize">Belize</option>
                        <option value="benin">Benin</option>
                        <option value="bhutan">Bhutan</option>
                        <option value="bolivia">Bolivia</option>
                        <option value="botswana">Botswana</option>
                        <option value="brazil">Brazil</option>
                        <option value="brunei">Brunei</option>
                        <option value="bulgaria">Bulgaria</option>
                        <option value="burkina-faso">Burkina Faso</option>
                        <option value="burundi">Burundi</option>
                        <option value="cambodia">Cambodia</option>
                        <option value="cameroon">Cameroon</option>
                        <option value="canada">Canada</option>
                        <option value="cape-verde">Cape Verde</option>
                        <option value="chad">Chad</option>
                        <option value="chile">Chile</option>
                        <option value="china">China</option>
                        <option value="colombia">Colombia</option>
                        <option value="comoros">Comoros</option>
                        <option value="congo">Congo</option>
                        <option value="costa-rica">Costa Rica</option>
                        <option value="croatia">Croatia</option>
                        <option value="cuba">Cuba</option>
                        <option value="cyprus">Cyprus</option>
                        <option value="czech-republic">Czech Republic</option>
                        <option value="denmark">Denmark</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominica">Dominica</option>
                        <option value="ecuador">Ecuador</option>
                        <option value="egypt">Egypt</option>
                        <option value="el-salvador">El Salvador</option>
                        <option value="eritrea">Eritrea</option>
                        <option value="estonia">Estonia</option>
                        <option value="eswatini">Eswatini</option>
                        <option value="ethiopia">Ethiopia</option>
                        <option value="fiji">Fiji</option>
                        <option value="finland">Finland</option>
                        <option value="france">France</option>
                        <option value="gabon">Gabon</option>
                        <option value="gambia">Gambia</option>
                        <option value="georgia">Georgia</option>
                        <option value="germany">Germany</option>
                        <option value="ghana">Ghana</option>
                        <option value="greece">Greece</option>
                        <option value="grenada">Grenada</option>
                        <option value="guatemala">Guatemala</option>
                        <option value="guinea">Guinea</option>
                        <option value="guinea-bissau">Guinea-Bissau</option>
                        <option value="guyana">Guyana</option>
                        <option value="haiti">Haiti</option>
                        <option value="honduras">Honduras</option>
                        <option value="hong-kong">Hong Kong</option>
                        <option value="hungary">Hungary</option>
                        <option value="iceland">Iceland</option>
                        <option value="india">India</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="iran">Iran</option>
                        <option value="iraq">Iraq</option>
                        <option value="ireland">Ireland</option>
                        <option value="israel">Israel</option>
                        <option value="italy">Italy</option>
                        <option value="ivory-coast">Ivory Coast</option>
                        <option value="jamaica">Jamaica</option>
                        <option value="japan">Japan</option>
                        <option value="jordan">Jordan</option>
                        <option value="kazakhstan">Kazakhstan</option>
                        <option value="kenya">Kenya</option>
                        <option value="kiribati">Kiribati</option>
                        <option value="kosovo">Kosovo</option>
                        <option value="kuwait">Kuwait</option>
                        <option value="kyrgyzstan">Kyrgyzstan</option>
                        <option value="laos">Laos</option>
                        <option value="latvia">Latvia</option>
                        <option value="lebanon">Lebanon</option>
                        <option value="lesotho">Lesotho</option>
                        <option value="liberia">Liberia</option>
                        <option value="libya">Libya</option>
                        <option value="liechtenstein">Liechtenstein</option>
                        <option value="lithuania">Lithuania</option>
                        <option value="luxembourg">Luxembourg</option>
                        <option value="macao">Macao</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="malawi">Malawi</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="maldives">Maldives</option>
                        <option value="mali">Mali</option>
                        <option value="malta">Malta</option>
                        <option value="marshall-islands">Marshall Islands</option>
                        <option value="mauritania">Mauritania</option>
                        <option value="mauritius">Mauritius</option>
                        <option value="mexico">Mexico</option>
                        <option value="micronesia">Micronesia</option>
                        <option value="moldova">Moldova</option>
                        <option value="monaco">Monaco</option>
                        <option value="mongolia">Mongolia</option>
                        <option value="montenegro">Montenegro</option>
                        <option value="morocco">Morocco</option>
                        <option value="mozambique">Mozambique</option>
                        <option value="myanmar">Myanmar</option>
                        <option value="namibia">Namibia</option>
                        <option value="nauru">Nauru</option>
                        <option value="nepal">Nepal</option>
                        <option value="netherlands">Netherlands</option>
                        <option value="new-zealand">New Zealand</option>
                        <option value="nicaragua">Nicaragua</option>
                        <option value="niger">Niger</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="north-korea">North Korea</option>
                        <option value="north-macedonia">North Macedonia</option>
                        <option value="norway">Norway</option>
                        <option value="oman">Oman</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="palau">Palau</option>
                        <option value="palestine">Palestine</option>
                        <option value="panama">Panama</option>
                        <option value="papua-new-guinea">Papua New Guinea</option>
                        <option value="paraguay">Paraguay</option>
                        <option value="peru">Peru</option>
                        <option value="philippines">Philippines</option>
                        <option value="poland">Poland</option>
                        <option value="portugal">Portugal</option>
                        <option value="qatar">Qatar</option>
                        <option value="romania">Romania</option>
                        <option value="russia">Russia</option>
                        <option value="rwanda">Rwanda</option>
                        <option value="saint-lucia">Saint Lucia</option>
                        <option value="samoa">Samoa</option>
                        <option value="san-marino">San Marino</option>
                        <option value="saudi-arabia">Saudi Arabia</option>
                        <option value="senegal">Senegal</option>
                        <option value="serbia">Serbia</option>
                        <option value="seychelles">Seychelles</option>
                        <option value="sierra-leone">Sierra Leone</option>
                        <option value="singapore">Singapore</option>
                        <option value="slovakia">Slovakia</option>
                        <option value="slovenia">Slovenia</option>
                        <option value="solomon-islands">Solomon Islands</option>
                        <option value="somalia">Somalia</option>
                        <option value="south-africa">South Africa</option>
                        <option value="south-korea">South Korea</option>
                        <option value="south-sudan">South Sudan</option>
                        <option value="spain">Spain</option>
                        <option value="sri-lanka">Sri Lanka</option>
                        <option value="sudan">Sudan</option>
                        <option value="suriname">Suriname</option>
                        <option value="sweden">Sweden</option>
                        <option value="switzerland">Switzerland</option>
                        <option value="syria">Syria</option>
                        <option value="taiwan">Taiwan</option>
                        <option value="tajikistan">Tajikistan</option>
                        <option value="tanzania">Tanzania</option>
                        <option value="thailand">Thailand</option>
                        <option value="timor-leste">Timor-Leste</option>
                        <option value="togo">Togo</option>
                        <option value="tonga">Tonga</option>
                        <option value="tunisia">Tunisia</option>
                        <option value="turkey">Turkey</option>
                        <option value="turkmenistan">Turkmenistan</option>
                        <option value="tuvalu">Tuvalu</option>
                        <option value="uganda">Uganda</option>
                        <option value="ukraine">Ukraine</option>
                        <option value="united-kingdom">United Kingdom</option>
                        <option value="united-states">United States</option>
                        <option value="uruguay">Uruguay</option>
                        <option value="uzbekistan">Uzbekistan</option>
                        <option value="vanuatu">Vanuatu</option>
                        <option value="vatican-city">Vatican City</option>
                        <option value="venezuela">Venezuela</option>
                        <option value="vietnam">Vietnam</option>
                        <option value="yemen">Yemen</option>
                        <option value="zambia">Zambia</option>
                        <option value="zimbabwe">Zimbabwe</option>
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
                Files contain: Source Country, Destination Country, Visa Status, Visa Type, Duration
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