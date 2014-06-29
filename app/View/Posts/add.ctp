<!-- Add post view -->
Add Post
<?php
	echo $this->form->create('Post');
	echo $this->form->input('title');
	echo $this->form->input('body', array('rows' => '3'));
	echo $this->form->end('Save Post');
?>