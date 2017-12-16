<?php    //echo("SEMINAR!!");  

  $currdate = getcurrentdate();
  ?>
  
  
    <!-- Tiny mce scripts-->
    
    <!--<script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>-->
    
    <script type="text/javascript" src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
      <script type="text/javascript">
      tinymce.init({
        selector: '.tmc',
        theme: 'modern',
        width: 900,
        height: 300,
        plugins: [
          'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
          'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
          'save table contextmenu directionality emoticons template paste textcolor'
        ],
        content_css: 'css/content.css',
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
      });
      </script>  

<div class="container">
<div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="bd-form" name="contact" method="post" novalidate> 
                <h2 class="">Upload Seminar &AMP; workshop material</h2>
                <h3> Uploaded by
                  <?php    echo $_SESSION["activeuser"]; ?>
                  at   
                  <?php      echo $currdate;  ?>
                  
                  
                </h3>
                  <input type="hidden" name="upload" value="workshop" />
                  <input type="hidden" name="user" value="<?php echo $_SESSION["activeuser"]; ?>" />
                  <input type="hidden" name="date" value="<?php echo $currdate ?>" />

                 <label for="Title" class="">Title</label>   
                 <input type="text" name="title" class="form-control" placeholder="title" />
                 <label for="content" class="">Content</label>
                    
                 <textarea name="content" class="form-control tmc" id="tmc" placeholder="Your Message" style="height:120px"></textarea>
                
                </form>
                <button id="submitb"  name="submit" class="btn btn-glance">Send</button>
            </div>
            
            
      
    </div> <!-- /container -->
    
    <div id="dblog"> 
             <div class="loader" id="load">
             <img src="../css/images/spin.gif" width="400px" height="400px" align="center" alt="Loading..."  />
             </div>
            </div>
    