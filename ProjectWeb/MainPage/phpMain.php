<html>
<head>
	<title>Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="cssMain.css">
	<script src="jscriptMain.js" defer></script>
</head>
<body style="overflow-x: hidden;">
	<div class="fixedBoard">
          <ul class="nav">
          	<li><a href="../CreatePage/login.php" class="login_btn" id="loginBtn">Log in / Sign up</a></li>
            <li><a href="phpMain.php?clicked=news" class="contact">News</a></li>
            <li><a href="#" class="about">About</a></li>
            <li><a href="Main Page.html" class="home">Home</a></li>
            <li><div class="logophoto"><img src="laptop-64.png"></div></li>
			<li><div class="logoword">Laptop.com</div></li>
			<li><div class="phone"><img src="phone.png">+7-747-111-25-04</li>
          </ul>
	</div>
	<!--    **********************************************************************       -->
	<section class="caption">
		<h2 class="caption">Find You Dream Laptop</h2>
		<h3 class="properties">Macbook - Acer - Dell</h3>
		<a class="start_btn" href="../ListPage/phpList.php">Start buy</a>
	</section>
	<div class="box">
		<img id="mainImage" width="1390px" height="900px" src="image1.jpg">
		<button class="leftGallery" onclick="MainGallery('-1')"><img src="left.png"></button>
		<button class="rightGallery" onclick="MainGallery('1')"><img src="right.png"></button>
	</div>
	<div class="boxWords"></div>
	<div class="largeBack"></div>
	<div class="news">
		<?php
		if(isset($_GET['clicked'])){
			$type = $_GET['clicked'];
			if($type=="news"){
				$url = "products.json";
				$data = file_get_contents($url);
				$characters = json_decode($data);
				foreach ($characters as $chr) {
					echo "<div class='price'>".$chr->price."</div>";
					echo "<div class='title'>".$chr->title."</div></br>";
				}
			}
		}
		?>
	</div>
	<!--    **********************************************************************       -->
	<div class="container">
		<div class="mtb">
			<div class="col1 offset2 centered">
			<h1>Useful Information When You Need It</h1>
			<h4 class="mtb">Don’t obtain laptops within a impulse purchase. All these are purchases that are entailed which you should consider. Know that which you wish to make utilize of it to get. Know just how much time you would like to buy to continue. Even know you anticipate you’ll traveling with this. Each one these matters ought to be contemplated at the purchase.</h4>
				<img src="acer1.jpg" class="img-responsive aligncenter">
			</div>
	
		</div>
	</div>
	<!--    **********************************************************************       -->
	<div class="LaptopAdvantages"><p>Let's see advantages of our laptops</p></div>
	<div class="container">
		<div class="mtb2">
			<div class="col2 offset1">
				<h2>Good Battery</h2>
				<h4 class="mtb">A battery is a hardware component that supplies power to a device, enabling that device to work without a power cord. Batteries are often capable of powering a laptop computer for several hours depending on how much power it requires.</h4>
			</div>
			<div class="col2">
				<img class="pict1 show-on-scroll slideRight" src="full-battery-512.png" alt="" width="280">
			</div>
		</div>
		<div class="mtb2">
			<div class="col2 offset1">
				<h2>World Class Design</h2>
				<h4 class="mtb">Design elements, form factor and construction can also vary significantly between models depending on intended use. Examples of specialized models of laptops include rugged notebooks for use in construction or military applications.</h4>
			</div>
			<div class="col2">
				<img class="pict1 show-on-scroll slideRight" src="Laptop-PNG-Image.png" width="300">
			</div>
		</div>
		<div class="mtb2">
			<div class="col2 offset1">
				<h2>Supports a lot OSs</h2>
				<h4 class="mtb">Laptops, tablets, and desktop computers all run operating systems that you've probably heard of. Some examples include versions of Microsoft Windows (like Windows 10, Windows 8, Windows 7, Windows Vista, and Windows XP), Apple's macOS (formerly OS X), Chrome OS, BlackBerry Tablet OS, and flavors of the open source operating system Linux.</h4>
			</div>
			<div class="col2">
				<img class="pict1 show-on-scroll slideRight" src="Laptop-PNG-Picture.png" width="300">
			</div>
		</div>
	</div>
	<!--    **********************************************************************       -->
	<div class="TypeOfLaptops"><p>We have 3 main types of laptops</p></div>
	<div class="container mt">
		<div class="mtb1">
			<div class="col2 offset1">
				<img src="ultrabook.png" class="pict2 show-on-scroll slideRight">
			</div>
			
			<div class="col2 offset1">
				<h1 class="centered">Ultrabook</h1>
				<p>Ultrabook is an Intel specification and trademark for a line of high-end subnotebook computers featuring reduced bulk without compromising battery life.</p>
				<p>Ultrabooks use low-power Intel Core processors, solid-state drives, and a unibody chassis to help meet these criteria.</p>
				<p>Due to their limited size, Ultrabooks typically omit traditional laptop features such as optical disc drives and Ethernet ports. The name "Ultrabook" represents a portmanteau of the words "ultraportable" and "notebook".</p>
			</div>
		</div>
		
		<div class="mtb2">
			<div class="col2 offset1">
				<img src="netbook.png" class="pict2_1 show-on-scroll slideLeft"> 
			</div>
			<div class="col2 offset1 toLeft">
				<h1 class="centered">Netbook</h1>
				<p>The term "netbook" is a perfect description of the product: a small laptop PC intended mostly for using internet-based tools and services -- surfing the web, running lightweight apps, saving files to the cloud, and so on.</p>
				<p>Built with less costly components and fewer optional features, netbooks were designed to be affordable systems for casual personal or family use, limited-duration business work, or as an easily portable travel companion.</p>
				<p>Today, the difference between netbooks and regular laptops is less their size than their price, with highly usable netbooks available for $200 or less.</p>
			</div>
		</div>

		<div class="mtb1">
			<div class="col2 offset1">
				<img src="gamebook.png" class="pict2 show-on-scroll slideRight">
			</div>
			
			<div class="col2 offset1">
				<h1 class="centered">Gaming Laptops</h1>
				<p>There's more to a gaming laptop than raw speed. You can pack it with the best graphics processor (GPU), gazillion-core processor,  tons of fast SSD for storing games, a rock-solid hard drive and the fastest, most colorful display around -- and it can still fall short.</p>
				<p>Those powerful components may overheat at inopportune moments or you may simply experience some instability. Maybe you don't want to always use an external keyboard, but the built-in version feels like there are mashed potatoes under your WASD keys.</p>
				<p>But you don't have to spend thousands to get all the power you need -- not all games are bottlenecked by dual cores or a last-generation GTX.</p>
			</div>
		</div>
	</div>
	<!--    **********************************************************************       -->
	<footer>
            <div class="container">
            	<img class="centerSmile" src="smiling.png">
                <div class="col12">
                    <p class="bot">&copy; Designed by Darkhan</p>
                    <div class="space20"></div>
                </div>
                <div class="col13">
                	<p class="left">Do you know about our social media?</p>
                	<p class="left_Desc">We are small company which wants to sell and buy goods efficiently!</p>
                	<img class="leftImage" src="amazon-logo.png">
                	<img class="leftImage" src="apple-logo.png">
                	<img class="leftImage" src="facebook-logo.png">
                </div>
                <div class="col14">
                	<p class="right">About our company</p>
                	<p class="right_Desc des1">About laptops</p>
                	<p class="right_Desc des2">Care of laptops</p>
                	<p class="right_Desc des3">Carier in the Laptop.com</p>
                	<p class="right_Desc des4">Contact</p>
                	<p class="right_Desc des5">Our shops</p>
                </div>
            </div>
       </footer>
</body>
</html>