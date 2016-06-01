<?php
if(isset($_SESSION['user'])!="")
{
	header("location: ?action=account");
}
if(isset($_POST['submit']))
{
	$username = $mysqli->real_escape_string($_POST['username']);
	$password = md5($mysqli->real_escape_string($_POST['password']));
	$sql = ("SELECT * FROM users WHERE username='$username' AND password='$password'");
	print_r($sql);
	$result = $mysqli->query($sql);
	$count = mysqli_num_rows($result);
	while ($login = $result->fetch_assoc()) {
		var_dump($login);
		if($count==1)
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
