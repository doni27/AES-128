$(document).ready(function() {
    
    $('#selectAllBoxes').click(function(){
        if(this.checked){
            $('.checkBoxes').each(function(){
                this.checked = true;
            });
        }
        else{
            $('.checkBoxes').each(function(){
                this.checked = false;
            });
        }
    });
    
    var div_box ="<div id='load-screen'><div id='loading'></div></div>";
    $("body").prepend(div_box);
    
    $('#load-screen').delay(500).fadeOut(400, function(){
        $(this).remove();
    });
  
    
});



    $(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});