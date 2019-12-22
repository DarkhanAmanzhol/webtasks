var array = [];
function adder(product){
	console.log(product);
	array.push(product);
	console.log(array); 
}
function showCart(){
	document.getElementById("cartingInvisible").style.display = 'block';
	document.getElementById("allGoods").innerHTML = array;
	console.log(array); 
	document.body.style.backgroundColor = "rgba(10, 10, 10, 0.4)";
}
function okBack(){
	document.getElementById("cartingInvisible").style.display = 'none';
}
