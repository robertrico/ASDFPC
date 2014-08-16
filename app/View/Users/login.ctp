<div class="col-md-4">
</div>
<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" style="font-size:130%">Login</h3>
		</div>
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<fieldset><center>
			<legend>
				<?php echo __('Please enter your username and password'); ?>
			</legend>
			<?php echo $this->Form->input('username',array('label'=>'Username&nbsp;'));
				echo '</br>';
				echo $this->Form->input('password',array('label'=>'Password&nbsp;'));
			?></br>
		<?php echo $this->Form->submit('Login',array('class' => 'btn btn-primary')); ?></br>
		<?php echo $this->Form->end(); ?>
		</center></div>
		</fieldset>
	</div>
</div>
<div class="col-md-4">
</div>
