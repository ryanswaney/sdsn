<?php
  /**
  * Template Name: DDPP 2.0 Child Page
  */
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deep Decarbonization Pathways - <?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddpp/css/app.css" />
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddpp/js/modernizr.js"></script>
  </head>
  <body>

    <nav class="site-nav-bar">
      <section class="left-bar">
      <!-- <button class="menu-button"></button> -->
        <button class="menu-icon">
          <span></span>
        </button>
      </section>
      <section class="right-bar">
        <h1 class="site-title"><a href="http://deepdecarbonization.org">Deep Decarbonization Pathways</a></h1>
      </section>
      <section class="full-nav">
        <ul>
          <li>
            <a href="http://unsdsn.org/what-we-do/deep-decarbonization-pathways/organization/">Organization</a>
          </li>
          <!--
          <li>
            <a href="">Approach</a>
          </li>
          -->
          <li>
            <a href="http://unsdsn.org/what-we-do/deep-decarbonization-pathways/timeline/">Timeline</a>
          </li>
          <!--
          <li>
            <a href="#news">News</a>
          </li>
          -->
        </ul>
      </section>
    </nav>


    <div class="main" role="main">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <section class="feature">
        <div class="container">

          <div class="page-header">
            <h2 class="page-title"><?php the_title(); ?></h2>
          </div>

        </div>
      </section>

      <section class="posts">
        <div class="container">
          
          <div class="page-content">
            <?php the_content(); ?>
          </div>

        </div>
      </section>

    <?php endwhile; ?>

      <section class="newsletter">
        <div class="container">
          
          <h2 class="text-center">Stay informed. Sign up for updates from the DDPP.</h2>

          <form
            id="subscribe-form"
            action="http://unsdsn.us8.list-manage.com/subscribe/post-json?u=a04105bfca6c4cb8c24ff8680&amp;id=60327d3bd0"
            method="get"
            data-abide="ajax">
          <div class="subscription-fields">
            <div class="firs-tname-field">
              <label>
                First Name*<br>
                <input type="text" name="FNAME" required pattern="[a-zA-Z]+">
              </label>
              <small class="error">First name is required.</small>
            </div>
            <div class="last-name-field">
              <label>
                Last Name*<br>
                <input type="text" name="LNAME" required pattern="[a-zA-Z]+">
              </label>
              <small class="error">Last name is required.</small>
            </div>
            <div class="email-field">
              <label>
                Email*<br>
                <input type="email" name="EMAIL" required>
              </label>
              <small class="error">An email address is required.</small>
            </div>
            <div class="country-field">
              <label>
                Country<br>
                <select name="MMERGE4" class="" id="mce-MMERGE4">
                  <option value="" selected></option>
                  <option value="United States">United States</option>
                  <option value="Aaland Islands">Aaland Islands</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Curacao">Curacao</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Territories">French Southern Territories</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guernsey">Guernsey</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jersey (Channel Islands)">Jersey (Channel Islands)</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libya">Libya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="North Korea">North Korea</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Palestine">Palestine</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Republic of Kosovo">Republic of Kosovo</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                  <option value="Samoa (Independent)">Samoa (Independent)</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Sint Maarten">Sint Maarten</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                  <option value="South Korea">South Korea</option>
                  <option value="South Sudan">South Sudan</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="St. Helena">St. Helena</option>
                  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City">Vatican City</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </label>
              </div> <!-- .country-field -->

              <!-- ddpp group -->
              <input hidden checked type="checkbox" value="2" name="group[10505][2]" id="mce-group[10505]-10505-1">
            </div>

            <button class="subscribe-btn mchimp-sub" type="submit">
              Subscribe
              <div class="loadingtrail" style="display:none"></div>
            </button>

            <div id="subscribe-result"></div>

          </form>

        </div>
      </section>

    </div> <!-- .main -->

    <footer class="footer">
        <div class="container">
          <div class="contact-info">
            <h2 class="text-center">Questions or comments?</h2>
            <p>We welcome your questions or comments on our work. Please get in touch 
  with us by writing to <a href="mailto:info@deepdecarbonization.org">info@deepdecarbonization.org.</a></p>
            <ul class="partner-info">
              <li>
                <a href="http://unsdsn.org">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddpp/images/sdsn-logo.png" alt="Permalink to: SDSN (unsdsn.org)">
                </a>
              </li>
              <li>
                <a href="http://iddri.org">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddpp/images/iddri-logo.png" alt="Permalink to: IDDRI (iddri.org)">
                </a>
              </li>
            </ul>
          </div> <!-- .contact-info -->
        </div> <!-- .container -->
      </footer>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddpp/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddpp/js/foundation.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddpp/js/app.js"></script>
  </body>
</html>