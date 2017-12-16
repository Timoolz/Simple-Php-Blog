<?php

//var_dump($_POST);
$val_date       = isset($_POST['date']) ? $_POST['date']: "";
$val_user       = isset($_POST['user']) ? $_POST['user']: "";
$val_title      = isset($_POST['title']) ? $_POST['title']: "";
$val_content    = isset($_POST['content']) ? $_POST['content']: "";


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
  
    <body data-spy="scroll" data-offset="0" data-target="#nav">
  
  
  
  
      <section id="education" name="education"></section>
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">


				<div class="col-lg-6">
					<p><h4><?php echo $val_title; ?></h4><br/>
					<!--	<a target="_blank" href="http://www.covenantuniversity.edu.ng">Covenant University</a> <br/>-->
						<i><?php echo $val_date; ?></i>
					</p>
				</div>

                <div class="col-lg-11">
					<p><?php echo $val_content; ?></p>
				</div>

	
		</div><!--/.row -->
        
        
		<br>
		<hr>
	</div><!--/.container -->
  
  </body>
  
  
</html>