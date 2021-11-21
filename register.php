<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Registration</title>

<style type="text/css">
	
body {
   background-image: url("images/mainmenu/bgbg.jpg");
font-family: sans-serif;
}


.form {
    border-radius: 15px;
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
}
h1.login-title {
    color: #000;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    border-radius: 15px;
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: #fff;
    background: #515151;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    border-radius: 20px;
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;

}
.link a {
    color: #666;
     text-decoration: none;
}
h3 {
    font-weight: normal;
    text-align: center;
}



    </style>



</head>


<body>
<?php

require('config.php');

if(isset($_REQUEST['userEM'])){

	$userEM=stripslashes($_REQUEST['userEM']);
	$userEM = mysqli_real_escape_string($db,$userEM);

	$userPW=stripslashes($_REQUEST['userPW']);
	$userPW = mysqli_real_escape_string($db,$userPW);

	$userFN = stripslashes($_REQUEST['userFN']);
	$userFN = mysqli_real_escape_string($db,$userFN);


	$userCN = stripslashes($_REQUEST['userCN']);
	$userCN = mysqli_real_escape_string($db,$userCN);

	$query = "INSERT into `usertb` (userEM, userPW, userFN,userCN) VALUES ('$userEM', '$userPW', '$userFN','$userCN')";

	$result = mysqli_query($db,$query);

	
	if($result){
		echo "<div class='form'>
		      <h3>You are registered successfully.</h3><br/>
		      <p class='link'>Click here to <a href='login.php'>Login</a></p>
		      </div>";

		  } else {

		  	

		  	echo "<div class='form'>
		  	<h3>Required fields are missing.</h3><br/>
		  	<p class='link'>Click here to <a href='register.php'>register.</a></p>
		  	</div>";
		  }
		}else {

?>	

<form class="form" action="" method="post">
        <h1 class="login-title">Create Account</h1>
        <input type="text" class="login-input" name="userEM" placeholder="Email" required />
        <input type="password" class="login-input" name="userPW" placeholder="Password">
        <input type="text" class="login-input" name="userFN" placeholder="Full Name">
        <input type="text" class="login-input" name="userCN" placeholder="Contact No.">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Return to Login</a></p>
    </form>

<?php		
		}
?>
	

</body>
</html>
