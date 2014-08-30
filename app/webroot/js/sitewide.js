$( document ).ready(function() {
    $(function(){
      $('#com_name').keyup(function(){
         $('#draggable').text($(this).val());
      });
      $('#name').keyup(function(){
         $('#draggable2').text($(this).val());
      });
    });
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
              var pos_x = pos.left-bpos.left;
              console.log(pos_x);
              

              //Do the ajax call to the server
              $.ajax({
                  type: "POST",
                  url: "buildproof",
                  data: { x: pos_x, y: pos_y, com_name: $("#draggable").text(),name: $("#draggable2").text()}
                }).done(function( msg ) {
                  console.log(msg);
                }); 
          }
      });
      $( "#draggable2" ).draggable({ 
        stack: "#draggable2",
          stop: function(event, ui) {
              var pos = $("#draggable2").position();
              var bpos = $("#body").position();
              var tpos = $("#top").position();
              console.log(bpos.left);
              var pos_x = pos.left;
              // Going to have to readjust this magic number
              // IT only works because it is 300px from the top. Could make a fixed div
              // and possibly wiggle it arround that.
              var pos_y = pos.top-bpos.top;
              var pos_x = pos.left-bpos.left;
              console.log(pos_x);
              

              //Do the ajax call to the server
              $.ajax({
                  type: "POST",
                  url: "buildproof",
                  data: { x: pos_x, y: pos_y, name: $("#draggable2").text()}
                }).done(function( msg ) {
                  console.log(msg);
                }); 
          }
      });
    });
});

