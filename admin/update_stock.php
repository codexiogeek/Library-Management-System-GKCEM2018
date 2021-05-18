<?php
extract($_POST); 
extract($_GET);

$bid = $book_id;
$query=$db->query("select * from stock where id='$bid'");
$res1=mysqli_fetch_array($query); 
 
if(isset($update))
{

	$db->query("update stock set book_id='$book_name', total_books='$no_books' where id='$bid'");	
	$msg= "<font color='blue'>Book Stock updated !</font>";

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
    <select class="form-control" name="book_name">
	<?php
	$r=$db->query("select * from books");
	while($res=mysqli_fetch_array($r))
	{
	?>
	<option value="<?php echo $res[0]; ?>" <?php if($res1[1]==$res[1]){echo "selected";}?>><?php echo $res[1] ;?></option>
	<?php 
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
	?>
	<option <?php if($res1[2]==$i){echo "selected";}?>><?php echo $i ;?></option>
	<?php
	}
	?>
	</select>
  </div>
</div>  



<div class="col-md-4">
<div class="form-group">
    <label for="name"></label><br/>
  <button type="submit" name="update" class="btn btn-success">Update Book Stock </button>
  </div>
</div>  



</div>

</form>
		