var tabButtons = document.querySelectorAll("#tabContainer #buttonContainer button");
var tabPanels = document.querySelectorAll("#tabContainer #tabPanel");
var objects = [];
var i = 0;

function showPanel(panelIndex,colorCode) {
	tabButtons.forEach(function(node){
		node.style.backgroundColor="";
		node.style.color="";
	});
	tabButtons[panelIndex].style.backgroundColor='gray';
	tabButtons[panelIndex].style.color="blueviolet";
	tabPanels.forEach(function(node){
		node.style.display="none";
	});
	tabPanels[panelIndex].style.display="block";
	//tabPanels[panelIndex].style.backgroundColor=colorCode;
}
showPanel(0,'white');

function createFrame(){
	let back1 = document.getElementById("backgro1").value;
	let bord1 = document.getElementById("bordrad1").value;
	let width1 = document.getElementById("width1").value;
	let height1 = document.getElementById("height1").value;

	document.querySelector("#BigFrame").style.backgroundColor = back1;
	document.querySelector("#BigFrame").style['border-radius'] = bord1;
	document.querySelector("#BigFrame").style.width = width1;
	document.querySelector("#BigFrame").style.height = height1;
}

function AddFrame(){
	let posX = document.getElementById("posX").value;
	let posY = document.getElementById("posY").value;
	let posType = document.getElementById("posType").value;
	let obj = document.getElementById("obj").value;
	let new_css = document.getElementById("Own").value;

	if(obj == "1"){obj = "http://pngimg.com/uploads/house/house_PNG73.png"}
	else if(obj == "2"){obj = "http://pngimg.com/uploads/grass/grass_PNG10863.png"}
	else if(obj == "3"){obj = "http://pngimg.com/uploads/christmas_tree/christmas_tree_PNG140.png"}
	else if(obj == "4"){obj = "http://pngimg.com/uploads/sun/sun_PNG13449.png"}

	var x = document.createElement("IMG");
	x.setAttribute("src", obj);
 	x.style.position = posType;
  	x.style.top = posX;
  	x.style.left = posY;
  	x.setAttribute("width", "100px");
  	x.setAttribute("display", "block");
  	x.setAttribute("z-index", "99");
  	//x.setAttribute("style", new_css);

  	document.getElementById("BigFrame").appendChild(x);
}
