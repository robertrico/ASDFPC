<?php $cakeDescription = ('My Portfolio');
      $nameDescription = ('Robert Rico'); ?>
<!DOCTYPE html>
<html>
<head>
<title>
    <?php echo $nameDescription ?>:
    <?php echo $cakeDescription ?>
  </title>
  <?php
    $this->Html->meta('icon', $this->Html->url('favicon.ico'));
    echo $this->Html->css('port_style.css'); ?>
</head>
<body>
 <div id="header">
  <center><h2>ASDFpc.com</h2></center>
 
 <p>
 <?php echo $this->Html->link('Home',array('controller'=>'pages','action'=>'home')); ?>
 <?php echo $this->Html->link('My Blog',array('controller'=>'posts','action'=>'index')); ?>
 <?php echo $this->Html->link('My Resume',array('controller'=>'pages','action'=>'viewpdf')); ?>
 <?php echo $this->Html->link('Space Game',array('controller'=>'answers','action'=>'space')); ?>
 <?php echo $this->Html->link('Moon Game',array('controller'=>'moon','action'=>'index')); ?></p>
 </div>
 <div id="content">
  <?php echo $this->fetch('content'); ?>
 </div>
 <div>
  <h4><center>2014 www.asdfpc.com Last Updated: 6/3/14 <a href="https://www.facebook.com/robert.rico.1217"><?php echo $this->Html->image('blu_box.png', array('alt' => 'CakePHP', 'border' => '0',)); ?></a></center></h4>
 </div>
</body>
</html>