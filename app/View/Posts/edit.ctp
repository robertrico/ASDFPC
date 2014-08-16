<div class="col-md-4">
</div>
<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" style="font-size:130%">Edit Blog Post</h3>
		</div>
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<fieldset><center>
			<?php
	echo "<h3>Post Title</h3>";
	echo $this->form->create('Post',array('label'=>''));
	echo $this->form->input('title',array('label'=>''));
	echo "<h3>Post Body</h3>";
	echo $this->form->input('body', array('type' => 'textarea','label'=>''));
	echo '</br>';
	echo $this->Form->submit('Post',array('class' => 'btn btn-lg btn-primary'));
	echo $this->Form->end();
	echo '</br>';
?>		</center></div>
		</fieldset>
	</div>
</div>
<div class="col-md-4">
</div>
