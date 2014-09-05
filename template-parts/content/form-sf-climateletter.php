<?php

  //  Build out form fields based on language of the current page (based on page-slug).
  //  Localization needed to be done asap, so here's this...

    switch ($post->post_name) {

    // Climate Letter (French)
    case 'climate-letter-fr': 

      $form_labels = array(

        'first_name'      =>  "Prénom",
        'last_name'       =>  "Nom",
        'email'           =>  "Email",
        'org'             =>  "Organisation",
        'position'        =>  "Fonction",
        'country'         =>  "Pays",
        'call_to_action'  =>  "Apporter Votre Soutien",
        'return_URL'      =>  site_url() . "/climate-letter-fr/signature-added-fr/",
        'required_label'  =>  "*Champs obligatoires",
        'errors'          =>  array(
            'first_name_err'  => "Le Prénom est requis.",
            'last_name_err'   => "Le Nom est requis.",
            'email_err'       => "Une adresse mail est nécessaire."
          )
      );

      $social_labels = array(
        'share_title'   => "Partager la campagne",
        'share_msg'     => "Pour faire de cette campagne un succès, nous avons besoin de votre aide pour étendre le message.",
        'share_twitter' => "http://twitter.com/share?text=Please sign this letter and tell world leaders that 2°C is the limit for a safe planet&url=http://goo.gl/155Qr3&hashtags=2degreelimit,climatechange",
        'share_fb'      => "http://www.facebook.com/share.php?u=". esc_url( get_permalink( $post->ID ) ) ."&title=Il est temps d’agir : 2 degrés est la limite",
        'share_email'   => "mailto:?subject=It is time to act: 2 degrees is the limit&body=I'm writing because I've just added my name to the a letter urging world leaders to take urgent action on climate change and commit to limiting global warming to less than 2°C--and I'm inviting you to add your support. Take a minute to read the letter and add your name at unsdsn.org/climate-letter-fr!"
      );

      break;

    // Climate Letter (Spanish)
    case 'climate-letter-sp':

      $form_labels = array(

        'first_name'      =>  "Nombre",
        'last_name'       =>  "Apellido",
        'email'           =>  "Email",
        'org'             =>  "Organización",
        'position'        =>  "Posición",
        'country'         =>  "País",
        'call_to_action'  =>  "Añada Su Apoyo",
        'return_URL'      =>  site_url() . "/climate-letter-sp/signature-added-sp/",
        'required_label'  =>  "*Campos obligatorios",
        'errors'          => array(
            'first_name_err'  => "Nombre es obligatorio.",
            'last_name_err'   => "Se precisa el apellido.",
            'email_err'       => "Se requiere una dirección de correo electrónico."
          )
      );

      $social_labels = array(
        'share_title'   => "Comparta la Campaña",
        'share_msg'     => "Para hacer que esta campaña sea un éxito, necesitamos su ayuda para difundir el mensaje.",
        'share_twitter' => "http://twitter.com/share?text=Por favor firme esta carta y dígale a los líderes mundiales que 2 ° C es el límite para un planeta seguro.&url=http://goo.gl/155Qr3&hashtags=2degreelimit,climatechange",
        'share_fb'      => "http://www.facebook.com/share.php?u=". esc_url( get_permalink( $post->ID ) ) ."&title=Es hora de actuar: 2 grados es el límite",
        'share_email'   => "mailto:?subject=Es hora de actuar: 2 grados es el límite&body=Acabo de añadir  mi nombre a una carta instando a los líderes mundiales a tomar medidas urgentes contra el cambio climático y a comprometerse a limitar el calentamiento global a menos de 2 ° C. Le invito a sumar tu apoyo. Tómese un minuto para leer la carta y añadir su nombre en unsdsn.org/climate-letter-sp!"
      );

      break;

    // Climate Letter (English + Default)
    default:

      $form_labels = array(

        'first_name'      =>  "First Name",
        'last_name'       =>  "Last Name",
        'email'           =>  "Email",
        'org'             =>  "Organization",
        'position'        =>  "Position",
        'country'         =>  "Country",
        'call_to_action'  =>  "Add Your Support",
        'return_URL'      =>  site_url() . "/climate-letter/signature-added/",
        'required_label'  =>  "*Required fields.",
        'errors'          =>  array(
            'first_name_err'  => "First Name is required.",
            'last_name_err'   => "Last Name is required.",
            'email_err'       => "An email address is required."
          )
      );

      $social_labels = array(
        'share_title'   => "Share the Campaign",
        'share_msg'     => "To make this campaign a success, we need your help to spread the message.",
        'share_twitter' => "http://twitter.com/share?text=Please sign this letter and tell world leaders that 2°C is the limit for a safe planet&url=http://goo.gl/155Qr3&hashtags=2degreelimit,climatechange",
        'share_fb'      => "http://www.facebook.com/share.php?u=". esc_url( get_permalink( $post->ID ) ) ."&title=It is Time to Act: 2 Degrees is the Limit",
        'share_email'   => "mailto:?subject=It is time to act: 2 degrees is the limit&body=I'm writing because I've just added my name to the a letter urging world leaders to take urgent action on climate change and commit to limiting global warming to less than 2°C--and I'm inviting you to add your support. Take a minute to read the letter and add your name at unsdsn.org/climate-letter!"
      );

      break;
  } 


?>


<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" data-abide>

  <input type=hidden name="oid" value="00Db0000000dRlq">
  <input hidden name="retURL" value="<?php echo $form_labels['return_URL']; ?>">

  <div class="row">

    <div class="small-12 large-6 columns">

      <div class="first-name-field">
        <label for="first_name"><?php echo $form_labels['first_name']; ?>*</label>
        <input  id="first_name" maxlength="40" name="first_name" type="text" required pattern="[a-zA-Z]+"/>
        <small class="error"><?php echo $form_labels['errors']['first_name_err']; ?></small>
      </div>

    </div>

    <div class="small-12 large-6 columns">

      <div class="last-name-field">
        <label for="last_name"><?php echo $form_labels['last_name']; ?>*</label>
        <input  id="last_name" maxlength="80" name="last_name" type="text" required pattern="[a-zA-Z]+" />
        <small class="error"><?php echo $form_labels['errors']['last_name_err']; ?></small>
      </div>

    </div>

  </div>

  <div class="email-field">
    <label for="email"><?php echo $form_labels['email']; ?>*</label>
    <input  id="email" maxlength="80" name="email" type="text" required pattern="email"/>
    <small class="error"><?php echo $form_labels['errors']['email_err']; ?></small>
  </div>

  <div class="organization">
    <label for="organization"><?php echo $form_labels['org']; ?></label>
    <input id="company" maxlength="40" name="company" size="20" type="text" />
  </div>

  <div class="position">
    <label for="00Nb0000009i2wk"><?php echo $form_labels['position']; ?></label>
    <input  id="00Nb0000009i2wk" maxlength="128" name="00Nb0000009i2wk" size="20" type="text" />
  </div>

  <div class="country-field">
    <label for="country_code"><?php echo $form_labels['country']; ?></label>
          <select  id="country_code" name="country_code" title="Country">
              <option value="" selected disabled></option>
              <option value="AF">Afghanistan</option>
              <option value="AX">Aland Islands</option>
              <option value="AL">Albania</option>
              <option value="DZ">Algeria</option>
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
              <option value="BV">Bouvet Island</option>
              <option value="BW">Botswana</option>
              <option value="BR">Brazil</option>
              <option value="IO">British Indian Ocean Territory</option>
              <option value="BN">Brunei</option>
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
              <option value="CD">Congo, the Democratic Republic of the</option>
              <option value="CG">Congo</option>
              <option value="CK">Cook Islands</option>
              <option value="CR">Costa Rica</option>
              <option value="CI">Cote d'Ivoire</option>
              <option value="HR">Croatia</option>
              <option value="CU">Cuba</option>
              <option value="CW">Curaçao</option>
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
              <option value="GT">Guatemala</option>
              <option value="GG">Guernsey</option>
              <option value="GN">Guinea</option>
              <option value="GW">Guinea-Bissau</option>
              <option value="GY">Guyana</option>
              <option value="HT">Haiti</option>
              <option value="HM">Heard Island and McDonald Islands</option>
              <option value="HN">Honduras</option>
              <option value="HU">Hungary</option>
              <option value="IS">Iceland</option>
              <option value="IN">India</option>
              <option value="ID">Indonesia</option>
              <option value="IR">Iran</option>
              <option value="IQ">Iraq</option>
              <option value="IE">Ireland</option>
              <option value="IL">Israel</option>
              <option value="IM">Isle of Man</option>
              <option value="IT">Italy</option>
              <option value="JM">Jamaica</option>
              <option value="JP">Japan</option>
              <option value="JE">Jersey</option>
              <option value="JO">Jordan</option>
              <option value="KZ">Kazakhstan</option>
              <option value="KE">Kenya</option>
              <option value="KI">Kiribati</option>
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
              <option value="MK">Macedonia, Republic of</option>
              <option value="MG">Madagascar</option>
              <option value="MW">Malawi</option>
              <option value="MY">Malaysia</option>
              <option value="MV">Maldives</option>
              <option value="ML">Mali</option>
              <option value="MT">Malta</option>
              <option value="MQ">Martinique</option>
              <option value="MR">Mauritania</option>
              <option value="MU">Mauritius</option>
              <option value="YT">Mayotte</option>
              <option value="MX">Mexico</option>
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
              <option value="NC">New Caledonia</option>
              <option value="NZ">New Zealand</option>
              <option value="NI">Nicaragua</option>
              <option value="NE">Niger</option>
              <option value="NG">Nigeria</option>
              <option value="NU">Niue</option>
              <option value="NF">Norfolk Island</option>
              <option value="NO">Norway</option>
              <option value="OM">Oman</option>
              <option value="PK">Pakistan</option>
              <option value="PS">Palestine</option>
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
              <option value="RU">Russia</option>
              <option value="RW">Rwanda</option>
              <option value="BL">Saint Barthélemy</option>
              <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
              <option value="KN">Saint Kitts and Nevis</option>
              <option value="LC">Saint Lucia</option>
              <option value="MF">Saint Martin (French part)</option>
              <option value="PM">Saint Pierre and Miquelon</option>
              <option value="VC">Saint Vincent and the Grenadines</option>
              <option value="WS">Samoa</option>
              <option value="SM">San Marino</option>
              <option value="ST">Sao Tome and Principe</option>
              <option value="SA">Saudi Arabia</option>
              <option value="SN">Senegal</option>
              <option value="RS">Serbia</option>
              <option value="SC">Seychelles</option>
              <option value="SL">Sierra Leone</option>
              <option value="SG">Singapore</option>
              <option value="SX">Sint Maarten (Dutch part)</option>
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
              <option value="TW">Taiwan</option>
              <option value="TJ">Tajikistan</option>
              <option value="TZ">Tanzania</option>
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
              <option value="UY">Uruguay</option>
              <option value="UZ">Uzbekistan</option>
              <option value="VU">Vanuatu</option>
              <option value="VA">Vatican City</option>
              <option value="VE">Venezuela</option>
              <option value="VN">Vietnam</option>
              <option value="VG">Virgin Islands, British</option>
              <option value="WF">Wallis and Futuna</option>
              <option value="EH">Western Sahara</option>
              <option value="YE">Yemen</option>
              <option value="ZM">Zambia</option>
              <option value="ZW">Zimbabwe</option>
          </select>
     </div>

  <select  hidden id="Campaign_ID" name="Campaign_ID">
    <option value="701b0000000MV8N">Climate Letter Support</option>
  </select>

  <input type="hidden" name=”member_status” value=”responded”>

  <select  hidden id="lead_source" name="lead_source">
    <option value="Climate Letter Support" selected>Climate Letter Support</option>
  </select>

  <input type="submit" name="submit" class="button small" value="<?php echo $form_labels['call_to_action']; ?>">

  <p><small><?php echo $form_labels['required_label']; ?></small></p>

</form>

<h3><?php echo $social_labels['share_title']; ?></h3>

<p><?php echo $social_labels['share_msg']; ?></p>

<div class="button-bar social-media-bar">
  <ul class="button-group radius">
    <li class="small button icon-button green">
      <a href="<?php echo $social_labels['share_fb']; ?>"><i class="fi-social-facebook"></i> <span>Facebook</span></a>
    </li>
    <li class="small button icon-button green">
      <a href="<?php echo $social_labels['share_twitter']; ?>"><i class="fi-social-twitter"></i> <span>Twitter</span></a>
    </li>
    <li class="small button icon-button green">
      <a href="<?php echo $social_labels['share_email']; ?>"><i class="fi-mail"></i> <span>Email</span></a>
    </li>
  </ul>
</div>