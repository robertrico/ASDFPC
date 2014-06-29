

<?php	foreach ($orders as $post): ?>
<?php	echo $post ['Csv']['qty']." "; ?>
<?php endforeach; ?>
<?php unset ($post);?>
<?php
	 echo $this->form->create('Csv');
	// echo $this->form->input('filetitle');
	// echo $this->form->input('filename',array('rows' => '3'));
	echo $this->form->end('CSV');
	
?>
