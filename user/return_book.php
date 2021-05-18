<?php 
extract($_POST);
extract($_GET);
if(isset($return))
{
$r2=$db->query("Delete  from booked_books where booked_id='".$booking_id."' and user_id='".$_SESSION['user']."'");	

//Increase 1 book in stock
$query1 = "UPDATE stock SET total_books = total_books + 1 WHERE book_id = '$book_id'";

$result1=$db->query($query1);

$msg= "<h5 style='color:green'>Congrates this book is Successfully Submitted !</h5>";

header("Refresh:2; url=index.php?option=search");
}
?>


<?php 
extract($_GET);
$r1=$db->query("select * from books where id='".$book_id."' ");	
$res1=mysqli_fetch_array($r1);

?>
<div class="col-md-8">
<form method="post">
	
	<div class="col-md-8">
<?php if(isset($msg)){?>
<div class="form-group" style="background:silver;padding:5px;padding-left:15px;border-radius:5px">
    <label for="name"><?php echo @$msg; ?></label>
</div>
<?php }?></div>


<div class="col-md-8">
<div class="form-group">
    <label for="name">Book name</label>
    <input type="text" class="form-control" name="book" placeholder="Book Name" value="<?php echo $res1[1]; ?>" readonly="readonly">
  </div>
</div>  

<div class="col-md-8">
<div class="form-group">
    <label for="name">Author name</label>
    <input type="text" class="form-control" name="author" placeholder="Author Name" value="<?php echo $res1[2]; ?>" readonly="readonly">
  </div>
</div>  

<div class="col-md-8">
<div class="form-group">
    <label for="name">Publisher Name</label>
    <input type="text" class="form-control" name="publisher" placeholder="Publisher Name" value="<?php echo $res1[3]; ?>"  readonly="readonly">
  </div>
</div>  


  <div class="col-md-6">
  <div class="form-group"><br />
  <button type="submit" name="return" class="btn btn-success">Return</button>
  <button type="reset"  class="btn btn-success">Reset</button>
  <a href="index.php" class="btn btn-success">Cancel</a>
  
  </div>
  </div>

</form> 



