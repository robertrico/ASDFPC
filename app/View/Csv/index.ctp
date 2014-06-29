<?php
	echo $this->Html->link(
		'Create CSV', 
		array('action' => 'csv')); 
	?>	
	
	<table>
	<tr>
		<th >id</th>
		<th >Name</th>
		<th >Qty</th>
		<th >price</th>
	</tr>
	<?php foreach ($orders as $post): ?>
	<tr>
		<td style="width:10px"><center><p class="subtitle"><?php echo $post['Csv']['id']; ?> </p></center></td>
		<td><p class="subtitle"><?php echo $post ['Csv']['name'];?></p></td>
		<td><p class="subtitle"><?php echo $post ['Csv']['qty']; ?> </p></td>
		<td><p class="subtitle"><?php echo $post ['Csv']['price']; ?> </p></td>
	</tr>
	<?php endforeach; ?>
	<?php unset ($post);?>
	</table>
	


		
