<?php
extract($_POST);
extract($_GET);
$bid = $book_id;
$query=$db->query("select * from books where id='$bid'");
$result=mysqli_fetch_array($query);


if(isset($save))
{
	$db->query("update books SET book_name='$bname',author_name='$aname',publishers_name='$pname',book_cost='$cost',publication_year='$pub_date',book_purchasing_date='$p_date',category='$category' where id='$bid'");
	
	$msg= "<font color='blue'>Books Updated !</font>";

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
    <input type="text" class="form-control" name="bname" placeholder="Book Name" value="<?php echo $result[1]; ?>" required >
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group">
    <label for="email">Enter Author Name</label>
    <input type="text" class="form-control" placeholder="author name" value="<?php echo $result[2]; ?>" name="aname" required>
  </div>
  </div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Enter Publisher name</label>
    <input type="text" class="form-control" name="pname" placeholder="Publisher Name" value="<?php echo $result[3]; ?>" >
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group">
    <label for="email">Enter Book Cost</label>
    <input type="text" class="form-control" name="cost" placeholder="Book Cost" value="<?php echo $result[4]; ?>" >
  </div>
  </div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Select Publication Year</label>
    <input type="date" class="form-control" name="pub_date" placeholder="Year" value="<?php echo $result[5]; ?>">
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group">
    <label for="email">Enter Purchasing Date</label>
    <input type="text" class="form-control" name="p_date" placeholder="yy/dd/mm" value="<?php echo $result[6]; ?>">
  </div>
  </div>
</div>


<?php //echo $result[7]; ?>

<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Choose Category</label>
    <select class="form-control" name="category">
	<?php
	$r=$db->query("select * from category");
	while($res=mysqli_fetch_array($r))
	{
	?>
	<option value="<?php echo $res[0]; ?>" <?php if($result[7]==$res[0]){echo "selected";} ?>>
	<?php echo $res[1]; ?></option>
	<?php 
	}
	?>
	</select>
  </div>
</div>  



<div class="col-md-6">
<div class="form-group">
    <label for="name"></label><br/>
  <button type="submit" name="save" class="btn btn-success">Update Books </button>
  </div>
</div>  



</div>

</form>
		