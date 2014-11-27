<form method="post" action=<?= ROOT."/login/" ?> role="form" class="login-form col-md-4 col-md-offset-4">
	<fieldset>
		<legend><h2>Login</h2></legend>

	
		<div class='form-group'>
			<label for='email'> Email </label>
			<input type='email'name='loginName' id='email' class='form-control' required >
		</div>
		<div class='form-group'>
			<label for='password'> Password </label>
			<input type='password'name='loginPass' id='password' class='form-control' required >
		</div>
		<div class='form-group'>
			<input type='submit' name='loginSubmit' id='Login' class='btn btn-primary' value='Login'>
		</div>
	</fieldset>
</form>