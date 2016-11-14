<?php
  sesson_start();
  unset($_SESSION["username"]);
  session_destroy();

?>
