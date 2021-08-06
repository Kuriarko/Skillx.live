

<html>
<head>
        <title> Registration</title>
        <meta name="description" content="Sign up for an artist account.">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" type="text/css" href="assets/css/form.css">
		
		
		
		
		
        <script type='text/javascript' src='/js/globalScripts.js?v=58c3da5f9e'></script>
        <script type='text/javascript' src='https://www.google.com/recaptcha/api.js'></script>

        <script type='text/javascript'>

            function validateform()
            {
				var f_name = document.getElementById("firstname");
				var l_name = document.getElementById("lastname");
				var city = document.getElementById("city");
				var pcode = document.getElementById("zipcode");
				var country = document.getElementById("country");
				var email = document.getElementById("email");
				var cemail = document.getElementById("confirmemail");
				var username = document.getElementById("username");
				var pass = document.getElementById("password");
				var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

              
              
			   if(f_name.value.trim()=="")
			   {
				   alert("First Name cannot be blank");
				   f_name.style.border = "solid 3px red";
				   return false;
			   }
			   else if(l_name.value.trim()=="")
			   {
				  alert("Last Name cannot be blank");
				   l_name.style.border = "solid 3px red";
				   return false; 
			   }
			   else if(city.value.trim()=="")
			   {
				  alert("city Name cannot be blank");
				   city.style.border = "solid 3px red";
				   return false; 
			   } 
			   else if(pcode.value.trim()=="")
			   {
				  alert("Postal Code cannot be blank");
				   pcode.style.border = "solid 3px red";
				   return false; 
			   }
			   else if(country.value.trim()=="")
			   {
				  alert("Country Name cannot be blank");
				   country.style.border = "solid 3px red";
				   return false; 
			   }
			   else if(email.value.trim()=="")
			   {
				  alert("Email cannot be blank");
				   email.style.border = "solid 3px red";
				   return false; 
			   }
			   
			  
			   else if(cemail.value.trim()=="")
			   {
				  alert("Please confirm your email");
				   cemail.style.border = "solid 3px red";
				   return false; 
			   }
			   
			   else if(email.value.trim()!= cemail.value.trim())
			   {
				   alert("Emails must match");
				   return false;
			   }
			   
			   else if(username.value.trim()=="")
			   {
				   alert("Please enter a username");
				   return false;
			   }
			   
			   else if(pass.value.trim()=="")
			   {
				   alert("please enter a password");
				  
				   return false;
			   }
			   
			   
			   else
			   { true;}

            }

            function captchaFixFocus()
            {
                // https://stackoverflow.com/questions/41889296/google-recaptcha-scroll-to-bottom-of-page-when-verified-on-ios-devices
                var flagIos = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

                if(flagIos === true)
                {
                    var targetDiv = document.getElementById('captchaContainerDiv');
                    targetDiv.scrollIntoView();
                }
            }

        </script>

        <style type='text/css'>

            input {     float: left;
                        font: 14pt arial;
                        color: #444444;
                        padding-top: 2px;
                        padding-bottom: 2px;
                        background-color: #EEEEEE;
                        border: 1px solid #999999;
                        border-radius: 2px;
                        box-shadow: 0px 8px 8px -5px #F5F5F5;
                    }

            select {    float: left;
                        font: 14pt arial;
                        color: #444444;
                        padding-top: 2px;
                        padding-bottom: 2px;
                        background-color: #EEEEEE;
                        border: 1px solid #999999;
                        border-radius: 2px;
                        box-shadow: 0px 8px 8px -5px #F5F5F5;
                    }

            .title  {font-weight: normal;
                    }

            #joindiv
            {
                display: inline-block;
                width: 100%;
                max-width: 850px;
                overflow: hidden;
                border: 1px solid #999999;
                border-radius: 2px;
                box-shadow: none;
                background-image: none;
                background-position: right bottom;
                background-size: 20% auto;
                background-repeat: no-repeat;
                margin-top: 15px;
                padding-top: 20px;
                padding-bottom: 20px;
                text-align: left;
            }

            .registrationdiv
            {
                display: inline-block;
                width: 45%;
                padding-left: 2%;
                padding-right: 2%;
                vertical-align: top;
                text-align: left;
            }

            .registrationdiv > div
            {
                float: left;
                width: 100%;
                padding-top: 10px;
            }

            .registrationdiv > div > p:nth-child(1)
            {
                float: left;
                width: 45%;
                max-width: 170px;
                font: 14pt arial;
            }

            .registrationdiv > div > input, .registrationdiv > div > select
            {
                display: inline-block;
                width: 50%;
                font: 14pt arial;
            }

            #securitycodediv
            {
                display: inline-block;
                width: 50%;
            }

            @media screen and (max-width: 800px)
            {
                .registrationdiv > div > p:nth-child(1)
                {
                    font: 12pt arial;
                }
            }

            @media screen and (max-width: 640px)
            {
                #joindiv
                {
                    text-align: center;
                    background-image: none;
                }

                .registrationdiv
                {
                    width: 80%;
                    max-width: 300px;
                }

                .registrationdiv > div
                {
                    padding-top: 20px;
                }

                .registrationdiv:nth-child(2)
                {
                    margin-top: 10px;
                }

                .registrationdiv > div > p:nth-child(1)
                {
                    float: none;
                    width: 100%;
                    font: 10pt arial;
                    padding-bottom: 5px;
                }

                .registrationdiv > div > input, .registrationdiv > div > select
                {
                    display: inline-block;
                    width: 100%;
                    font: 14pt arial;
                }

                #securitycodediv
                {
                    display: inline-block;
                    width: 90%;
                }
            }

            @media screen and (max-width: 480px)
            {
                .g-recaptcha
                {
                    transform: scale(0.75); -webkit-transform: scale(0.75); transform-origin: 0 0; -webkit-transform-origin: 0 0;
                }
            }

        </style>
</head>
<body>

<section>
 <div class='container' style='padding-top: 25px; padding-bottom: 50px;'>

            <center>
            <form id='registrationform' name="registrationform" autocomplete="off" method="post" onsubmit="return validateform()" action="<?php echo base_url();?>Home/wc">

              
     <h2 style='float: left; width: 100%; font-size: 28pt; font-family: oswald, arial; font-weight: normal; word-spacing: 5px;'>PROFESSIONALS REGISTRATION</h2>
                
                <div id='joindiv'>

                    <div class='registrationdiv'><div><p>First Name:</p><input type='text' id='firstname' name='firstname' value=""></div><div><p>Last Name:</p><input type='text' id='lastname' name='lastname' value=""></div><div><p>City:</p><input type='text' id='city' name='city' value="Mumbai"></div><div><p>Postal Code:</p><input type='text' id='zipcode' name='zipcode' value=""></div><div><p>Country:</p><select id='country' name='country'><option value='Afghanistan' >Afghanistan</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Angola' >Angola</option><option value='Anguilla' >Anguilla</option><option value='Antarctica' >Antarctica</option><option value='Antigua and Barbuda' >Antigua and Barbuda</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Aruba' >Aruba</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnia-Herzegovina' >Bosnia-Herzegovina</option><option value='Botswana' >Botswana</option><option value='Bouvet Island' >Bouvet Island</option><option value='Brazil' >Brazil</option><option value='British Indian Ocean Territory' >British Indian Ocean Territory</option><option value='Brunei Darussalam' >Brunei Darussalam</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia, Kingdom of' >Cambodia, Kingdom of</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Cape Verde' >Cape Verde</option><option value='Cayman Islands' >Cayman Islands</option><option value='Central African Republic' >Central African Republic</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Christmas Island' >Christmas Island</option><option value='Cocos Islands' >Cocos Islands</option><option value='Colombia' >Colombia</option><option value='Commercial' >Commercial</option><option value='Comoros' >Comoros</option><option value='Congo' >Congo</option><option value='Cook Islands' >Cook Islands</option><option value='Costa Rica' >Costa Rica</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='East Timor' >East Timor</option><option value='Ecuador' >Ecuador</option><option value='Educational' >Educational</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Equatorial Guinea' >Equatorial Guinea</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Ethiopia' >Ethiopia</option><option value='Falkland Islands' >Falkland Islands</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='Former Czechoslovakia' >Former Czechoslovakia</option><option value='Former USSR' >Former USSR</option><option value='France' >France</option><option value='French Guyana' >French Guyana</option><option value='French Southern Territories' >French Southern Territories</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Gibraltar' >Gibraltar</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guadeloupe' >Guadeloupe</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guinea' >Guinea</option><option value='Guinea Bissau' >Guinea Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Heard and McDonald Islands' >Heard and McDonald Islands</option><option value='Holy See (Vatican City State)' >Holy See (Vatican City State)</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' selected>Indonesia</option><option value='International' >International</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Ivory Coast' >Ivory Coast</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyz Republic' >Kyrgyz Republic</option><option value='Laos' >Laos</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macau' >Macau</option><option value='Macedonia' >Macedonia</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshall Islands' >Marshall Islands</option><option value='Martinique' >Martinique</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mayotte' >Mayotte</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldavia' >Moldavia</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montenegro' >Montenegro</option><option value='Montserrat' >Montserrat</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='Netherlands Antilles' >Netherlands Antilles</option><option value='Network' >Network</option><option value='Neutral Zone' >Neutral Zone</option><option value='New Caledonia' >New Caledonia</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Niue' >Niue</option><option value='Norfolk Island' >Norfolk Island</option><option value='North Korea' >North Korea</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Panama' >Panama</option><option value='Papua New Guinea' >Papua New Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Pitcairn Island' >Pitcairn Island</option><option value='Poland' >Poland</option><option value='Polynesia' >Polynesia</option><option value='Portugal' >Portugal</option><option value='Principality of Andorra' >Principality of Andorra</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Reunion' >Reunion</option><option value='Romania' >Romania</option><option value='Russian Federation' >Russian Federation</option><option value='Rwanda' >Rwanda</option><option value='S. Georgia & S. Sandwich Isls.' >S. Georgia & S. Sandwich Isls.</option><option value='Saint Helena' >Saint Helena</option><option value='Saint Kitts & Nevis Anguilla' >Saint Kitts & Nevis Anguilla</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Pierre and Miquelon' >Saint Pierre and Miquelon</option><option value='Saint Tome and Principe' >Saint Tome and Principe</option><option value='Saint Vincent & Grenadines' >Saint Vincent & Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Serbia' >Serbia</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Slovak Republic' >Slovak Republic</option><option value='Slovenia' >Slovenia</option><option value='Solomon Islands' >Solomon Islands</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='South Korea' >South Korea</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Suriname' >Suriname</option><option value='Svalbard and Jan Mayen Islands' >Svalbard and Jan Mayen Islands</option><option value='Swaziland' >Swaziland</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Tadjikistan' >Tadjikistan</option><option value='Taiwan' >Taiwan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='The Democratic Republic of the Congo' >The Democratic Republic of the Congo</option><option value='Togo' >Togo</option><option value='Tokelau' >Tokelau</option><option value='Tonga' >Tonga</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Turks and Caicos Islands' >Turks and Caicos Islands</option><option value='Tuvalu' >Tuvalu</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='United Kingdom' >United Kingdom</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='Uruguay' >Uruguay</option><option value='USA Government' >USA Government</option><option value='USA Military' >USA Military</option><option value='USA Minor Outlying Islands' >USA Minor Outlying Islands</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Virgin Islands (British)' >Virgin Islands (British)</option><option value='Virgin Islands (USA)' >Virgin Islands (USA)</option><option value='Wallis and Futuna Islands' >Wallis and Futuna Islands</option><option value='Western Sahara' >Western Sahara</option><option value='Yemen' >Yemen</option><option value='Yugoslavia' >Yugoslavia</option><option value='Zaire' >Zaire</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option></select></div></div><div class='registrationdiv'>
					<div><p>E-Mail:</p><input type='text' id='email' name='email' value=''></div><div><p>Confirm E-Mail:</p><input type='text' id='confirmemail' name='confirmemail' value=''></div><div><p>Username:</p><input type='text' id='username' name='username' value=''></div>
					<div><p>Password:</p><input type='password' id='password' name='password' value=""></div><div id='captchaContainerDiv' style='margin-top: 20px;'><div class='g-recaptcha' data-sitekey='6LdBMGgUAAAAAPPSDZVKEbEgOFVAk4Q9KcFOLgd1' data-callback='captchaFixFocus'></div>
</div></div>
<div class='registrationdiv' style='padding-top: 25px;'><div>
<p style='float: left; width: 100%; max-width: none; font: 10pt arial;'>Why do we ask for your address?&nbsp;&nbsp;&nbsp;Many of the features on our website are location-based, and we need to know where you are located in the world.&nbsp;&nbsp;&nbsp;</p></div>
<div style='padding-top: 25px;'>
<input style='float: left; width: auto; box-shadow: none; margin-right: 5px; margin-bottom: 5px; border: none; background-color: #FFFFFF;' type='checkbox' name='termsofuse' value='yes' >
<p style='font: 10pt arial;'>I accept the <a style='font: 10pt arial; color: #000000; text-decoration: underline;' href='termsofuse.html' target='_blank'>Terms of Use</a>.</p></div>
<input type='hidden' id='referralcode' name='referralcode' value=''></div>

                </div>

                <div style="display: inline-block; width: 95%; max-width: 850px; padding-top: 25px;">
                    <div style="float: right; width: 220px;">

                        <a href="#"><img style="float: right; border: none; width: 50px; height: 45px;" src="https://images.fineartamerica.com/public/assets/images/ArrowNextBlue.jpg"></a>

                        <p style="float: right; padding-top: 6px; padding-right: 15px;">
                        <input type="submit" style='font: 20pt arial; font-weight: bold; color: #222222; text-shadow: none;' value="submit">

                    </div>
                </div>


            </form>
     </center>
        </div>
		</section>
</body>

</html>