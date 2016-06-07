<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?action=home">Calendar</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden"><a href="?action=home">Home</a></li>
					<?php
					if(isset($_SESSION['user']))
					{
					?>
					<li class="page-scroll"><a href="?action=agenda">Agenda</a></li>
					<li class="page-scroll"><a href="?action=logout">Logout</a></li>
					<li class="page-scroll"><a href="?action=account">Account</a></li>
					<?php
					}
					else{
					?>
						<li class="page-scroll"><a href="?action=register_form">Register</a></li>
						<li class="page-scroll"><a href="?action=login_form">Login</a></li>
					<?php
					}
					?>
      </ul>
    </div>
  </div>
</nav>
