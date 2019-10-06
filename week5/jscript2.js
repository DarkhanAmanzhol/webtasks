function LeftClick() {
	let a = document.getElementById("i1").src;
	let b = document.getElementById("i2").src;
	let c = document.getElementById("i3").src;
	let d = document.getElementById("i4").src;
	let ekran = document.getElementById("i0").src;
	let title_html = "Lamborghini Aventador SVJ";
	let def_html = "The new Lamborghini Aventador SVJ adopts the Italian automaker's famous 'Jota' moniker, which adds another layer of hardcore-ness to the already racy SV trim by calling on the spirit of the powerful Miura P400 Jota from the '70s, which was designed to meet the FIA's 'J' class rulebook. This new Raging Bull comes to life via a 6.5-liter, 48-valve V-12 that carries 4.42 pounds with each of its 759 horses. As a result, the SVJ can deliver a zero to 60 time of 2.8 and reach a maximum speed of 217 miles per hour.";
	switch(ekran) {
  		case a:
  			document.getElementById("i0").src = d;
    		document.getElementById("title").innerHTML = "Rimac new electric hypercar";
  			document.getElementById("def").innerHTML = "Lets dispense with the hyperbole: Croatias Rimac Automobili built a very, very fast car that they’d like to show you. It is an all-electric hypercar called the Concept Two that debuted today at the Geneva Motor Show. It claims to have a 1,914-horsepower engine that enables a 0 to 60 mph acceleration in 1.85 seconds. That would make it one of the quickest cars in existence, quicker than the next-generation Tesla Roadster with its comparatively sluggish 0–60 in 1.9 seconds.";
    		break;
  		case b:
  			document.getElementById("i0").src = a;
    		document.getElementById("title").innerHTML = title_html;
  			document.getElementById("def").innerHTML = def_html;
    		break;
  		case c:
  			document.getElementById("i0").src = b;
    		document.getElementById("title").innerHTML = "Tesla Roadster";
  			document.getElementById("def").innerHTML = "Tesla boss Elon Musk has made one of his patented bold claims about the incoming Roadster, promising his electric sports car will be able to clip 60mph (96.5km/h) in just 2.1 seconds. That's very, very fast. For reference, the Porsche 918 Spyder claims a 2.2 second sprint, while the Ferrari LaFerrari has been clocked at 2.4 seconds. It means the Tesla Roadster will have them both beat. And what's more, Musk is promising that the eyebrow-peeling speed will be on offer from even the base-model cars.The claim, made on Twitter, actually attracted some criticism, with other users quick to point out that Musk had previously promised it would be even faster.";
    		break;
  		case d:
  			document.getElementById("i0").src = c;
    		document.getElementById("title").innerHTML = "Dodge Challenger SRT Hellcat Redeye";
  			document,getElementById("def").innerHTML = "The Challenger SRT Hellcat Redeye was recently introduced as the ultimate incarnation of Dodge's famous Challenger Hellcat, but now it's powered by the same maniacal Hemi engine that summons to life the sinister Dodge Demon. Under the throwback dual-snorkel hood lies a 6.4-liter supercharged V-8 that cranks out 797 horsepower and 707 pound-feet of torque and rockets this 4,500-pound Detroit brawler from zero to 60 in just 3.4 seconds. ";
    		break;
	}
}
function RightClick() {
	let a = document.getElementById("i1").src;
	let b = document.getElementById("i2").src;
	let c = document.getElementById("i3").src;
	let d = document.getElementById("i4").src;
	let ekran = document.getElementById("i0").src;
	let title_html = "Lamborghini Aventador SVJ";
	let def_html = "The new Lamborghini Aventador SVJ adopts the Italian automaker's famous 'Jota' moniker, which adds another layer of hardcore-ness to the already racy SV trim by calling on the spirit of the powerful Miura P400 Jota from the '70s, which was designed to meet the FIA's 'J' class rulebook. This new Raging Bull comes to life via a 6.5-liter, 48-valve V-12 that carries 4.42 pounds with each of its 759 horses. As a result, the SVJ can deliver a zero to 60 time of 2.8 and reach a maximum speed of 217 miles per hour.";
	switch(ekran) {
  		case a:
  			document.getElementById("i0").src = b;
  			document.getElementById("title").innerHTML = "Tesla Roadster";
  			document.getElementById("def").innerHTML = "Tesla boss Elon Musk has made one of his patented bold claims about the incoming Roadster, promising his electric sports car will be able to clip 60mph (96.5km/h) in just 2.1 seconds. That's very, very fast. For reference, the Porsche 918 Spyder claims a 2.2 second sprint, while the Ferrari LaFerrari has been clocked at 2.4 seconds. It means the Tesla Roadster will have them both beat. And what's more, Musk is promising that the eyebrow-peeling speed will be on offer from even the base-model cars.The claim, made on Twitter, actually attracted some criticism, with other users quick to point out that Musk had previously promised it would be even faster.";
    		break;
  		case b:
  			document.getElementById("i0").src = c;
  			document.getElementById("title").innerHTML = "Dodge Challenger SRT Hellcat Redeye";
  			document,getElementById("def").innerHTML = "The Challenger SRT Hellcat Redeye was recently introduced as the ultimate incarnation of Dodge's famous Challenger Hellcat, but now it's powered by the same maniacal Hemi engine that summons to life the sinister Dodge Demon. Under the throwback dual-snorkel hood lies a 6.4-liter supercharged V-8 that cranks out 797 horsepower and 707 pound-feet of torque and rockets this 4,500-pound Detroit brawler from zero to 60 in just 3.4 seconds. ";
    		break;
  		case c:
  			document.getElementById("i0").src = d;
  			document.getElementById("title").innerHTML = "Rimac new electric hypercar";
  			document.getElementById("def").innerHTML = "Lets dispense with the hyperbole: Croatias Rimac Automobili built a very, very fast car that they’d like to show you. It is an all-electric hypercar called the Concept Two that debuted today at the Geneva Motor Show. It claims to have a 1,914-horsepower engine that enables a 0 to 60 mph acceleration in 1.85 seconds. That would make it one of the quickest cars in existence, quicker than the next-generation Tesla Roadster with its comparatively sluggish 0–60 in 1.9 seconds.";
    		break;
  		case d:
  			document.getElementById("i0").src = a;
  			document.getElementById("title").innerHTML = title_html;
  			document.getElementById("def").innerHTML = def_html;
    		break;
	}
}
function Showmore(){
	let a = document.getElementById("i1").src;
	let b = document.getElementById("i2").src;
	let c = document.getElementById("i3").src;
	let d = document.getElementById("i4").src;
	let ekrans = document.getElementById("i0").src;
	switch(ekrans){
	case a:
		window.open("https://www.lamborghini.com/ru-en/%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D0%B8/aventador/aventador-svj");
		break;
	case b:
		window.open("https://www.tesla.com/roadster");
		break;
	case c:
		window.open("http://hennesseyperformance.com/vehicles/dodge/2019-dodge-challenger-srt-hellcat-redeye/");
		break;
	case d:
		window.open("https://www.theverge.com/2018/3/6/17086808/rimac-concept-two-electric-hypercar-geneva-motor-show-2018");
		break;
	}
}
