<?php
if(isset($_SESSION['user'])!="")
{
	header("Location: ?action=account");
}
if(isset($_POST['submit']))
{
	$username = $mysqli->real_escape_string($_POST['username']);
	$password = hash('sha512', $mysqli->real_escape_string($_POST['password']));
	$sql = ("SELECT * FROM users WHERE username='$username' AND password='$password'");
	print_r($sql);
	$result = $mysqli->query($sql);
	$count = mysqli_num_rows($result);
	while ($login = $result->fetch_assoc()) {
		var_dump($login);
		if($count==1)
		{
			$_SESSION['user'] = $login['id'];
			header("Location: ?action=account");
		}
		else
		{
			echo "Failed to Login";
		}
	}
}
?>
