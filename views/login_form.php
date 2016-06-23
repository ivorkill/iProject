<form method="post" action="?action=login">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<br><br>
		<legend><h2>Login</h2></legend>
		<label>Username:</label>
		<input type="text" class="form-control" name="username" placeholder="Your Username..." id="username" required autofocus data-validation-required-message="Please enter your username.">
		<p class="help-block text-danger"></p>
		<label>Password:</label>
		<input type="password" class="form-control" name="password" placeholder="Your Password..." id="password" required data-validation-required-message="Please enter your password.">
		<div id="success"></div>
		<div class="row">
				<div class="form-group col-xs-12">
						<br><input type="submit"  name="submit" value="Login"></input>
				</div>
		</div>
	</div>
</form>
