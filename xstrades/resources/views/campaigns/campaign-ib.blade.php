

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.1/js/intlTelInput.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '488789377972393'); 
        </script>
        <noscript>
        <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=488789377972393&ev=PageView
        &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.addEventListener('submit', function(event) {
                    if (event.target.id === 'register-form') {
                        fbq('track', 'Lead');
                    }
                });
            });
        </script>


    <style>

        body{
            direction: rtl;
        }

        input.form-control, select.form-control{
            border-radius: 17px;
            border: 0px solid grey;
            background: #F2F4F8;
            padding: 10px;
        }
        button.submit{
            background: #30af85;
            color: white;
            border-radius: 17px;
        }

        .custom-container {
            max-width: 1000px; /* Adjust the width as needed */
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .iti--allow-dropdown{
            width: 100%;
        }

        #languageSelector{
            border: 0px;
            border-radius: 10px;
            padding: 10px;
            margin-right: 10px;
        }

        .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container{
            left: auto !important;
        }

        #phone{
            padding-right: 100px;
            padding-left: 100px !important;
        }

        /* .iti__country-list{
            position: relative !important;
        } */

        @media (max-width: 768px) {
            .oman-img{
                width: 150px;
            }
            .logo-img{
                 width: 120px;
            }
        }

        @media (min-width: 768px) {
            .oman-img{
                width: 250px;
            }
            .logo-img{
                 width: 150px;
            }
        }

        .iti__country-list{
            right: 1;
        }

        .swal2-html-container{
            direction: ltr;
        }

        @media (min-width: 768px) {
            .footer-background{
                background-image: url("{{ asset('/img/campaign/campaign-footer-background.png') }}");
                background-position: center;
            }

            .header-background{
                background-image: url("{{ asset('/img/campaign/campaign-header-background.png') }}");
                background-position: center;
            }
        }

        @media (max-width: 768px) {
            .header-background{
                background-image: url("{{ asset('/img/campaign/bg-mobile.png') }}");
                background-position: center;
                background-repeat: no-repeat;
            }
        }

        #phone::placeholder {
            padding-right: 30px;
        }
        
    </style> 


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '
    https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NXG8FDCN');</script>
    <!-- End Google Tag Manager -->

</head>
    <body style="background: #f5f5f5;">
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="
    https://www.googletagmanager.com/ns.html?id=GTM-NXG8FDCN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <div class="custom-container" dir="ltr">
            <div class="row py-5 header-background">
                <div class="col-4">
                    {{-- <img class="oman-img" src="{{ asset('/img/oman-campaign.png') }}"> --}}
                </div>
                <div class="col-8 my-3 text-end">
                    <img class="logo-img" src="{{ asset('img/logo.webp') }}">
                </div>    
            </div>
        </div>
        <div class="custom-container p-3" style="background:white;border-radius:10px;">
            <div class="row">
                <div class="col-12">
                    <h3 style="color:#01337f;">تفاصيل التسجيل</h3>
                </div>
            </div>
            <form action="{{ route('create.lead') }}" method="POST" id="register-form">
                <div class="row my-4">
                    <div class="col-12">
                        <input type="text" class="form-control" name="firstName" placeholder="الإسم الأول (الرجاء استخدام الأحرف اللاتينية والمسافات والشرطات فقط)">
                    </div>
                </div>
                <input type="hidden" class="form-control" name="middleName" placeholder="">
                <div class="row my-4">
                    <div class="col-12">
                        <input type="text" class="form-control" name="lastName" placeholder="الإسم الأخير (الرجاء استخدام الأحرف اللاتينية والمسافات والشرطات فقط)">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <input class="form-control" id="phone" type="tel" dir="rtl" name="phone" placeholder="رقم الهاتف (الرجاء استخدام الأرقام فقط)">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <select type="text" class="form-control" name="country">
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, The Democratic Republic of The</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D'ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and Mcdonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and The Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and The South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE" selected>United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <input type="text" class="form-control" name="city" placeholder="المدينة">
                    </div>
                </div>
                <input type="hidden" name="tag" id="tag" value="Mena Webinar">
                <input type="hidden" name="country_code" id="country_code">
                <input type="hidden" name="lead" value="true">
                <input type="hidden" name="token" value="8136587818bdd96ec320261a867a43053fa2408baf102334dad26d4ad3b621abe5ce4bfbe0913834a3fe720cabe97a2789183baf3c585ac7ed7632e2">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="marketingTag" value="Mena Webinar IB">
                <input type="hidden" name="country_code" id="country_code">
                <div class="row my-4">
                    <div class="col-lg-2 col-sm-12 col-md-2">
                        <button type="submit" class="form-control submit" name="submit" onclick="triggerConversion()" id="register-webinar">تسجيل</button>
                    </div>
                </div>
                <span style="font-size:12px;">تحتوي جميع عمليات التداول على مخاطرة عالية. من الممكن أن تخسر رأس المال كاملاً.</span>
            </form>
        </div>
        <div class="custom-container">
            <div class="row footer-background py-5">
                <div class="col-12 py-5">
                </div>
            </div>
        </div>
    </section>

    <script>
        // Define an array of MENA countries
        var menaCountries = ["ae", "sa", "eg", "qa", "jo", "kw", "bh", "om", "dz", "tn", "ma", "ly", "lb", "iq", "sy", "ye"];
    
        // Initialize intlTelInput with options
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            countrySearch: true,
            defaultCountry: "ae",  // Set default country to UAE
            separateDialCode: true,
            utilsScript: "path/to/intl-tel-input/js/utils.js",  // Path to utils.js
        });
    
        // Get all countries data
        var allCountries = iti.getCountries();
    
        // Filter out non-MENA countries from all countries
        var menaCountryObjects = allCountries.filter(function(country) {
            return menaCountries.indexOf(country.iso2) !== -1;
        });
    
        // Sort MENA countries to be preferred
        var sortedMenaCountries = menaCountryObjects.sort(function(a, b) {
            return menaCountries.indexOf(a.iso2) - menaCountries.indexOf(b.iso2);
        });
    
        // Get the selected country data
        var selectedCountryData = iti.getSelectedCountryData();
    
        // Set onlyCountries to sorted MENA countries
        iti.setCountries(sortedMenaCountries);
    
    </script>
    <script>
        // Display success message if available
        @if(session('successMessage'))
            Swal.fire({
                title: "Success!",
                text: "{{ session('successMessage') }}",
                icon: "success",
            });
        @endif

        // Display error message if available
        @if(session('errorMessage'))
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{ session('errorMessage') }}",
            });
        @endif

        function triggerConversion() {
            // Push a conversion event to the dataLayer
            gtag('event', 'conversion', {'send_to': 'GTM-NXG8FDCN'});
        }
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('register-form').addEventListener('submit', function(event) {
            // Get the selected country data
            var selectedCountryData = iti.getSelectedCountryData();
            
            // Update the phone field with the country code and phone number
            var phoneInput = document.getElementById('phone');
            phoneInput.value = selectedCountryData.dialCode + phoneInput.value;

            // Optional: You can also update the hidden country_code field if needed
            document.getElementById('country_code').value = selectedCountryData.dialCode;
        });
    });
</script>
    </body>
</html>