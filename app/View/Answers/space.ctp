<header>
	<?php echo $this->Html->css('space.css'); ?>
	<?php echo $this->Html->script('jquery'); ?>
	<?php echo $this->Html->script('quests'); ?>
	<?php
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		$path = WWW_ROOT;
		?>
	
	
</header>

<h1><center>Our Solar System</center></h1>

	<center class="subtitle"><span style="font-color:white; font-size: 200%;" class="glyphicon glyphicon-star-empty"></span>       Just a small fragment of the Milky Way</center>

</br>	
<div class="col-md-12" style="background-color:transparent;">
	<div class="panel panel-default" style="background-color:transparent;">
    	<div class="panel-heading">
			<center>
        	<h3 class="panel-title" style="font-size:130%">Name that Celestial Body</h3>
			</center>
        </div>
        <div class="panel-body" >
        	<table style="width:105%">
		<!-- First List of Planets-->
			<tr id="planet" >
					<td onclick="quest('Sun')";><div id="name"></div><?php echo $this->Html->image("planets/sun.png");?><div id="fact"></div></td>
					<td onclick="quest('Mercury')";><div id="name2"></div><?php echo $this->Html->image("planets/mercury.png");?><div id="fact2"></div></td>
					<td onclick="quest('Venus')";><div id="name3"></div><?php echo $this->Html->image("planets/venus.png");?><div id="fact3"></div></td>
					<td onclick="quest('Earth')";><div id="name4"></div><?php echo $this->Html->image("planets/earth.png");?><div id="fact4"></div></td>
					<td onclick="quest('Mars')";><div id="name5"></div><?php echo $this->Html->image("planets/mars.png");?><div id="fact5"></div></td>
					
				</tr>
			</table></br>
			
			<table style="width:100%">
				<tr>
					<center>
						<td colspan="5" onclick="quest('Asteroid Belt')";>
							<center><div id="name6"></div><?php echo $this->Html->image("planets/Asteroidbelt.png");?><div id="fact6"></div></center>
						</td>
					</center>
				</tr>
			</table></br>
		
		<!-- Second set of planets-->
			<table style="width:104%">
				<tr id="planet">
					<td onclick="quest('Jupiter')";><div id="name7"></div><?php echo $this->Html->image("planets/jupiter.png");?><div id="fact7"></div></td>
					<td onclick="quest('Saturn')";><div id="name8"></div><?php echo $this->Html->image("planets/saturn.png");?><div id="fact8"></div></td>
					<td onclick="quest('Uranus')";><div id="name9"></div><?php echo $this->Html->image("planets/uranus.png");?><div id="fact9"></div></td>
					<td onclick="quest('Neptune')";><div id="name10"></div><?php echo $this->Html->image("planets/neptune.png");?><div id="fact10"></div></td>
					<td onclick="quest('Pluto')";><div id="name11"></div><?php echo $this->Html->image("planets/pluto.png");?><div id="fact11"></div></td>
				</tr>
			</table>   
       </div>
    </div>
</div>
