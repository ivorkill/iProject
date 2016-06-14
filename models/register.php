<?php
if(isset($_SESSION['user'])!="")
{
	header("Location: ?action=account");
}

if(isset($_POST['submit']))
{
	$username =$mysqli->real_escape_string($_POST['username']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$password = hash('sha512', $mysqli->real_escape_string($_POST['password']));
	$firstname = $mysqli->real_escape_string($_POST['firstname']);
	$lastname = $mysqli->real_escape_string($_POST['lastname']);


	if($mysqli->query("INSERT INTO users(username,password,first_name,last_name,email) VALUES('$username','$password','$firstname','$lastname','$email')"))
	{
?>
    <script>alert('successfully registered');</script>
    <?php
    header("Location: ?action=home");
	}
	else
	{
	?>
    <script>alert('error while registering you...');</script>
    <?php
	}
}
?>
