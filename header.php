<?php
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Library Management</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">
	<style>
	body
	{
		background-color:#d8dde8;
	}	.navbar-default .navbar-nav>li>a {
    color: #FFF;
}.navbar-default .navbar-nav>li>a : hover{
    color: #777;}
	</style>


    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" style=" background-color:#284761; color:#fff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  style="font-size:22px;color: #fff"href="index.php">Library Management System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
       <li> 
                        <a href="index.php?option=about" style="color: #FFF;">About</a>
                    </li>
      
                    <li>
                        <a href="index.php?option=contact" style="color: #FFF;">Contact</a>
                    </li>
                </ul>
           
          <ul class="nav navbar-nav navbar-right">
     		<li><a href="#" style="color:#FFFFFF"></a></li>
	      	<li><a href="#" style="color:#FFFFFF"></a></li>

		<li><a href="#" data-toggle="modal" data-target="#log"style="color:#FFFFFF"><span class="glyphicon glyphicon-log-in"></span>&nbsp;SignIn</a></li>		<li><a  href="#" data-toggle="modal" data-target="#m" style="color:#FFFFFF"><span class="glyphicon glyphicon-log-out"></span>&nbsp;signUp</a></li>		
				
				
		
		
          </ul>
         
        </div>
      </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
