<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>User  dashboard</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">


<script src="../editor.js"></script>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="../editor.css" type="text/css" rel="stylesheet"/>


		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
				<script src="../jquery-1.11.2.min.js"></script>

	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background:#337ab7;color:#FFFFFF">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			<?php 
			$sql=$db->query("select * from user where email='".$_SESSION['user']."'");
			$res=mysqli_fetch_array($sql);
			
			?>
            <a class="navbar-brand" href="#">Hello ! <?php echo $res['user_name']; ?> </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i>
					 <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="index.php?option=update_password">Update Password</a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            

            <ul  class="nav nav-stacked">
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="index.php"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a></li>
					<li><a href="index.php?option=search"><i class="glyphicon glyphicon-search"></i> &nbsp; Search Book</a></li>
												
						<li><a href="index.php?option=check_issued_book"><i class="glyphicon glyphicon-book"></i> &nbsp; Book Issued </a></li>
		
<li><a href="index.php?option=notification"><i class="glyphicon glyphicon-user" ></i> &nbsp; Notification </a></li>
							
 <li><a href="index.php?option=update_profile"><i class="glyphicon glyphicon-wrench" ></i> &nbsp; Update Profile </a></li>
 <li><a href="index.php?option=update_password"><i class="glyphicon glyphicon-lock" ></i> &nbsp; Update Password </a></li>

         
        </div>
        <!-- /col-3 -->
        <div class="col-sm-10">

            <!-- column 2 -->
            
