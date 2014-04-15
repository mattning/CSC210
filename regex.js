var zipcode=/^\d{5}$/; //regular expression defining a 5 digit number

function checkpostal(){
var zip = document.getElementById("zipcode");
	if (zipcode.exec(zip.value)==false){ //if match failed
		return false;
	}
	return true;
}
function submit(){
	if (checkpostal()==false){
		alert("Please enter a valid 5 digit number inside form");
	}
}