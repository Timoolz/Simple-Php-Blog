<?php 
include_once('functions/generalfunctions01.php');
require_once 'creds/creds.php';
require_once('dbconn.php');


?>


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
    <link href="css/main.css" rel="stylesheet">
    

    <link href="css/main2.css" rel="stylesheet">
    
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>-->
   
    
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

       <div class="wrapper">
    
        <!-- Sidebar -->
        <div class="sidebar-wrapper">
            <ul class="sidebar-nav">
        <?php
            if(isset($_SESSION["activeuser"]) && ($_SESSION["activeuser"]!="")){
        ?>
            
                <li class="sidebar-brand" >
                    <a href="admin/index.php">Admin home</a>
                </li>
        <?php   }         ?>
                <li class="sidebar-brand <?php 
                if (isset($_REQUEST['p'])){
                    if ($_REQUEST['p']=='dblog'){
                    
                    echo" active";
                    }
                    }?>
                ">
                    <a href="?p=dblog">
                        Blogs
                    </a>
                </li>
                <li class="sidebar-brand <?php 
                if (isset($_REQUEST['p'])){
                    if ($_REQUEST['p']=='dnews'){
                    
                    echo" active";
                    }
                    }?>
                ">
                    <a href="?p=dnews">
                         Newsletters
                    </a>
                </li>
                <li class="sidebar-brand  <?php 
                if (isset($_REQUEST['p'])){
                    if ($_REQUEST['p']=='dseminar'){
                    
                    echo" active";
                    }
                    }?>
                ">
                    <a href="?p=dseminar">Workshops</a>
                </li>
                
                
            </ul>
        </div>
        <!-- /.sidebar-wrapper -->
        
         <!-- Page Content -->
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">


                            <?php
                            
                            /**
                             * @author Laleye Olamide
                             * 
                             * @copyright 2017
                             */
                            
                            
                             //var_dump($_REQUEST);
                             $mapping = array(
                                       'dblog'      => 'displayblogs',
                                       'dnews'         => 'displaynews',
                                       'dseminar'        => 'displayseminars',
                                       
                                       #....
                                    );
                                    
                             $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 'displayblogs';
                             $file = isset($mapping[$page]) ? $mapping[$page] : 'displayblogs';
                         
                             include($file.'.php');
                             
                            
                            
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-content-wrapper -->
        
    </div>
    <!-- /.wrapper -->

    </body>
          
        <?php    include'footer.php';      ?>
            
 
</html>
