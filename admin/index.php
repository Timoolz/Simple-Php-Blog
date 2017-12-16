<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="cstylesheets/ico/favicon.png">-->

    <title>Admin Check-dc Test</title>
    
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/general.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <script type="text/javascript" src="../js/jquery/jquery.min.js"></script>
    
    <script type="text/javascript" src="../js/general.js"></script>

    
    </head>
    
    
<body>

    
   
<?php
   require_once("../functions/generalfunctions01.php");
   session_start();
   if(isset($_SESSION["activeuser"]) && ($_SESSION["activeuser"]!="")){
    
   ?>     
   
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
       <div id="navbar" class="navbar-collapse collapse    navbar-right">
                  <span class="navbar-brand " >
                    Welcome <?php echo $_SESSION["activeuser"]; ?>
                  </span>
                  <button id="logout" class=" btn btn-success">Log Out</button>
                </div>
                </div>
                </nav>
       
       <div class="wrapper">
    
        <!-- Sidebar -->
        <div class="sidebar-wrapper">
            <ul class="sidebar-nav">
            
                <li class="sidebar-brand" >
                    <a href="../index.php">Home page</a>
                </li>
                <li class="sidebar-brand <?php 
                if (isset($_REQUEST['p'])){
                    if ($_REQUEST['p']=='blog'){
                    
                    echo" active";
                    }
                    }?>
                ">
                    <a href="?p=blog">
                        Blogposts
                    </a>
                </li>
                <li class="sidebar-brand <?php 
                if (isset($_REQUEST['p'])){
                    if ($_REQUEST['p']=='news'){
                    
                    echo" active";
                    }
                    }?>
                ">
                    <a href="?p=news">
                         Newsletters
                    </a>
                </li>
                <li class="sidebar-brand  <?php 
                if (isset($_REQUEST['p'])){
                    if ($_REQUEST['p']=='seminar'){
                    
                    echo" active";
                    }
                    }?>
                ">
                    <a href="?p=seminar">Workshops</a>
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
                                       'blog'      => 'blog',
                                       'news'         => 'news',
                                       'seminar'        => 'seminar',
                                       
                                       #....
                                    );
                                    
                             $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 'blog';
                             $file = isset($mapping[$page]) ? $mapping[$page] : 'blog';
                         
                             include($file.'.php');
                             
                            
                            
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-content-wrapper -->
        
    </div>
    <!-- /.wrapper -->
           
              
   
   
   
   
   
             
              
   <?php           
   }
   else{
    
    echo"YOU ARE NOT LOGGED IN";
   }





?>
    
    
    
    
  </body>
</html>
