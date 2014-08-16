
<div class="col-md-2">
</div>
<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" style="font-size:130%">Add Vehicle</h3>
		</div></br>
		<?php echo $this->Form->create('User'); ?>
	<?php echo $this->Form->create('Vehicle'); ?>
	<center><fieldset>
	<?php
		echo $this->Form->input('make',array('class'=>'input-group'));
		echo $this->Form->input('model',array('class'=>'input-group'));
		echo $this->Form->input('year',array('class'=>'input-group'));
		echo $this->Form->input('img',array('class'=>'input-group','label' => 'Image Source'));
	//	echo $this->Form->input('current_bid');
		echo $this->Form->input('description',array('class'=>'input-group'));
		echo '</br>';
		echo $this->Form->submit('Add Vehicle',array('class' => 'btn btn-lg btn-primary'));
		echo $this->Form->end();?>
	</fieldset></center></br>
	</div>
</div>
<div class="col-md-2">
</div>

