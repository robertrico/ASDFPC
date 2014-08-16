<div class="col-md-12">
	<div class="panel panel-default">
    	<div class="panel-heading">
			<center>
        	<h3 class="panel-title" style="font-size:130%">My Programming Blog</h3>
			</center>
        </div></br>
		<center><p>My Technology blog is where I will post on occasion when I feel i need to remind myself, or just simple learning achievements.</br> It will be a place for my thoughts and other pertinent material. Links...etc.</center>
	

<div class="panel-body" >
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="font-size:130%">Posts
 <p style="float:right"><?php echo $this->Html->link('Add Post',array('controller' => 'posts', 'action' => 'add'));?></p></h3>
					</div>
					<!-- Loop Thru $posts-->
					<table style="width:100%"><tr>
						<tr>
							<th>Post</th>
							<th>Title</th>
							<th>Action</th>
							<th>Created</th>
						</tr>
						<?php foreach ($posts as $post): ?>
						<tr>
							<td><?php echo $post['Post']['id']; ?></td>
							<td><?php echo $this->Html->link($post ['Post']['title'],array ('controller' => 'posts','action' => 'view', $post['Post']['id']));?></td>
							<td><?php echo $this->Html->link('Edit',array('action' => 'edit', $post['Post']['id']) ); ?> /<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['id']),array('confirm' => 'Delete this post?'));?> </td>
							<td><?php echo $post ['Post']['created']; ?></td>
						</tr>
						<?php endforeach; ?>
						<?php unset ($post);?>

					</table>
				</div>
			</div>
		</div>
    </div>
</div>
