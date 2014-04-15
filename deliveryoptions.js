function pick(value){	
	var title = document.getElementById('title');

	if (value == "Delivery"){
		document.getElementById("takeout").checked=false;
		document.getElementById("onsite").checked=false;
		title.innerHTML = '<form name = "myform">';
		title.innerHTML += '<h2>' + "Delivery Information" + '</h2>';
		title.innerHTML += '<input type="textbox" name="Email" value="Email Address" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Phone" value="Phone Number" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Street" value="Street Address" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="City" value="City" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="State" value="State" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" id="Zipcode" value="Zipcode" class="fillin">';
		title.innerHTML += '</form>';
	}
	else if (value == "Takeout"){
		document.getElementById("delivery").checked=false;
		document.getElementById("onsite").checked=false;
		
		title.innerHTML = '<h2>' + "Takeout Information" + '</h2>';
		title.innerHTML += '<input type="textbox" name="Takeout" value="Expected Pick Up Time" class="fillin">';
	}
	else if (value == "Onsite"){
		document.getElementById("delivery").checked=false;
		document.getElementById("takeout").checked=false;

		title.innerHTML = '<h2>' +"On-site Dining Information" + '</h2>';
		title.innerHTML += '<input type="textbox" name="Takeout" value="Expected Arrival Time" class="fillin">';
		title.innerHTML += '<input type="textbox" name="Takeout" value="Size of Party" class="fillin">';
	}
	title.innerHTML += '</br>';
	title.innerHTML += '<button type="submit" name="Submit" onClick="submit()" value="Submit" class="submit"> SUBMIT </button> ';
}
