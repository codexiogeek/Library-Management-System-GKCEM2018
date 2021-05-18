<?php
extract($_POST); 
if(isset($update))
{
	$select=$db->query("select * from user where email='".$_SESSION['user']."' ");
	
	$res=mysqli_fetch_array($select);
	if($res['password']==$op)
	{
		if($np!=$cp)
		{
		$msg="<font color='red'>New Password must be equal to confirm Password !</font>";
		}
		else
		{
		$db->query("update user SET password='$np' where email='".$_SESSION['user']."'");
		$msg="<font color='green'>Password Updated !</font>";
		}
	}
	else
	{
	$msg="<font color='red'>Old Password not matched !</font>";
	}
}	
?>

<div class="col-md-6">

<form method="post">
<?php if(isset($msg)){?>
<div class="form-group" style="border-radius:5px;background:#F9F9F9;padding:5px">
    <label for="name"><?php echo $msg; ?></label>
</div>
<?php }?>
	
	
	
<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-user"></span></span>
							
	 <input type="text" readonly="readonly" class="form-control"  placeholder="<?php echo $_SESSION['user'];?>"/>
	</div>  
   </div>
  
  <div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="op" placeholder="Old Password"/>
	</div>  
   </div>
   
  <div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="np" placeholder="New Password"/>
	</div>  
   </div>


<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="cp" placeholder="Confirm Password"/>
	</div>  
   </div>   
   
 
  <button type="submit" name="update" class="btn btn-success">Update Password</button>
</form>
</div>
		