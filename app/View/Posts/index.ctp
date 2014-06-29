<html>
<body>

<a style="background:#CCCCCC" href="/users/logout">&nbsp;Logout&nbsp;</a></p>

<a style="background:#CCCCCC" href="/users/login">&nbsp;Login&nbsp;</a></p>

<center><div id=title style="width:75%">
<center><h1>My Technology Blog</h1></center>
<center><p class="subtitle">A place for my thoughts, ideas, and progress.</p></center>
<?php 
	echo $this->Html->link(
		'Add Post', 
		array(
			'controller' => 'posts', 'action' => 'add'
		)
	);
?><p>


<table>
	<tr>
		<th>Post</th>
		<th>Title</th>
		<th>Action</th>
		<th style="text-align:right">Created</th>
	</tr>

<!-- Loop Thru $posts-->
<?php foreach ($posts as $post): ?>
	<tr>
		<td style="width:10px"><center><p class="subtitle"><?php echo $post['Post']['id']; ?> </p></center></td>
		<td><p class="subtitle"><?php echo $this->Html->link(
		$post ['Post']['title'], 
		array (
			'controller' => 'posts','action' => 'view', $post['Post']['id']) ); ?></p></td>
		<td><?php echo $this->Html->link(
		'Edit', 
		array('action' => 'edit', $post['Post']['id']) ); ?> / 
		<?php echo $this->Form->postLink(
		'Delete',
		array(
		'action' => 'delete', $post['Post']['id']),
		array(
			'confirm' => 'Delete this post?'
		) ); ?> </td>
		<td style="text-align:right"><p class="subtitle2"><?php echo $post ['Post']['created']; ?> </p></td>
	</tr>
	<?php endforeach; ?>
	<?php unset ($post);?>

</table>
</div></center>

</html>
</body>