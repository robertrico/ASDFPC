function quest(answ){
// Sets answer variables and the validation for correct answers
	var ans = answ
	var x = prompt("What is this body called?","Enter your answer")
	while (x !=null && x != ans){
		x = prompt("Please try again.","Enter your answer")
	}
// Runs the fact function when answer is correct
	if (x == ans){
		fact(answ);
	}
	
	 
}
// Depending on the planet. Runs through the congratulations prompt and fills in the <div> in the space.ctp view
function fact(planet){
	var did = "Good Job! Did you know,";
	var one = "<center>"
	var two = "</center>"
	if (planet=="New Moon"){
		document.getElementById('name').innerHTML = "New Moon"
		document.getElementById('fact').innerHTML = one + did + " the Moon has 1/6th gravity of the Earth?" + two
	}
	else if(planet == "Waxing Crescent"){
		document.getElementById('name2').innerHTML = planet
		document.getElementById('fact2').innerHTML = one + did + " the Moon causes the tides on Earth?" + two
	}
	else if(planet == "First Quarter"){
		document.getElementById('name3').innerHTML = planet
		document.getElementById('fact3').innerHTML = one + did + " that Earth's gravity causes moonquakes?" + two
	}
	else if(planet == "Waxing Gibbous"){
		document.getElementById('name4').innerHTML = planet
		document.getElementById('fact4').innerHTML = one + did + " the Moon's shadow always moves right to left?" + two
	}
	else if(planet == "Full Moon"){
		document.getElementById('name5').innerHTML = planet
		document.getElementById('fact5').innerHTML = one + did + " we only see one side of the Moon?" + two
	}
	else if(planet == "Waning Gibbous"){
		document.getElementById('name6').innerHTML = planet
		document.getElementById('fact6').innerHTML = one + did + " the Moon most likely was created after an enormous asteroid struck Earth?"
	}
	else if(planet == "Third Quarter"){
		document.getElementById('name7').innerHTML = planet
		document.getElementById('fact7').innerHTML = one + did + " the dark parts of the Moon are called \"maria\"?" + two
	}
	else if(planet == "Waning Crescent"){
		document.getElementById('name8').innerHTML = planet
		document.getElementById('fact8').innerHTML = one + did + " there have only been twelve people to set foot on the Moon?" + two
		setTimeout(function(){hide()},300)
	}
	function hide(){
		document.getElementById('goodjob').style.display = 'block'
	}

	
}