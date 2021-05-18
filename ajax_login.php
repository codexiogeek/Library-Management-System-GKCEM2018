<?php
session_start();
include('db.php');
extract($_POST);
extract($_GET);
if(!empty($email_id))
{	
	if($user1==1)
	{
	$pass=md5($password);	
$r="select * from user where email='".$email_id."' and password='".$pass."'";
	
		$selecter=$db->query($r);
		if(mysqli_num_rows($selecter)>0)
		{		
		$_SESSION['user']=$email_id;
		echo "<script>window.location='user'</script>";	
		}
		else
		{
		echo "<p style='color:red'>Sorry you are wrong user!!!</p>";
		
		}
	}
	
	//for staff login
	if($user1==2)
	{
	$r="select * from admin where email='".$email_id."' and password='".$password."'";
	$select=$db->query($r);
	if(mysqli_num_rows($select)>0)
	{			
	$_SESSION['admin_email']=$email_id;
	echo "<script>window.location='admin/admin.php'</script>";
	}
	else
	{
	echo "<p style='color:red'>Sorry you are not authorised staff !</p>";
	}
	}
}

	
?>