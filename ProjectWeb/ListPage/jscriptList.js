var i1_1 = 0;
var i1_2 = 0;
var i1_3 = 0;
var i1_4 = 0;
function clickRight(row){
	var i = row.parentNode.parentNode.rowIndex;
	let a = "mackbookpro19.jpg";
	let b = "dellxps13.jpg";
	let c = "acerswitch3.jpg";
	let d = "surfacepro.jpg";
	let a1 = "mac1.jpg";
	let b1 = "dell1.jpg";
	let c1 = "acer1.jpg";
	let d1 = "surface1.jpg";
	if(i==0){
		i1_1 = i1_1 + 1;
		if(i1_1%2!=0){
			document.getElementById("good0").src = a1;
		}
		else{
			document.getElementById("good0").src = a;
		}
	}
	if(i==1){
		i1_2 = i1_2 + 1;
		if(i1_2%2!=0){
			document.getElementById("good1").src = b1;
		}
		else{
			document.getElementById("good1").src = b;
		}
	}
	if(i==2){
		i1_3 = i1_3 + 1;
		if(i1_3%2!=0){
			document.getElementById("good2").src = c1;
		}
		else{
			document.getElementById("good2").src = c;
		}
	}
	if(i==3){
		i1_4 = i1_4 + 1;
		if(i1_4%2!=0){
			document.getElementById("good3").src = d1;
		}
		else{
			document.getElementById("good3").src = d;
		}
	}
}
var i2_1 = 0;
var i2_2 = 0;
var i2_3 = 0;
var i2_4 = 0;
function clickLeft(row){
	var i = row.parentNode.parentNode.rowIndex;
	let a = "mackbookpro19.jpg";
	let b = "dellxps13.jpg";
	let c = "acerswitch.jpg";
	let d = "surfacepro.jpg";
	let a1 = "mac1.jpg";
	let b1 = "dell1.jpg";
	let c1 = "acer1.jpg";
	let d1 = "surface1.jpg";
	if(i==0){
		i2_1 = i2_1 + 1;
		if(i2_1%2==0){
			document.getElementById("good0").src = a;
		}
		else{
			document.getElementById("good0").src = a1;
		}
	}
	if(i==1){
		i2_2 = i2_2 + 1;
		if(i2_2%2!=0){
			document.getElementById("good1").src = b1;
		}
		else{
			document.getElementById("good1").src = b;
		}
	}
	if(i==2){
		i2_3 = i2_3 + 1;
		if(i2_3%2!=0){
			document.getElementById("good2").src = c1;
		}
		else{
			document.getElementById("good2").src = c;
		}
	}
	if(i==3){
		i2_4 = i2_4 + 1;
		if(i2_4%2!=0){
			document.getElementById("good3").src = d1;
		}
		else{
			document.getElementById("good3").src = d;
		}
	}
}
function showCart(){
	let a = document.getElementById("cart").style.display;
	console.log(a);
}/*
AOS.init({
 duration: 1200
});*/