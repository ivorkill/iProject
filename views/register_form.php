<form method="post" action="?action=register">
	<div class="form-group col-xs-12 floating-label-form-group controls">
		<br><br>
		<legend><h2>Register:</h2></legend>
		<label>Username*:</label>
		<input type="text" class="form-control" name="username" placeholder="Your Username..." id="username" required autofocus data-validation-required-message="Please enter your username.">
		<label>Password*:</label>
		<input type="password" class="form-control" name="password" placeholder="Your Password..." id="password" required data-validation-required-message="Please enter your password.">
		<label>Firstname*:</label>
		<input type="text" class="form-control" name="firstname" placeholder="Your Firstname..." id="firstname" required data-validation-required-message="Please enter your firsname.">
		<label>Lastname*:</label>
		<input type="text" class="form-control" name="lastname" placeholder="Your Lastname..." id="lastname" required data-validation-required-message="Please enter your lastname.">
		<label>Email*:</label>
		<input type="email" class="form-control" name="email" placeholder="Your Email..." id="email" required data-validation-required-message="Please enter your email.">
		<input type="submit" name="submit" value="Register">
	</div>
</form>
