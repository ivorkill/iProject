<?php
session_start();

if(isset($_SESSION['user'])!="")
{
	header("Location: ?action=account");
}
?>
<form method="post" action="?action=login">
	<legend>Login</legend>
	<legend>Username:</legend>
	<input type="text" name="username" placeholder="Your Username..." required autofocus>
	<legend>Password:</legend>
	<input type="password" name="password" placeholder="Your Password..." required>
	<input type="submit" name="submit" value="Login">
</form>
