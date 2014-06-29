<!DOCTYPE>
<html>
<head>
<title>Robert Rico's Portfolio</title>
<?php
    $this->Html->meta('icon', $this->Html->url('favicon.ico'));
    ?>
</head>
<body>


  <div id="title">
    <h1><center>Robert Rico</center></h1>
    <center><p class="subtitle">Computer Science Major at California State University, Sacramento</p></center>
    <center><p class="subtitle2">Welcome to ASDFPC.COM, my online Web Design/Development and Computer Science Portfolio!<br/>
    Here I will post my school projects, side projects, and anything else I feel pertinent to computer science and my abilities.</p></center></div><br/>

    <div id="title">
    <h3>Software Programming:</h3>
        <p class="subtitle">Statistics Calculator</p>
         <p class="subtitle2">For my Programming Logic and Methodology I Class, we were required to create a program that calculated statistics on 1,000 numbers.</p>
          <li class="list"><a href="<?php echo $this->webroot; ?>files/sWareEx/fileCalc.java">Main Class</a></li>
          <li class="list"><a href="<?php echo $this->webroot; ?>files/sWareEx/InputCalc.java">InputCalc Class</a></li></br>
        <p class="subtitle">Guessing Game</p>
         <p class="subtitle2">Another program required by Programming Logic and Methodolgy I was a program designed to guess a number that the user was thinking.</p>
          <li class="list"><a href="<?php echo $this->webroot; ?>files/sWareEx/guessGame.java">Main Class</a></li></br>
        <p class="subtitle">Java Graphics</p>
         <p class="subtitle2">For my Programming Logic and Methodolgy I, I created a very basic visual graphics assortment.<br/></p>
          <li class="list"><a href="<?php echo $this->webroot; ?>files/sWareEx/javaGrafix.java">Main Class</a></li></br></div><br/>

    <div id="title">
    <h3>
    <?php echo $this->Html->link('Graphic Design',array('controller'=>'pages','action'=>'grafix')); ?></p>
    </h3>
    </div>




</div>
</div>
</body>
</html>