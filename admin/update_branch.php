<?php
extract($_GET);
$mid = $branch_id;
$query=$db->query("select * from branch where id='$mid'");
$result=mysqli_fetch_array($query);


extract($_POST); 
if(isset($update))
{
	$select=$db->query("update branch SET name='$un' where id='$mid'");
	$msg= "<font color='blue'>Brnach Updated !</font>";
	
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
    <input type="text" class="form-control" name="un" id="un" value="<?php echo $result['name'];?>" required pattern="[a-z A-Z]*">
  </div>
  <button type="submit" name="update" class="btn btn-default">Update Branch </button>
</form>
</div>
		