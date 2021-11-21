<?php

session_start();


if(isset($_SESSION["userEM"])){
	header("location: homepage.php");
	exit;
}

?>