<header>
	<ul>
		<li><a href="?action=home">Home</a></li>
		<li><a href="?action=agenda">Agenda</a></li>
		<?php
		if(isset($_SESSION['user']))
		{
			?>
			<li><a href="?action=logout">Logout</a></li>
			<li><a href="?action=account">Account</a></li>
			<?php
		}
		else{
			?>
			<li><a href="?action=register_form">Register</a></li>
			<li><a href="?action=login_form">Login</a></li>
			<?php
		}
		?>

	</ul>
</header>
