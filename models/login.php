<?php
session_start();

if(isset($_SESSION['user'])!="")
{
	header("location: ?action=account");
}
if(isset($_POST['submit']))
{
	$username = $mysqli->real_escape_string($_POST['username']);
	$password = md5($mysqli->real_escape_string($_POST['password']));
	echo $password;
	$sql=("SELECT * FROM users WHERE username='$username' AND password='$password'");
	$result=$mysqli->query($sql);
	while ($login = $result->fetch_assoc()) {
		var_dump($login);
		if($login['password']==md5($password && $login['username']==$username))
		{
			$_SESSION['user'] = $login['id'];
			header("location: ?action=account");
		}
		else
		{
		?>
	    	<script>window.alert('wrong details');</script>
	    <?php
		}
	}
}
?>
