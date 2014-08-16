<div class="col-md-4">
</div>
<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" style="font-size:150%">
				<?php echo h($post['Post']['title']); ?>
			</h3>
			<p><small>Created: <?php echo $post['Post']['created']; ?> </small></p>
		</div>
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<fieldset><center>
			<p><?php echo h($post['Post']['body']); ?></p>
			<?php echo $this->Html->link('Edit',array('action' => 'edit', $post['Post']['id']) ); ?>&nbsp;&nbsp;
			<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['id']),	array('confirm' => 'Delete this post?'));?>&nbsp;&nbsp;
			<a href="/posts">Blog Home</a></p>
			</center></div>
		</fieldset>
	</div>
</div>
<div class="col-md-4">
</div>
