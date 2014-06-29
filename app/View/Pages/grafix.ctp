<!DOCTYPE>
<html>
<head>
<title>Robert Rico's Portfolio</title>
<?php
    $this->Html->meta('icon', $this->Html->url('favicon.ico'));
    echo $this->Html->css('port_style'); ?>
</head>
<body>
<div id="wrap">


  <div id="main">

  <div id="title">
    <h1><center>Graphic Design</center></h1>
    <center><p class="subtitle">Here are some designs I created using GIMP2</p></center>
    </div><br/>

    <div id="title">
        <p class="subtitle">First WebSite Logo</p>
		<?php echo $this->Html->image('altLogo.png', array('alt' => 'CakePHP', 'border' => '0',));?>
        
        <p class="subtitle">Another WebSite Logo</p>
		<?php echo $this->Html->image('newlogo.png', array('alt' => 'CakePHP', 'border' => '0',));?>
         
        <p class="subtitle">MockUp Logo For a Landscaping Company</p>
		<?php echo $this->Html->image('rland.png', array('alt' => 'CakePHP', 'border' => '0',));?>
         </div>

   



</div>
</div>
</body>
</html>