<?php session_start();
include('../db.php');
extract($_POST);
extract($_GET);
if(!empty($email_id))
{	
//echo $email_id;
	$r="select * from admin where email='".$email_id."' and password='".$password."'";
	$select=$db->query($r);
	if(mysqli_num_rows($select)>0)
	{			
	$_SESSION['admin_email']=$email_id;
	echo "<script>window.location='admin.php'</script>";
	}
	else
	{
		echo "sorry you are not a Amin !";
	}
}
?>