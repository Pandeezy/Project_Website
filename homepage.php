<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Homepage</title>
    
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



</head>

<body>
	<header> 
		<a href="#" class="logo">GORP</a>

		<ul>
			<li><a href="#" class="active">Home</a></li>
			<li><a href="submit.php">Submit Items</a></li>
			<li><a href="view.php">View Items</a></li>
			<li><a href="#">View Items</a></li>
			<li><a href="logout.php" class="active">LOG OUT</a></li>



		</ul>
	</header>
 <section>
 	<img src="images/mainmenu/stars.png" id="stars">
 	<img src="images/mainmenu/moon.png" id="moon">
 	<img src="images/mainmenu/mountains_behind.png" id="mountain_behind">
 	<h2 id="text">Lost & Found</h2>
 	<img src="images/mainmenu/mountains_front.png" id="mountain_front">
 </section>
<div class="sec" id="sec">
<h2>Gorp's Lost & Found</h2>
<p>Gorp is an entirely new intelligent lost and found matching system & inventory management software all in one. We have taken a different approach than the traditional lost & founds by creating a multi-level platform for businesses and individuals to submit lost or found items into our matching system. Once the lost or found items are submitted and placed into our matching system, we intelligently help find and locate the misplaced goods and who has them.<br><br><br>Losing or misplacing your property can be frustrating and become such a hassle to find. At Gorp we answer that by providing an intelligent lost and found matching system, which automatically identifies, matches, and pairs recently lost or found items with one another. We’ve also partnered with local and regional businesses to submit found items into our matching system. This helps to maximize reach and gives users a higher rate of success when attempting to locate and find lost property. Did you lose or find something? Click below to submit a lost or found item.</p><br><br><br><br><br><br><br><br><br><br><br><br>


<p><img src="images/mainmenu/image02.png" alt="" width="200px" height="200px" align="left" /><b><br>Ease of Use</b><br>Submitting lost or found items is simple and hassle free.<br> Input the required information and let our system go to work.</p>
<br><br><br><br><br><br><br><br>

<p align="right"><img src="images/mainmenu/image03.png" alt="" width="200px" height="200px" align="right" /><b><br>Intelligent Matching</b><br>Our lost and found matching system intelligently<br> finds and locates items lost or found and who potentially has them.</p>
<br><br><br><br><br><br><br><br>


<p><img src="images/mainmenu/image04.png" alt="" width="200px" height="200px" align="left" /><b><br>Out Reach</b><br>Our lost and found With our multi-level platform,<br> your lost or found submission will automatically be<br> sent to local businesses and individuals.

</p>
<br><br><br><br><br><br><br><br><br>
<h2>Try It Out Now!</h2>



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

</html>