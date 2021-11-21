
<?php
session_start();

require('config.php');
require('config2.php');




$useremail = $_SESSION['userEM'];


         $find = "SELECT `userFN`, `userCN` FROM `usertb` WHERE userEM='$useremail'";
         $result2 = mysqli_query($db,$find) or die(mysql_error());

         while($rows2 = mysqli_fetch_array($result2)){
            $ufn = $rows2['userFN'];
            $ucn = $rows2['userCN'];
            $userfullname = $ufn;
$usercontact = $ucn;
         }



if(isset($_POST['submit'])){
    $n=$_POST['name'];
    $c=$_POST['category'];
    $b=$_POST['brand'];
    $cl=$_POST['colour'];
    $l=$_POST['location'];
    $f=$_POST['floor'];
    $d=$_POST['description'];
    $lf=$_POST['lofo'];

 
    //code for image uploading
    if($_FILES['image']['name']){
        move_uploaded_file($_FILES['image']['tmp_name'], "images/dbimg/".$_FILES['image']['name']);
        $img="images/dbimg/".$_FILES['image']['name'];
    }
 
    $i="insert into itemtb(itemName,itemCat,itemBnd,itemCl,itemLoc,itemFloor,itemDesc,itemLF,itemIMG,user_contact,user_email,user_name)values('$n','$c','$b','$cl','$l','$f','$d','$lf','$img','$usercontact','$useremail','$userfullname')";
        if(mysqli_query($con, $i)){
        echo "inserted successfully..!";
    }
}












?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Homepage</title>










<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">











<style>

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    scroll-behavior: smooth;
}

body{
    min-height: 100vh;
    background: linear-gradient(#2b1055,#7597de);
    overflow-x: hidden;
}

header{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
z-index: 10000;

}

header .logo{
    color:  #fff;
    font-weight: 700;
    text-decoration: none;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing:2px ;
}

header ul{
    display: flex;
    justify-content: center;
    align-items: center;

} 

header ul li{
    list-style: none;
    margin-left: 20px;
}

header ul li a{
    text-decoration:none;
    padding: 6px 15px;
    color:  #fff;
   border-radius: 20px;
}

header ul li a:hover,
header ul li a.active
{
    background:  #fff;
    color: #2b1055;
text-decoration: none;

}



.form-holder {
      margin: auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}


section{
    position:  relative;
    width: 100%;
    height: 100vh;
    padding: 100px;
display: flex;
justify-content: center;
align-items: center;
overflow: hidden;
}

section::before{
    content: '';
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, #1c0522, transparent);
    z-index: 1000;

}

section img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;

}

section img#moon{
    mix-blend-mode:screen ;
}

section img#mountain_front{
    z-index: 10;

}


#text{
    position: absolute;
    color: #fff;
    right:-265px ;
    white-space: nowrap;
    font-size: 7.5vw;
    z-index: 9;

}

.sec{
    position: relative;
    background: #1c0522;
    padding: 100px;

}

.sec h2{
    font-size: 3.5em;
    margin-bottom: 10px;
    color:  #fff;

}

.sec p{
    font-size: 1.2em;
    color: #fff;

}






</style>









<body>
    <header> 
        <a href="#" class="logo">GORP</a>

        <ul>
            <li><a href="homepage.php" >Home</a></li>
            <li><a href="#" class="active">Submit Items</a></li>
            <li><a href="view.php">View Items</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="logout.php" class="active">LOG OUT</a></li>



        </ul>
    </header>


<section>
    <img src="images/mainmenu/stars.png" id="stars">
    <img src="images/mainmenu/moon.png" id="moon">
    <img src="images/mainmenu/mountains_behind.png" id="mountain_behind">
    <h2 id="text">Submit Items</h2>
    <img src="images/mainmenu/mountains_front.png" id="mountain_front">
 </section>

<div class="sec" id="sec">





<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Submit An Item</h3>
                        <p>Fill in the data below.</p>
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Item Name" required>
                              
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="category" placeholder="Item Category" required>
                                 
                            </div>



                               <div class="col-md-12">
                              <input class="form-control" type="text" name="brand" placeholder="Item Brand" required>
                              
                           </div>



                           <div class="col-md-12">
                              <input class="form-control" type="text" name="colour" placeholder="Item Colour" required>
                              
                           </div>



                           <div class="col-md-12">
                              <input class="form-control" type="text" name="location" placeholder="Item Location" required>
                               
                           </div>









                           <div class="col-md-12">
                                <select name="floor" class="form-select mt-3" required>
                                      <option selected disabled value="">Floor</option>
                                      <option value="Level 1">Level 1 </option>
                                      <option value="Level 2">Level 2</option>
                                      <option value="Level 3">Level 3</option>
                                      <option value="Level 4">Level 4</option>
                                      <option value="Level 5">Level 5</option>
                                      <option value="Level 6">Level 6</option>
                                      <option value="Rooftop">Rooftop</option>
                                      <option value="Basement">Basement</option>
                               </select>
                                
                           </div>
                           <br>

<div class="form-group">
    
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Item Description" rows="3"></textarea>
                        
                          </div>

                           
                        


                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="lofo">Lost/Found: </label>

                            <input type="radio" class="btn-check" value="Lost" name="lofo" id="lost" autocomplete="off" required>
                            <label class="btn btn-sm" for="male">Lost</label>

                            <input type="radio" class="btn-check" value="Found" name="lofo" id="found" autocomplete="off" required>
                            <label class="btn btn-sm" for="female">Found</label>

                            
                            </div>

                         <div class="form-group">
    <label for="input1">Image: </label>
    <input type="file"  class="form-control-file" name="image" id="image">
</div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
















<script>
    let stars = document.getElementById('stars');
    let moon = document.getElementById('moon');
    let mountain_behind = document.getElementById('mountain_behind');
    let mountain_front = document.getElementById('mountain_front');
    let text = document.getElementById('text');
    let header = document.querySelector('header');

    window.addEventListener('scroll', function(){
        let value = window.scrollY;
        stars.style.left = value * 0.25 +'px';
        moon.style.top = value * 1.05 +'px';
        mountain_behind.style.top = value * 0.5 +'px';
        mountain_front.style.top = value * 0 +'px';
        text.style.marginRight =  value* 4 +'px';
        text.style.marginTop = value * 1.5 +'px';
        header.style.top = value * 0.5 + 'px';


    })
</script>


</body>
</head>