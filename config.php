<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'userdb');

if($db == false){
  die("Connection Error! " .mysqli_connect_error());
}
