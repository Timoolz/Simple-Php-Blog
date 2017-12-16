$.noConflict();
  jQuery( document ).ready(function( $ ) {
    
    $( document).on("click", "#bringsup", function(){
        
        $('#showsup').load("./signup.php"); 
                
        
     
        
    })
    
    $( document).on("click", "#logout", function(){
        
        document.location = "./logout.php"; 
                
        
     
        
    })
    
    
    $( document).on("click", "#auroute", function(){
        
        $('#au').load("./aa1.php"); 
                
        
     
        
    })
    
    $( document).on("click", "#submitb", function(){
        
        //alert("dfghjkgfdghjk")
        
        if($('#preventsubmit').length){//To ensure it doesn't submit twice
                $('#submit').attr( 'disabled', true); 
                alert("This Post has already been Submitted");               
             }
             else{
                
                loadpage(); 
             }
        
       // $('#dblog').load("./aa1.php"); 

        
    })
    
    
      function loadpage(){
                
        $("#load").css("display", "block");// show loading image     
        
        var ed = tinyMCE.get('tmc');
        var da = ed.getContent();   
        //console.log(da);
        da = da.replace(/"/g, " ' "); //getting rid of complex chracters that might break string
        da = da.replace(/&/g, " ");
        
        //console.log(da);
        //alert(da);
                    
    
        $.ajax({
         url: 'submitdata.php',
         type: 'POST',
         data: $("#bd-form").serialize()+ '&tmctext='+ da,  //it will serialize the form data
                dataType: 'html'
            })
            .done(function(data){
             $('#dblog').fadeOut('slow', function(){
                  $('#dblog').fadeIn('slow').html(data);
                  $("#load").css("display", "none");// remove loading image                  
                });
             
            })
            .fail(function(){
         alert('Ajax Submit Failed ...'); 
            });
    };
    
    
    
    
    $("form#fl-form").submit(function(event){
 
      //disable the default form submission
      event.preventDefault();
      
       
        if($('#preventsubmit').length){//To ensure it doesn't submit twice
                $('#submit').attr( 'disabled', true); 
                alert("This Post has already been Submitted");               
             }
             else{
     
              //grab all form data  
              var formData = new FormData($(this)[0]);
             
              $.ajax({
                url: 'submitdata.php',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (returndata) {
                  //alert(returndata);
                  console.log(returndata);
                  
                  $('#dblog').fadeOut('slow', function(){
                              $('#dblog').fadeIn('slow').html(returndata);
                              $("#load").css("display", "none"); //remove loading image                  
                            });
                }
              });
             
              return false;
              
              }
            });
    

  
  
  })
  
 