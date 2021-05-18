<?php
extract($_POST); 
if(isset($save))
{
	$select=$db->query("select book_name from books where book_name='".$bname."'");
	
	if(mysqli_num_rows($select)>0)
	{
	$msg= "<font color='red'>This book already exists choose different! </font>";
	}
	else
	{
	$db->query("insert into books values('','$bname','$aname','$pname','$cost','$pub_date','$p_date','$category')");
	
	$msg= "<font color='blue'>New Books Added !</font>";
	}	
}	
?>

<div class="col-md-10">
	<form method="post">
<?php if(isset($msg)){?>
<div class="form-group" style="background:silver;padding:5px;padding-left:15px;border-radius:5px">
    <label for="name"><?php echo @$msg; ?></label>
</div>
<?php }?>


<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Enter book name</label>
    <input type="text" class="form-control" name="bname" placeholder="Book Name" value="<?php echo @$n; ?>" required >
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group">
    <label for="email">Enter Author Name</label>
    <input type="text" class="form-control" placeholder="author name" value="<?php echo @$e; ?>" name="aname" required>
  </div>
  </div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Enter Publisher name</label>
    <input type="text" class="form-control" name="pname" placeholder="Publisher Name" value="<?php echo @$n; ?>" required >
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group">
    <label for="email">Enter Book Cost</label>
    <input type="text" class="form-control" name="cost" placeholder="Book Cost" value="<?php echo @$e; ?>" required>
  </div>
  </div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Select Publication Year</label>
    <input type="date" class="form-control" name="pub_date" placeholder="Year" value="<?php echo @$n; ?>" required >
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group">
    <label for="email">Enter Purchasing Date</label>
    <input type="text" class="form-control" name="p_date" placeholder="yy/dd/mm" value="<?php echo @$e; ?>" required>
  </div>
  </div>
</div>



<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Choose Category</label>
    <select class="form-control" name="category">
	<?php
	$r=$db->query("select * from category");
	while($res=mysqli_fetch_array($r))
	{
	echo "<option value='".$res[0]."'>".$res[1]."</option>";
	}
	?>
	</select>
  </div>
</div>  



<div class="col-md-6">
<div class="form-group">
    <label for="name"></label><br/>
  <button type="submit" name="save" class="btn btn-success">Add New Book </button>
  </div>
</div>  



</div>

</form>
		