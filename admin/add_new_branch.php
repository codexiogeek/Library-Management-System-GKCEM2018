<?php
extract($_POST); 
if(isset($save))
{
	$select=$db->query("insert into branch(name) values('$n')");
	$msg= "<font color='blue'>New Branch Added Successfully ! </font>";
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
    <label for="name">Branch Name</label>
    <input type="text" class="form-control" name="n" id="name" placeholder="Enter Brach Name" required >
  </div>
  
 
  <button type="submit" name="save" class="btn btn-default">Add New Branch </button>
</form>
</div>
		