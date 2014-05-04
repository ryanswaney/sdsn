<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" data-abide>

     <input type=hidden name="oid" value="00Db0000000dRlq">
     <input type=hidden name="retURL" value="http://unsdsn.org/about-us/contact/subscription-successful/">

     <div class="row">

     <div class="small-12 large-6 columns">

     <div class="first-name-field">
          <!--[if lt IE 10]>
          <label for="first_name" class="reversed-text">First Name (Required)</label>
          <![endif]-->
          <input  id="first_name" maxlength="40" name="first_name" type="text" required pattern="[a-zA-Z]+" placeholder="First Name (Required)" />
          <small class="error">First name is required.</small>
     </div>

     </div>

     <div class="small-12 large-6 columns">

     <div class="last-name-field">
          <!--[if lt IE 10]>
          <label for="last_name" class="reversed-text">Last Name (Required)</label>
          <![endif]-->
          <input  id="last_name" maxlength="80" name="last_name" type="text" required pattern="[a-zA-Z]+" placeholder="Last Name (Required)" />
          <small class="error">Last name is required.</small>
     </div>

     </div>

     </div>

     <div class="email-field">
          <!--[if lt IE 10]>
          <label for="email" class="reversed-text">Email (Required)</label>
          <![endif]-->
          <input  id="email" maxlength="80" name="email" type="text" required pattern="email" placeholder="Email Address (Required)" />
          <small class="error">An email address is required.</small>
     </div>

     <div class="country-field">
          <select  id="country_code" name="country_code" title="Country">
               <option value="" selected disabled>Country</option>
               <option value="AF">AF</option>
               <option value="AX">AX</option>
               <option value="AL">AL</option>
               <option value="DZ">DZ</option>
               <option value="AD">AD</option>
               <option value="AO">AO</option>
               <option value="AI">AI</option>
               <option value="AQ">AQ</option>
               <option value="AG">AG</option>
               <option value="AR">AR</option>
               <option value="AM">AM</option>
               <option value="AW">AW</option>
               <option value="AU">AU</option>
               <option value="AT">AT</option>
               <option value="AZ">AZ</option>
               <option value="BS">BS</option>
               <option value="BH">BH</option>
               <option value="BD">BD</option>
               <option value="BB">BB</option>
               <option value="BY">BY</option>
               <option value="BE">BE</option>
               <option value="BZ">BZ</option>
               <option value="BJ">BJ</option>
               <option value="BM">BM</option>
               <option value="BT">BT</option>
               <option value="BO">BO</option>
               <option value="BQ">BQ</option>
               <option value="BA">BA</option>
               <option value="BW">BW</option>
               <option value="BV">BV</option>
               <option value="BR">BR</option>
               <option value="IO">IO</option>
               <option value="BN">BN</option>
               <option value="BG">BG</option>
               <option value="BF">BF</option>
               <option value="BI">BI</option>
               <option value="KH">KH</option>
               <option value="CM">CM</option>
               <option value="CA">CA</option>
               <option value="CV">CV</option>
               <option value="KY">KY</option>
               <option value="CF">CF</option>
               <option value="TD">TD</option>
               <option value="CL">CL</option>
               <option value="CN">CN</option>
               <option value="CX">CX</option>
               <option value="CC">CC</option>
               <option value="CO">CO</option>
               <option value="KM">KM</option>
               <option value="CG">CG</option>
               <option value="CD">CD</option>
               <option value="CK">CK</option>
               <option value="CR">CR</option>
               <option value="CI">CI</option>
               <option value="HR">HR</option>
               <option value="CU">CU</option>
               <option value="CW">CW</option>
               <option value="CY">CY</option>
               <option value="CZ">CZ</option>
               <option value="DK">DK</option>
               <option value="DJ">DJ</option>
               <option value="DM">DM</option>
               <option value="DO">DO</option>
               <option value="EC">EC</option>
               <option value="EG">EG</option>
               <option value="SV">SV</option>
               <option value="GQ">GQ</option>
               <option value="ER">ER</option>
               <option value="EE">EE</option>
               <option value="ET">ET</option>
               <option value="FK">FK</option>
               <option value="FO">FO</option>
               <option value="FJ">FJ</option>
               <option value="FI">FI</option>
               <option value="FR">FR</option>
               <option value="GF">GF</option>
               <option value="PF">PF</option>
               <option value="TF">TF</option>
               <option value="GA">GA</option>
               <option value="GM">GM</option>
               <option value="GE">GE</option>
               <option value="DE">DE</option>
               <option value="GH">GH</option>
               <option value="GI">GI</option>
               <option value="GR">GR</option>
               <option value="GL">GL</option>
               <option value="GD">GD</option>
               <option value="GP">GP</option>
               <option value="GT">GT</option>
               <option value="GG">GG</option>
               <option value="GN">GN</option>
               <option value="GW">GW</option>
               <option value="GY">GY</option>
               <option value="HT">HT</option>
               <option value="HM">HM</option>
               <option value="HN">HN</option>
               <option value="HU">HU</option>
               <option value="IS">IS</option>
               <option value="IN">IN</option>
               <option value="ID">ID</option>
               <option value="IR">IR</option>
               <option value="IQ">IQ</option>
               <option value="IE">IE</option>
               <option value="IM">IM</option>
               <option value="IL">IL</option>
               <option value="IT">IT</option>
               <option value="JM">JM</option>
               <option value="JP">JP</option>
               <option value="JE">JE</option>
               <option value="JO">JO</option>
               <option value="KZ">KZ</option>
               <option value="KE">KE</option>
               <option value="KI">KI</option>
               <option value="KR">KR</option>
               <option value="KW">KW</option>
               <option value="KG">KG</option>
               <option value="LA">LA</option>
               <option value="LV">LV</option>
               <option value="LB">LB</option>
               <option value="LS">LS</option>
               <option value="LR">LR</option>
               <option value="LY">LY</option>
               <option value="LI">LI</option>
               <option value="LT">LT</option>
               <option value="LU">LU</option>
               <option value="MO">MO</option>
               <option value="MK">MK</option>
               <option value="MG">MG</option>
               <option value="MW">MW</option>
               <option value="MY">MY</option>
               <option value="MV">MV</option>
               <option value="ML">ML</option>
               <option value="MT">MT</option>
               <option value="MQ">MQ</option>
               <option value="MR">MR</option>
               <option value="MU">MU</option>
               <option value="YT">YT</option>
               <option value="MX">MX</option>
               <option value="MD">MD</option>
               <option value="MC">MC</option>
               <option value="MN">MN</option>
               <option value="ME">ME</option>
               <option value="MS">MS</option>
               <option value="MA">MA</option>
               <option value="MZ">MZ</option>
               <option value="MM">MM</option>
               <option value="NA">NA</option>
               <option value="NR">NR</option>
               <option value="NP">NP</option>
               <option value="NL">NL</option>
               <option value="NC">NC</option>
               <option value="NZ">NZ</option>
               <option value="NI">NI</option>
               <option value="NE">NE</option>
               <option value="NG">NG</option>
               <option value="NU">NU</option>
               <option value="NF">NF</option>
               <option value="NO">NO</option>
               <option value="OM">OM</option>
               <option value="PK">PK</option>
               <option value="PS">PS</option>
               <option value="PA">PA</option>
               <option value="PG">PG</option>
               <option value="PY">PY</option>
               <option value="PE">PE</option>
               <option value="PH">PH</option>
               <option value="PN">PN</option>
               <option value="PL">PL</option>
               <option value="PT">PT</option>
               <option value="PR">PR</option>
               <option value="QA">QA</option>
               <option value="RE">RE</option>
               <option value="RO">RO</option>
               <option value="RU">RU</option>
               <option value="RW">RW</option>
               <option value="BL">BL</option>
               <option value="SH">SH</option>
               <option value="KN">KN</option>
               <option value="LC">LC</option>
               <option value="MF">MF</option>
               <option value="PM">PM</option>
               <option value="VC">VC</option>
               <option value="WS">WS</option>
               <option value="SM">SM</option>
               <option value="ST">ST</option>
               <option value="SA">SA</option>
               <option value="SN">SN</option>
               <option value="RS">RS</option>
               <option value="SC">SC</option>
               <option value="SL">SL</option>
               <option value="SG">SG</option>
               <option value="SX">SX</option>
               <option value="SK">SK</option>
               <option value="SI">SI</option>
               <option value="SB">SB</option>
               <option value="SO">SO</option>
               <option value="ZA">ZA</option>
               <option value="GS">GS</option>
               <option value="SS">SS</option>
               <option value="ES">ES</option>
               <option value="LK">LK</option>
               <option value="SD">SD</option>
               <option value="SR">SR</option>
               <option value="SJ">SJ</option>
               <option value="SZ">SZ</option>
               <option value="SE">SE</option>
               <option value="CH">CH</option>
               <option value="SY">SY</option>
               <option value="TW">TW</option>
               <option value="TJ">TJ</option>
               <option value="TZ">TZ</option>
               <option value="TH">TH</option>
               <option value="TL">TL</option>
               <option value="TG">TG</option>
               <option value="TK">TK</option>
               <option value="TO">TO</option>
               <option value="TT">TT</option>
               <option value="TN">TN</option>
               <option value="TR">TR</option>
               <option value="TM">TM</option>
               <option value="TC">TC</option>
               <option value="TV">TV</option>
               <option value="UG">UG</option>
               <option value="UA">UA</option>
               <option value="AE">AE</option>
               <option value="GB">GB</option>
               <option value="US">US</option>
               <option value="UY">UY</option>
               <option value="UZ">UZ</option>
               <option value="VU">VU</option>
               <option value="VA">VA</option>
               <option value="VE">VE</option>
               <option value="VN">VN</option>
               <option value="VG">VG</option>
               <option value="WF">WF</option>
               <option value="EH">EH</option>
               <option value="YE">YE</option>
               <option value="ZM">ZM</option>
               <option value="ZW">ZW</option>
          </select>
     </div>

     <input type="submit" name="submit" value="Subscribe" class="button green postfix margin-bottom-0">

</form>