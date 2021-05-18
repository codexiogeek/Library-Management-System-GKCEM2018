<?php
extract($_GET);
$mid = $student_id;
$query=$db->query("select * from user where id='$mid'");
$result=mysqli_fetch_array($query);


extract($_POST); 
if(isset($update))
{
	$select=$db->query("update user SET user_name='$un',email='$e',password='$p' where id='$mid'");
	$msg= "<font color='blue'>Records Updated !</font>";
	
}	
?>

<div class="col-md-6">
	<form method="post">
<?php if(isset($msg)){?>
<div class="form-group" style="background:silver;padding:5px">
    <label for="name"><?php echo $msg; ?></label>
</div>
<?php }?>

	
<div class="form-group">
    <label for="name">User Name</label>
    <input type="text" class="form-control" name="un" id="un" value="<?php echo $result['user_name'];?>" required pattern="[a-z A-Z]*">
  </div>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" value="<?php echo $result['email'];?>" class="form-control" name="e" id="e" placeholder="Email" required>
  </div>
  
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="text" value="<?php echo $result['password'];?>"  class="form-control" name="p" id="pass" required>
  </div>

  <button type="submit" name="update" class="btn btn-default">Update Details </button>
</form>
</div>
		