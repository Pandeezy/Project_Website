<?php

// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'userdb');

if($con == false){
  die("Connection Error! " .mysqli_connect_error());
}