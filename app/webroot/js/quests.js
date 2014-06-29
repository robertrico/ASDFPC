function quest(answ){
	var ans = answ
	var x = prompt("What is this body called?","Enter your answer")
	while (x !=null && x != ans){
		x = prompt("Please try again.","Enter your answer")
	}
	if (x == ans){
		fact(answ);
	}
	
	 
}
function fact(planet){
	var did = "Good Job! Did you know,";
	var one = "<center>"
	var two = "</center>"
	if (planet=="Sun"){
		document.getElementById('name').innerHTML = "The " + planet
		document.getElementById('fact').innerHTML = one + did + " the Sun is 6000 degrees Celsius or 10,832 degrees Farenheit!" + two
	}
	else if(planet == "Mercury"){
		document.getElementById('name2').innerHTML = planet
		document.getElementById('fact2').innerHTML = one + did + " Mercury has NO Atmosphere!" + two
	}
	else if(planet == "Venus"){
		document.getElementById('name3').innerHTML = planet
		document.getElementById('fact3').innerHTML = one + did + " Venus is the hottest planet, even though its only SECOND closest to the Sun!" + two
	}
	else if(planet == "Earth"){
		document.getElementById('name4').innerHTML = planet
		document.getElementById('fact4').innerHTML = one + did + " Earth is the ONLY planet we know to have life...So far..." + two
	}
	else if(planet == "Mars"){
		document.getElementById('name5').innerHTML = planet
		document.getElementById('fact5').innerHTML = one + did + " Mars has the biggest volcano in the Solar System! It is called Olympus Mons!" + two
	}
	else if(planet == "Asteroid Belt"){
		document.getElementById('name6').innerHTML = planet
		document.getElementById('fact6').innerHTML = one + did + " About half the mass of the belt is contained in only four asteroids called \n Ceres, Vesta, Pallas and Hygiea!" + two
	}
	else if(planet == "Jupiter"){
		document.getElementById('name7').innerHTML = planet
		document.getElementById('fact7').innerHTML = one + did + " Jupiter's \"Great Red Spot\" is a storm big enough to fit 2 or 3 planets the size of Earth!" + two
	}
	else if(planet == "Saturn"){
		document.getElementById('name8').innerHTML = planet
		document.getElementById('fact8').innerHTML = one + did + " Saturn's rings are more than almost as wide as the distance from the Earth to the Moon!" + two
	}
	else if(planet == "Uranus"){
		document.getElementById('name9').innerHTML = planet
		document.getElementById('fact9').innerHTML = one + did + " Uranus' tilt is so extreme, it looks like Uranus is sideways! " + two
	}
	else if(planet == "Neptune"){
		document.getElementById('name10').innerHTML = planet
		document.getElementById('fact10').innerHTML = one + did + " Only one spacecraft has ever flown past Neptune! " + two
	}
	else if(planet == "Pluto"){
		document.getElementById('name11').innerHTML = planet
		document.getElementById('fact11').innerHTML = one + did + " Pluto isn't a planet, its actually called a \"Dwarf Planet\"" + two
	}
}