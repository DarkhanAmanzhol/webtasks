var i = "";
function DeleteUser(row){
	document.body.style.backgroundColor = "rgba(20,20,20,0.8)";
	if(row == 'delete'){
		console.log(i);
		document.getElementById("tableClients").deleteRow(i);
		document.getElementById("box").style.display = "none";
	}
	else{
		document.getElementById("box").style.display = "block";
		i = row.parentNode.parentNode.rowIndex;
		console.log(i);
	}
}
function popClo(){
	document.getElementById("box").style.display = "none";
	document.body.style.backgroundColor = "white";
}
function AddUsers(){
	document.body.style.backgroundColor = "rgba(20,20,20,0.8)";
	document.getElementById("boxAdd").style.display = "block";
}
var count = 5;
function AddToTable(){
	var name = document.getElementById("nameAddd").value;
	var email = document.getElementById("emailAddd").value;
	var phone = document.getElementById("phoneAddd").value;
	var type = document.getElementById("selectionAdd").value;
	var setActive = document.getElementById("seter").value;

	if(name != "" && email != "" && phone != "" && type != "-1"){
  		let user_table = document.getElementById("tableClients");
	  	let user_row = user_table.insertRow(++count);
	  	let user_cell0 = user_row.insertCell(0);
	  	let user_cell1 = user_row.insertCell(1);
	  	let user_cell2 = user_row.insertCell(2);
	  	let user_cell3 = user_row.insertCell(3);
	  	let user_cell4 = user_row.insertCell(4);
	  	let user_cell5 = user_row.insertCell(5);
	  	let user_cell6 = user_row.insertCell(6);
	  	let user_cell7 = user_row.insertCell(7);


  		user_cell0.innerHTML = "<label class='container'><input type='checkbox' unchecked='unchecked'><span class='checkmark'></span></label>"
  		if(setActive=="on"){
  			user_cell1.innerHTML = "Active";}
  		else{
  			user_cell1.innerHTML = "InActive";
  		}
  		user_cell2.innerHTML = "<img  id='clientPhoto' src='http://images.clipartpanda.com/person-clipart-pioAEpo6T.svg'>"+name;
  		user_cell3.innerHTML = email;
  		user_cell4.innerHTML = type;
  		user_cell5.innerHTML = phone;
  		user_cell7.innerHTML = "<img id='glaza' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlaZSGf-X7XM9zwOSAvpq2ivjRm1l63CdF3SJWKX82Gan3IEO2'><button id='clientRemove' onclick='DeleteUser(this)'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1b3YRlmulxkywucm-zTMg85L-5SSFSdKQRsmi43IhtY0B6RX4ng'></button><button id='clientEdit'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8GjOfFzVzZPKsNaho6Hso2qLi1lvZzaJmflemu8ot8jhmYm33'></button>"

	  	document.getElementById("nameAddd").value="";
	  	document.getElementById("emailAddd").value="";
	  	document.getElementById("phoneAddd").value="";
	  	document.getElementById("selectionAdd").value="-1";
	  	document.getElementById("seter").value="off";

	  	document.getElementById("boxAdd").style.display = "none";
	  	document.body.style.backgroundColor = "white";
  	}
}
var l ="";
var name = "";
var email = "";
var phone = "";
var type = "";
var setActive ="";
function EditUser(info){
	document.body.style.backgroundColor = "rgba(20,20,20,0.8)";
	document.getElementById("boxEdit").style.display = "block";
	l = info.parentNode.parentNode.rowIndex;
}
function saveData(){
	document.body.style.backgroundColor = "white";
	name = document.getElementById("nameAdd2").value;
	email = document.getElementById("emailAdd2").value;
	phone = document.getElementById("phoneAdd2").value;
	type = document.getElementById("selectionAdd2").value;
	setActive = document.getElementById("seter2").value;
	console.log(l);
	if(setActive=="on"){
  		document.getElementById("tableClients").rows[l].cells[1].innerHTML = "Active";}
  	if(setActive!="on"){
  		document.getElementById("tableClients").rows[l].cells[1].innerHTML = "InActive";
  	}
  	if(name != ""){
		document.getElementById("tableClients").rows[l].cells[2].innerHTML = "<img  id='clientPhoto' src='http://images.clipartpanda.com/person-clipart-pioAEpo6T.svg'>"+name;
	}
	if(email != ""){
		document.getElementById("tableClients").rows[l].cells[3].innerHTML = email;
	}
	if(type != "-1"){
		document.getElementById("tableClients").rows[l].cells[4].innerHTML = type;
	}
	if(phone != ""){
		document.getElementById("tableClients").rows[l].cells[5].innerHTML = phone;
	}
	document.getElementById("boxEdit").style.display = "none";
	document.getElementById("nameAdd2").value ="";
	document.getElementById("emailAdd2").value ="";
	document.getElementById("phoneAdd2").value ="";
	document.getElementById("selectionAdd2").value ="";
	document.getElementById("seter2").value ="off";
}