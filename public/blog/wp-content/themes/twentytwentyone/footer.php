<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<svg style="display:none;">
		<style>
		/* footer */
		@import url("https://fonts.googleapis.com/css2?family=Allan&family=Lato&family=Playfair+Display:ital,wght@1,500;1,600&family=Poly&display=swap");
* {
  margin: 0;
  padding: 0;
}

.goog-te-banner-frame.skiptranslate {
  display: none !important;
}

body {
  top: 0px !important;
  font-family: "Lato", sans-serif;
  background-color: rgba(137, 207, 240, 0.2);
}

/* End */
		</style>
	</svg>
	<footer class="footer" id="footer">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-3">
                <a href="https://fundraisingcup.org/index" class="footerLogo"><img class="w-100" src="https://fundraisingcup.org/blog/wp-content/uploads/2022/03/mainLogo.png" alt="mainLogo.png"></a>
                <ul>
                    <li>
                        <button type="button" class="btn btn-light p-1 ps-3 pe-3 mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" translate="no" id='language-selected'><b>Select language</b></button>

                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="staticBackdropLabel"><b>Update your settings</b></h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <label class="form-label" for="google_translate_element">
                                            <h6 class="mb-0">Select a language</h6>
                                        </label>
                                        <div id="google_translate_element"></div>

                                        <label class="form-label" for="country">
                                            <h6 class="mb-0">Select a country</h6>
                                        </label>
                                        <select class="country" id="country" name="country">
                                          <option>select country</option>
                                          <option value="AF">Afghanistan</option>
                                          <option value="AX">Aland Islands</option>
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
                                          <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
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
                                          <option value="CD">Congo, Democratic Republic of the Congo</option>
                                          <option value="CK">Cook Islands</option>
                                          <option value="CR">Costa Rica</option>
                                          <option value="CI">Cote D'Ivoire</option>
                                          <option value="HR">Croatia</option>
                                          <option value="CU">Cuba</option>
                                          <option value="CW">Curacao</option>
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
                                          <option value="GW">Guinea-Bissau</option>
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
                                          <option value="IL">Israel</option>
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
                                          <option value="XK">Kosovo</option>
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
                                          <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
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
                                          <option value="BL">Saint Barthelemy</option>
                                          <option value="SH">Saint Helena</option>
                                          <option value="KN">Saint Kitts and Nevis</option>
                                          <option value="LC">Saint Lucia</option>
                                          <option value="MF">Saint Martin</option>
                                          <option value="PM">Saint Pierre and Miquelon</option>
                                          <option value="VC">Saint Vincent and the Grenadines</option>
                                          <option value="WS">Samoa</option>
                                          <option value="SM">San Marino</option>
                                          <option value="ST">Sao Tome and Principe</option>
                                          <option value="SA">Saudi Arabia</option>
                                          <option value="SN">Senegal</option>
                                          <option value="RS">Serbia</option>
                                          <option value="CS">Serbia and Montenegro</option>
                                          <option value="SC">Seychelles</option>
                                          <option value="SL">Sierra Leone</option>
                                          <option value="SG">Singapore</option>
                                          <option value="SX">Sint Maarten</option>
                                          <option value="SK">Slovakia</option>
                                          <option value="SI">Slovenia</option>
                                          <option value="SB">Solomon Islands</option>
                                          <option value="SO">Somalia</option>
                                          <option value="ZA">South Africa</option>
                                          <option value="GS">South Georgia and the South Sandwich Islands</option>
                                          <option value="SS">South Sudan</option>
                                          <option value="ES">Spain</option>
                                          <option value="LK">Sri Lanka</option>
                                          <option value="SD">Sudan</option>
                                          <option value="SR">Suriname</option>
                                          <option value="SJ">Svalbard and Jan Mayen</option>
                                          <option value="SZ">Swaziland</option>
                                          <option value="SE">Sweden</option>
                                          <option value="CH">Switzerland</option>
                                          <option value="SY">Syrian Arab Republic</option>
                                          <option value="TW">Taiwan, Province of China</option>
                                          <option value="TJ">Tajikistan</option>
                                          <option value="TZ">Tanzania, United Republic of</option>
                                          <option value="TH">Thailand</option>
                                          <option value="TL">Timor-Leste</option>
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
                                          <option value="AE">United Arab Emirates</option>
                                          <option value="GB">United Kingdom</option>
                                          <option value="US">United States</option>
                                          <option value="UM">United States Minor Outlying Islands</option>
                                          <option value="UY">Uruguay</option>
                                          <option value="UZ">Uzbekistan</option>
                                          <option value="VU">Vanuatu</option>
                                          <option value="VE">Venezuela</option>
                                          <option value="VN">Viet Nam</option>
                                          <option value="VG">Virgin Islands, British</option>
                                          <option value="VI">Virgin Islands, U.s.</option>
                                          <option value="WF">Wallis and Futuna</option>
                                          <option value="EH">Western Sahara</option>
                                          <option value="YE">Yemen</option>
                                          <option value="ZM">Zambia</option>
                                          <option value="ZW">Zimbabwe</option>
                                        </select>

                                        <div class="m-auto mt-3 mb-3">
                                            <button type="button" class="btn btn-success float-end">Save</button>
                                            <button type="button" class="btn btn-light float-end me-3" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button onclick="window.open('https://www.paypal.com/donate/?hosted_button_id=TC5KBK3U4XETA')" type="button" class="btn btn-light px-4 mt-1 mb-1 success-color text-light"><b>Donate Now</b></button>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>FUNDRAISE FOR</h6>
                <ul>
                    <li>
                        <a href="https://fundraisingcup.org/fund/1">Medical</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/fund/2">Emergency</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/fund/3">Memorial</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/fund/4">Education</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/fund/5">Coronavirus fundraising</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>LEARN MORE</h6>
                <ul>
                    <li>
                        <a href="https://fundraisingcup.org/how-it-works">How Start Fundraising works</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/common-questions">Common questions</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/success-stories">Success stories</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/pricing">Pricing</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>RESOURCES</h6>
                <ul>
                    <li>
                        <a href="https://fundraisingcup.org/help-center">Help center</a>
                    </li>
                    <li>
                        <a href="blog">Blog</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/careers">Careers</a>
                    </li>
                    <li>
                        <a href="https://fundraisingcup.org/about-us">About</a>
                    </li>
                    <li>
                        <div class="accordion footerDropdown" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="flase" aria-controls="collapseOne">
                                        More resources
                                    </button>
                                </h2>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 me-0 m-auto">
                <div class="accordion footerDropdown" id="accordionExample">
                    <div class="accordion-item">
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h6>MORE RESOURCES</h6>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>
                                                <a href="https://fundraisingcup.org/blog/women-health/">Women Health</a>
                                            </li>
                                            <li>
                                                <a href="https://fundraisingcup.org/blog/you-can-win-with-jesus/">You Can Win With Jesus</a>
                                            </li>
                                               <li>
                                                <a href="https://fundraisingcup.org/how-it-works">What is crowdfunding?</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>
                                                <a href="https://fundraisingcup.org/blog/be-your-dogs-best-friend/">Be Your Dogs Best Friend</a>
                                            </li>
                                            <li>
                                                <a href="https://fundraisingcup.org/blog/freshwater-fish-for-your-aquarium/">Freshwater Fish For Your Aquarium</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>
                                                <a href="https://fundraisingcup.org/blog/stress-self-esteem-reaching-out-for-help/">Stress Self Esteem Reaching Out For Help</a>
                                            </li>
                                            <li>
                                                <a href="https://fundraisingcup.org/fundraising-ideas">Fundraising ideas</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">© 2010-2022 Start Fundraising</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Terms</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Privacy</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Legal</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 m-auto me-0">
                    <ul>
                        <li>
                            <a target="_blank" class="faceBookIcon" href="https://www.facebook.com/Fundraisingcup/"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a target="_blank" class="youTubeIcon" href="https://www.youtube.com/c/FUNDRAISINGCUPORG/featured"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a target="_blank" class="twitter" href="https://twitter.com/fundraisingcup"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/fundraisingcup/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.pinterest.com/FundraisingCupMinistry/"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>

<script>
	$(document).ready(function () {
    
$('.navbar .dropdown').hover(function () {
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
}, function () {
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
});
});

</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript" >
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
    $("body").on("change", "#google_translate_element select", function(e) {
        document.querySelector('#language-selected').innerHTML = $(this).find(":selected").text()

    });
</script>
</body>
</html>