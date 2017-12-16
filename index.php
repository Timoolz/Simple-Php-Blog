<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Check-dc Test</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/general.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/jquery/jquery.min.js"></script>
    
    <script type="text/javascript" src="js/general.js"></script>


    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<div class="navbar-brand" href="#">Google maps</div>-->
        </div>
        
        <?php
        include_once('creds/creds.php');
        session_start();
        
        
        if(isset($_SESSION["activeuser"]) && ($_SESSION["activeuser"]!="")){
        ?>
        <div id="navbar" class="navbar-collapse collapse    navbar-right">
              <!--<span class="navbar-brand " >
                Welcome <?php echo $_SESSION["activeuser"]; ?>
              </span>-->
                            
              <button id="logout" class=" btn btn-success">Log Out</button>
            </div>
          </div>
      </nav><!--/.navbar-collapse -->
            
            
            
            
            
            
            
        <?php
        
        
            
       //session_destroy();    
        }
        else{
            

          
        ?>  
          <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right" action="admin/login.php" method="post">
                <div class="form-group">
                  <input type="text" placeholder="Username" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password" name="userpass" id="userpass" class="form-control">
                </div>  
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"/> Remember me
                  </label>
                </div>-->
                <button type="submit" class="btn btn-success">Log in</button>
              </form>
            </div><!--/.navbar-collapse -->
            
            
            <?php   }         ?>
          </div>
          
          
          
          
          <?php 
          
        
        
        ?>
        </nav>    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello Guys!</h1>
        <p>This is this is me trying to test google map api for the first Time. Login or Sign up to Continue</p>
        <p><a class="btn btn-primary btn-lg" id="bringsup" role="button">Sign Up &raquo;</a></p>
      </div>
    </div>

    <div class="container" id="showsup">
      

      
    </div> <!-- /container -->

    </body>
          
        <?php    include'footer.php';      ?>
            
 
</html>
