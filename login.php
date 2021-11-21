<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['userEM'])) {
        $userEM = stripslashes($_REQUEST['userEM']);   
        $userEM = mysqli_real_escape_string($db, $userEM);
        $userPW = stripslashes($_REQUEST['userPW']);
        $userPW = mysqli_real_escape_string($db, $userPW);
        
        

        // Check user is exist in the database
        $query    = "SELECT * FROM `usertb` WHERE userEM='$userEM'
                     AND userPW='$userPW'";
        $result = mysqli_query($db, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
        	

            $_SESSION['userEM'] = $userEM;
            
            // Redirect to user dashboard page
            header("Location: homepage.php");

        } else {
            echo "<div class='form'>
                  <h3>Incorrect Email or Password!</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="userEM" placeholder="Email" autofocus="true"/>
        <input type="password" class="login-input" name="userPW" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="register.php">New User? Click Here to Register</a></p>
  </form>
<?php
    }
?>
</body>
</html>