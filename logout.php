<?php
session_start();
unset($_SESSION["userEM"]);

header("Location:login.php");
?>