<form class="regForm" action="<?= ROOT."/controllers/registerController.php" ?>" method="post">
  <legend>Login</legend>

    <div class="regFormInput">
      <label for="regCompanyname">Companyname</label>
        <input type="text" name="regCompanyname">
    </div>

    <div class="regFormInput">
      <label for="regResidence">Residence*</label>
        <input type="text" name="regResidence" required>
    </div>

    <div class="regFormInput">
      <label for="regFirstname">Firstname*</label>
        <input type="text" name="regFirstname" required>
    </div>

    <div class="regFormInput">
      <label for="regLastname">Lastname*</label>
        <input type="text" name="regLastname" required>
    </div>

    <div class="regFormInput">
      <label for="regInsertion">Insertion</label>
        <input type="text" name="regInsertion">
    </div>

    <div class="regFormInput">
      <label for="regZipcode">Zipcode*</label>
        <input type="text" name="regZipcode" required>
    </div>

    <div class="regFormInput">
      <label for="regTelephone">Telephone*</label>
        <input type="text" name="regTelephone" required>
    </div>

    <div class="regFormInput">
      <label for="regEmail">Email*</label>
        <input type="email" name="regEmail" required>
    </div> 

    <div class="regFormInput">
      <label for="regPassword">Password*</label>
        <input type="password" name="regPassword" required>
    </div>

    <div class="regFormInput">
      <label for="regStreet">Street*</label>
        <input type="text" name="regStreet" required>
    </div>

    <div class="regFormInput">
      <label for="regHouse_number">Housenumber*</label>
        <input type="text" name="regHouse_number">
    </div>

    <input class="regSubmit" type="submit" name="regSubmit" value="Register!">
</form>
