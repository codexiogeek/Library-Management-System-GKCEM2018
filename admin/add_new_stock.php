<?php
extract($_POST); 
if(isset($save))
{
	$sel=$db->query("select * from stock where book_id='$book_id'");
	$r=mysqli_num_rows($sel);	
	if($r)
	{
	$msg= "<font color='red'>This book already exists !</font>";
	}
	else
	{
	$db->query("insert into stock values('','$book_id','$no_books')");	
	$msg= "<font color='blue'>New Stocks Added !</font>";
	}	
}
?>

<form method="post">

<div class="row">
<div class="col-md-8">
<?php if(isset($msg)){?>
<div class="form-group" style="background:silver;padding:5px;padding-left:15px;border-radius:5px">
    <label for="name"><?php echo @$msg; ?></label>
</div>
<?php }?>
</div>
</div>


<div class="row">

<div class="col-md-4">
<div class="form-group">
    <label for="name">Select Books</label>
    <select class="form-control" name="book_id">
	<?php
	$r=$db->query("select * from books");
	while($res=mysqli_fetch_array($r))
	{
	echo "<option value=$res[0]>".$res[1]."</option>";
	}
	?>
	</select>
  </div>
</div>  


<div class="col-md-4">
<div class="form-group">
    <label for="name">Number of Books</label>
    <select class="form-control" name="no_books">
	<?php
	for($i=1;$i<=50;$i++)
	{
	echo "<option>".$i."</option>";
	}
	?>
	</select>
  </div>
</div>  



<div class="col-md-4">
<div class="form-group">
    <label for="name"></label><br/>
  <button type="submit" name="save" class="btn btn-success">Add New Book </button>
  </div>
</div>  



</div>

</form>
		