<?php
extract($_POST); 
if(isset($save))
{
$select=$db->query("select user_name from user where user_name='".$n."'");
if(mysqli_num_rows($select)>0)
{
$msg= "<font color='red'>User name $n already exists choose different name ! </font>";
}
else
{
$db->query("insert into user values('','$n','$e','$p',now(),'','','','')");

$msg= "<font color='blue'>New User Created !</font>";
}	
}	
?>

<div class="col-md-6">
	<form method="post">
<?php if(isset($msg)){?>
<div class="form-group" style="background:silver;padding:5px">
    <label for="name"><?php echo @$msg; ?></label>
</div>
<?php }?>

	
<div class="form-group">
    <label for="name">User name</label>
    <input type="text" class="form-control" name="n" id="name" placeholder="Name" value="<?php echo @$n; ?>" required pattern="[a-z A-Z]*">
  </div>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="e" id="email" placeholder="Email" value="<?php echo @$e; ?>" required>
  </div>
  
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" name="p" id="pass" placeholder="Password" value="<?php echo @$p; ?>" required>
  </div>

  <button type="submit" name="save" class="btn btn-default">Add New Counsellor </button>
</form>
</div>
		