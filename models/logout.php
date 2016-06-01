<?php
if(isset($_SESSION['user'])!="")
{
  session_destroy();
  unset($_SESSION['user']);
  header("Location: ?action=home");
}
?>
