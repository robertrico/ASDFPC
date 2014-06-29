<!-- Edit post view -->
Edit Post
<?php
	echo $this->form->create('Post');
	echo $this->form->input('title');
	echo $this->form->input('body', array('rows' => '3'));
	 $this->form->input('id', array('rows' => 'hidden'));
	echo $this->form->end('Update Post');
?>