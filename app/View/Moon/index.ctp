<html>
<header>
	<?php echo $this->Html->css('moon.css'); ?>
	<?php echo $this->Html->script('jquery'); ?>
	<?php echo $this->Html->script('moon'); ?>
	
	<?php echo $this->Html->script('jquery.paulund_modal.js'); ?>
	<?php
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		$path = WWW_ROOT;
		?>
	
	
</header>
<body style ="background: backdrop.jpg">

<h2><center>The Moon</center></h2>
<div>
	<center class="subtitle">Earth's Biggest Sattelite</center>

		<h3>Name the Moon Phase</h3>
		<div id="img">
		<table class="subtitle">
		<!-- First List of Planets-->
			<tr id="planet" >
				<td onclick="quest('New Moon')";><div id="name"></div><?php echo $this->Html->image("phases/new.png");?><div id="fact"></div></td>
				<td onclick="quest('Waxing Crescent')";><div id="name2"></div><?php echo $this->Html->image("phases/cres1.png");?><div id="fact2"></div></td>
				<td onclick="quest('First Quarter')";><div id="name3"></div><?php echo $this->Html->image("phases/half1.png");?><div id="fact3"></div></td>
				<td onclick="quest('Waxing Gibbous')";><div id="name4"></div><?php echo $this->Html->image("phases/3.4.1.png");?><div id="fact4"></div></td>
					
				</tr>
			</table>
			
			<table>
				<tr>
					<center>
						<td colspan="4" onclick="location.reload();";>
							<center><div id ="goodjob"><h1 style="font-size:300%; background-color: transparent; text-decoration: underline; color:red;);"><b>Good Job!!!</b></h1><?php echo $this->Html->image("gj.gif");?></div></center>
						</td>
					</center>
				</tr>
			</table>
		
		<!-- Second set of planets-->
			<table class="subtitle">
				<tr id="planet">
					<td onclick="quest('Full Moon')";><div id="name5"></div><?php echo $this->Html->image("phases/full.png");?><div id="fact5"></div></td>
					<td onclick="quest('Waning Gibbous')";><div id="name6"></div><?php echo $this->Html->image("phases/3.4.2.png");?><div id="fact6"></div></td>
					<td onclick="quest('Third Quarter')";><div id="name7"></div><?php echo $this->Html->image("phases/half2.png");?><div id="fact7"></div></td>
					<td onclick="quest('Waning Crescent')";><div id="name8"></div><?php echo $this->Html->image("phases/cres2.png");?><div id="fact8"></div></td>
					
				</tr>
			</table>
		</div>
</div>


</body>
</html>




