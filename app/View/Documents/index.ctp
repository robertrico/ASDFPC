<div id="top"class="col-md-12">
	<div class="panel panel-default">
    	<div class="panel-heading">
        	<h3 class="panel-title" style="font-size:250%;">Robert Rico</h3>
        	<small>Computer Science Major at California State University, Sacramento</small>
        </div>
        <div id="body" class="panel-body">
        
 <style>
#draggable { width: inherit; height: inherit; }
#droppable { width: 700px; height: 400px; cursor:move;}
</style>
<script>
$( document ).ready(function() {
    $( "#droppable" ).droppable();

    $(function() {
      $( "#draggable" ).draggable({ 
        stack: "#draggable",
          stop: function(event, ui) {
              var pos = $("#draggable").position();
              var bpos = $("#body").position();
              var tpos = $("#top").position();
              console.log(bpos.left);
              var pos_x = pos.left;
              // Going to have to readjust this magic number
              // IT only works because it is 300px from the top. Could make a fixed div
              // and possibly wiggle it arround that.
              var pos_y = pos.top-bpos.top;
              var pos_x = pos.left-(2*bpos.left);
              console.log(pos_x);
              

              //Do the ajax call to the server
              $.ajax({
                  type: "POST",
                  url: "<?php echo $this->request->here.'buildproof';?>",
                  data: { x: pos_x, y: pos_y}
                }).done(function( msg ) {
                  console.log(msg);
                }); 
          }
      });
    });
});
</script>
<div id="droppable" class="ui-widget-header">
    <p id="draggable" style="font-size:50px">
    Hello
    </p>
</div>


        	
		<?php echo $this->Html->link(__('View Document'), array('action' => 'eight_eleven'),array('target'=>'_blank')); ?>

  
       </div>
    </div>
</div>

