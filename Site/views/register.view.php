<form action="<?= ROOT."/controllers/registerController.php" ?>" method="post">
  <fieldset>
    <legend>Login</legend>

      <label for="regCompanyname">Companyname*</label>
        <input type="text" name="regCompanyname" required>

      <label for="regResidence">Residence*</label>
        <input type="text" name="regResidence" required>

      <label for="regFirstname">Firstname*</label>
        <input type="text" name="regFirstname" required>

      <label for="regLastname">Lastname*</label>
        <input type="text" name="regLastname" required>

      <label for="regInsertion">Insertion</label>
        <input type="text" name="regInsertion">

      <label for="regZipcode">Zipcode*</label>
        <input type="text" name="regZipcode" required>

      <label for="regTelephone">Telephone*</label>
        <input type="text" name="regTelephone" required>

      <label for="regEmail">Email*</label>
        <input type="email" name="regEmail" required>

      <label for="regPassword">Password*</label>
        <input type="password" name="regPassword" required>

      <label for="regStreet">Street*</label>
        <input type="text" name="regStreet" required>

      <label for="regHouse_number">Housenumber*</label>
        <input type="text" name="regHouse_number">
        
        <input type="submit" name="regSubmit" value="Register!">
  </fieldset>
</form>
