function AddStudent(){
	var count = 2;
	let name = document.getElementById("name").value;
	let surname = document.getElementById("surname").value;
	let faculty = document.getElementById("faculty").value;

  	if(name != "" && surname != "" && faculty != "-1"){
  		let student_table = document.getElementById("students");
	  	let student_row = student_table.insertRow(++count);
	  	let student_cell1 = student_row.insertCell(0);
	  	let student_cell2 = student_row.insertCell(1);
	  	let student_cell3 = student_row.insertCell(2);

  		student_cell1.innerHTML = name;
  		student_cell2.innerHTML = surname;
  		student_cell3.innerHTML = faculty.bold();

	  	document.getElementById("name").value="";
	  	document.getElementById("surname").value="";
	  	document.getElementById("faculty").value="-1";
  	}
}