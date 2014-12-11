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
    echo $this->Html->css('port_style.css'); 
    echo $this->layout('bootstrap'); ?>
</head>
<body>
 <div id="header">
  <center><h2>ASDFpc.com</h2></center>
 
 <p>
 <?php echo $this->Html->link('Home',array('controller'=>'pages','action'=>'home')); ?>
 &nbsp;
 <?php echo $this->Html->link('My Blog',array('controller'=>'posts','action'=>'index')); ?>
 &nbsp;
 <?php echo $this->Html->link('My Resume','../'.DS.'app'.DS.'webroot'.DS.'files'.DS.'resume2.pdf'); ?>
 &nbsp;
 <?php echo $this->Html->link('Space Game',array('controller'=>'answers','action'=>'space')); ?>
 &nbsp;
 <?php echo $this->Html->link('Moon Game',array('controller'=>'moon','action'=>'index')); ?>
 &nbsp;
 <?php echo $this->Html->link('Graphic Design',array('controller'=>'pages','action'=>'grafix')); ?>
 &nbsp;
 <?php echo $this->Html->link('Car Auction Mock',array('controller'=>'vehicles','action'=>'index')); ?>
 &nbsp;
 <?php $this->Logged->check($this->Session->read('Auth.User.group_id')); ?>
 </p>
 </div>
 <div id="content">
  <?php echo $this->layout('bootstrap); ?>
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->fetch('content'); ?>
 </div>
</body>
</html>
