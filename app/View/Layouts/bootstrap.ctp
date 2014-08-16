<!DOCTYPE html>
<html lang="en">
<head>
<title>
<?php echo $title_for_layout; ?>
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<?php
echo $this->Html->meta('icon');
echo $this->Html->css('bootstrap');
echo $this->Html->css('style');
echo $this->Html->css('header1');
echo $this->Html->css('responsive');
echo $this->Html->css('font-awesome');
echo $this->Html->css('default');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<!-- Latest compiled and minified JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<?php echo $this->Html->script('jquery.maskedinput.min'); ?>
<?php
echo $this->Html->css('style_override');
echo $this->Html->script('sitewide');
?>
</head>
<body>
 
 <div class="jumbotron">
        <h1 style="margin-top:-50px;"><?php echo $this->Html->image('newlogo.png');?></h1>
<?php echo $this->Html->link('Home',array('controller'=>'pages','action'=>'home'),array('class' => 'btn btn-primary')); ?>
 &nbsp;
 <?php echo $this->Html->link('My Blog',array('controller'=>'posts','action'=>'index'),array('class' => 'btn btn-primary')); ?>
 &nbsp;
 <?php echo $this->Html->link('My Resume','../'.DS.'app'.DS.'webroot'.DS.'files'.DS.'resume2.pdf',array('class' => 'btn btn-primary')); ?>
 &nbsp;
 <?php echo $this->Html->link('Space Game',array('controller'=>'answers','action'=>'space'),array('class' => 'btn btn-primary')); ?>
 &nbsp;
 <?php echo $this->Html->link('Moon Game',array('controller'=>'moon','action'=>'index'),array('class' => 'btn btn-primary')); ?>
 &nbsp;
 <?php echo $this->Html->link('Graphic Design',array('controller'=>'pages','action'=>'grafix'),array('class' => 'btn btn-primary')); ?>
 &nbsp;
 <?php echo $this->Html->link('Car Auction Mock',array('controller'=>'vehicles','action'=>'index'),array('class' => 'btn btn-primary')); ?>
 &nbsp;
 <?php $this->Logged->check($this->Session->read('Auth.User.group_id')); ?>

</div>
 </div>
 <div id="content">
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->fetch('content'); ?>
 </div>
</div><!-- /.container -->
<?php
echo $this->Element('footer');
?>
</body>
</html>
