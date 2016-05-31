<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: account.php");
}
?>
<form method="post" action="?action=register">
	<legend>Register:</legend>
	<legend>Username*:</legend>
	<input type="text" name="username" placeholder="Your Username..." required autofocus>
	<legend>Password*:</legend>
	<input type="password" name="password" placeholder="Your Password..." required>
	<legend>Firstname*:</legend>
	<input type="text" name="firstname" placeholder="Your Firstname..." required>
	<legend>Lastname*:</legend>
	<input type="text" name="lastname" placeholder="Your Lastname..." required>
	<legend>Email*:</legend>
	<input type="email" name="email" placeholder="Your Email..." required>
	<input type="submit" name="submit" value="Register">
</form>