<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin  dashboard</title>
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
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background:#337ab7">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i><?php
					
					$email=$_SESSION['admin_email'];
					 $l="select * from admin where email='$email' ";
					
						$select=$db->query($l);
							$rows=mysqli_fetch_assoc($select);
							// $_SESSION['user']=$rows['user_name'];	
							 // $user = $_SESSION['user'];
						echo $rows['user_name'];
							// echo  $user;
						 //echo $rows['user_name'];
									
					?> <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="admin.php?option=update_profile">My Profile</a></li>
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
                        <li class="active"> <a href="admin.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
						
						
	<li><a href="admin.php?option=category"> <i  class="glyphicon glyphicon-cog
glyphicon glyphicon-"></i> Books Category</a></li>
	<li><a href="admin.php?option=books" id='msg' ><i  class="glyphicon glyphicon-education"> </i> &nbsp;  Books</a></li>				
    <li><a href="admin.php?option=stock" id='msg' ><i  class="glyphicon glyphicon-wrench"> </i> &nbsp; Book Stock</a></li>
	<li><a href="admin.php?option=student" id='msg' ><i  class="glyphicon glyphicon-user"></i> &nbsp;User</a></li>
	<li><a href="admin.php?option=search"><i class="glyphicon glyphicon-search"></i> Search Books</a></li>
	<li><a href="admin.php?option=booked_book"><i class="glyphicon glyphicon-asterisk"></i> &nbsp;Check Allocated Book</a></li>
<li><a href="admin.php?option=all_notification"><i class="glyphicon glyphicon-star"></i> &nbsp; Send Notification to user</a></li>
							
                        
         
        </div>
        <!-- /col-3 -->
        <div class="col-sm-10">

            <!-- column 2 -->
            
