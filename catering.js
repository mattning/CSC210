function pick(value){	
	var title = document.getElementById('title');

	if (value == "Takeout"){
		document.getElementById("delivery").checked=false;

		title.innerHTML = '<h2>' + "Catering Information" + '</h2>';
		title.innerHTML += '<input type="textbox" name="Event Date" value="Event Date" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Time" value="Time" class="fillin">';
		title.innerHTML += '</br>';
		
		title.innerHTML += '<h2>' + "Takeout Information" + '</h2>';
		
		title.innerHTML = '<h2>' + "Takeout Information" + '</h2>';
		title.innerHTML += '<input type="textbox" name="Takeout" value="Expected Pick Up Time" class="fillin">';
	}
	else if (value == "Delivery"){
		document.getElementById("takeout").checked=false;

		title.innerHTML = '<h2>' + "Catering Information" + '</h2>';
		title.innerHTML += '<input type="textbox" name="Event Date" value="Event Date" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Time" value="Time" class="fillin">';
		title.innerHTML += '</br>';
		
		title.innerHTML += '<h2>' + "Delivery Information" + '</h2>';

		title.innerHTML += '<input type="textbox" name="Delivery" value="Email Address" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Delivery" value="Phone Number" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Delivery" value="Street Address" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Delivery" value="City" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Delivery" value="State" class="fillin">';
		title.innerHTML += '</br>';
		title.innerHTML += '<input type="textbox" name="Delivery" value="Zipcode" class="fillin">';
	}

	title.innerHTML += '</br>';
	title.innerHTML += '<button type="submit" name="Submit" value="Submit" class="submit"> SUBMIT </button> ';
}
