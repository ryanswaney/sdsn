
<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" data-abide>

  <input type=hidden name="oid" value="00Db0000000dRlq">
  <input hidden name="retURL" value="http://unsdsn.org/what-we-do/education-initiatives/registration-sucessful/">

  <div class="first-name-field">
    <label for="first_name">First Name</label>
    <input  id="first_name" maxlength="40" name="first_name" type="text" required pattern="[a-zA-Z]+"/>
    <small class="error">First name is required.</small>
  </div>

  <div class="last-name-field">
    <label for="last_name">Last Name</label>
    <input  id="last_name" maxlength="80" name="last_name" type="text" required pattern="[a-zA-Z]+" />
    <small class="error">Last name is required.</small>
  </div>

  <div class="email-field">
    <label for="email">Email</label>
    <input  id="email" maxlength="80" name="email" type="text" required pattern="email"/>
    <small class="error">An email address is required.</small>
  </div>

  <select  hidden id="Campaign_ID" name="Campaign_ID">
    <option value="701b0000000MS7Y">SDSN.edu Interest Campaign</option>
  </select>

  <input type="hidden" name=”member_status” value=”responded”>

  <select  hidden id="lead_source" name="lead_source">
    <option value="ASD Mooc Interest" selected>ASD Mooc Interest</option>
  </select>

  <input type="submit" name="submit" class="button small" value="Pre-register">

</form>