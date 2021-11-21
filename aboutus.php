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

.sec h3{
	font-size: 2.5em;
	margin-bottom: 10px;
	color: #fff;
}

.sec p{
	font-size: 1.2em;
	color: #fff;

}

.whitetxt{
	color: #fff;
}

</style>



</head>

<body>
	<header> 
		<a href="#" class="logo">GORP</a>

		<ul>
			<li><a href="homepage.php">Home</a></li>
			<li><a href="submit.php">Submit Items</a></li>
			<li><a href="view.php">View Items</a></li>
			<li><a href="#" class="active">About Us</a></li>
			<li><a href="logout.php" class="active">LOG OUT</a></li>



		</ul>
	</header>
 <section>
 	<img src="images/mainmenu/stars.png" id="stars">
 	<img src="images/mainmenu/moon.png" id="moon">
 	<img src="images/mainmenu/mountains_behind.png" id="mountain_behind">
 	<h2 id="text">About Us</h2>
 	<img src="images/mainmenu/mountains_front.png" id="mountain_front">
 </section>
<div class="sec" id="sec">
<center><h2>What is Gorp About?</h2></center><br><br>
<h3>The simplified Lost & Found Website</h3><br>
<p>At Gorp Inc., we are solving an age-old problem – easily inputting and keeping track of lost and found items – using smart matching technology. Our proprietary lost and found matching software is completely devoted to connecting businesses and individuals who have found items, to individuals who have lost or misplaced them

 

Want to know what makes our system so convenient? Here’s what you need to know…</p>

<br><br>
<p>All to often we can find ourselves losing/misplacing items with no way of finding them or, stumbling on lost items with the owner out of site and not a place to return the lost property. At Lostings Inc., we have built an intelligent lost and found matching system for individual users to solve this and a number of additional issues.<br>

Our intelligent lost and found matching system automatically processes each lost or found submission. We match and identify items by a number of different criteria for better accuracy in identifying the lost or found property. Once potential matches are generated, we automatically notify you and the person or business owner/managers who have found your lost or misplaced property.
<br>
Submitting lost or found items has never been easier, simply enter the details of the lost or found property and let our smart matching system get to work for you.</p>

<br><br><br><br<br>
<h3>User Features</h3>
<p><ul>
			<li class="whitetxt">Easily Submit lost and found items into our intelligent matching system</li>
			<li class="whitetxt">Hassle free account signup process, auto-generate profile and start submitting items</li>
			<li class="whitetxt">Intelligent matching system which identifies and matches lost or found items</li>
			<li class="whitetxt">All submissions processed through our lost and found matching system</li>
			<li class="whitetxt">Receive notification alerts of property that pair’s with your submission</li>
			<li class="whitetxt">Contact the user who’s item potentially matches yours</li>
			<li class="whitetxt">Feature lost items to display on all of our websites and social media platforms</li>
			<li class="whitetxt">Ability to edit your lost or found submission, add photos, print fliers, manage submissions, email potential matches, etc</li>
			<li class="whitetxt">Search Lostings database to gain access to previously submitted lost or found items</li>
			<li class="whitetxt">The Website and Mobile Website are all one dynamic platform that is streamlined to seamlessly work together</li>



		</ul>
	<br>

</p>
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