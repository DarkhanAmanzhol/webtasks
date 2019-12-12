var tabButtons = document.querySelectorAll("#buttonContainer button");
var tabPanels = document.querySelectorAll("#tabPanel");

function showPanel(panelIndex) {
	tabButtons.forEach(function(node){
		node.style.backgroundColor="";
		node.style.color="";
	});
	tabButtons[panelIndex].style.backgroundColor='rgba(0,0,0,0.7)';
	tabButtons[panelIndex].style.color="red";
	tabPanels.forEach(function(node){
		node.style.display="none";
	});
	tabPanels[panelIndex].style.display="block";
}