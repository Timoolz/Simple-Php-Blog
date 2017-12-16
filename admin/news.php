<?php    //echo("NEWS!!");  

  $currdate = getcurrentdate();
  ?>

<div class="container">
<div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="fl-form" name="contact" method="post" novalidate> 
                <h2 class="">Upload Newsletter</h2>
                <h3> Uploaded by
                  <?php    echo $_SESSION["activeuser"]; ?>
                  at   
                  <?php      echo $currdate;  ?>
                  
                  
                </h3>
                  <input type="hidden" name="upload" value="newsletter" />
                  <input type="hidden" name="user" value="<?php echo $_SESSION["activeuser"]; ?>" />
                  <input type="hidden" name="date" value="<?php echo $currdate ?>" />

                 <label for="Title" class="">Title</label>   
                 <input type="text" name="title" class="form-control" placeholder="title" />
                 <label for="content" class="">Content</label>
                 <input type="file" name="newsfile" id="newsfile" />
                 <input  type="submit" class="btn btn-glance" value="Send"/>
                    
                
                
                </form>
                <!--<button id="submitf"  name="submit" class="btn btn-glance">Send</button>-->
            </div>
            
            
      
    </div> <!-- /container -->
    
    <div id="dblog"> 
             <div class="loader" id="load">
             <img src="../css/images/spin.gif" width="400px" height="400px" align="center" alt="Loading..."  />
             </div>
            </div>
    