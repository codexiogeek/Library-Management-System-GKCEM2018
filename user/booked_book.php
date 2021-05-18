<?php 
extract($_POST);
extract($_GET);

$date=getdate();
$d=$date['mday'];
$m=$date['mon'];
$y=$date['year'];
$cDate1=$y."-".$m."-".$y;

if(isset($save))
{

	if($returndate<=$cDate1)
	{
	$msg= "<h5 style='color:red'>Return date must be after current date!</h5>";
	}
	else
	{
//echo $book_id;
$r2=$db->query("select * from booked_books where book_id='".$book_id."' and user_id='".$_SESSION['user']."'");	
$row2=mysqli_num_rows($r2);
	if($row2)
	{
	$msg= "<h5 style='color:red'>You have already issued this book !</h5>";
	}
	else
	{

$db->query("insert into booked_books values('','$book_id','".$_SESSION['user']."','$issuedate','$returndate')");


//decrease 1 book from stock
$r3=$db->query("select * from booked_books where book_id='".$book_id."' ");	
$row3=mysqli_num_rows($r3);
	if($row3>0)
	{
	$query1 = "UPDATE stock SET total_books = total_books - 1 WHERE book_id = '$book_id'";
$result1=$db->query($query1);

	}

$msg= "<h5 style='color:green'>Congrates this book is Successfully Issued !</h5>";
}
	}
}
?>


<?php 
extract($_GET);
$book_name;

if(isset($book_id))
{

$r1=$db->query("select * from books where id='".$book_id."' ");	
$res1=mysqli_fetch_array($r1);
//print_r($res1);

//current Date
$date=getdate();
$d=$date['mday'];
$m=$date['mon'];
$y=$date['year'];
$cDate=$y."-".$m."-".$d;




$r=$db->query("select * from stock where book_id='".$book_id."'");
$row=mysqli_fetch_array($r);
	if($row[2]<0)
	{
	echo "<font color='red'><h3>This book is out of stock Please Visit after some time !</font></h3>";
	}
	else
	{
	//$db->query("insert into booked_books");
	

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

<div class="col-md-8">
<div class="form-group">
    <label for="name">Book Issued Date</label>
    <input type="text" class="form-control" name="issuedate" placeholder="Issude date" value="<?php echo @$cDate; ?>" readonly="readonly">
  </div>
</div>


<div class="col-md-8">
<div class="form-group">
    <label for="name">Book Return Date</label>
    <input type="date" min="<?php echo $cDate1;?>" class="form-control" name="returndate" placeholder="dd-mm-yy" required>
  </div>
</div>


  <div class="col-md-6">
  <div class="form-group"><br />
  <button type="submit" name="save" class="btn btn-success">Issue</button>
  <button type="reset"  class="btn btn-success">Reset</button>
  <a href="index.php" class="btn btn-success">Cancel</a>
  
  </div>
  </div>

</form> 

<?php } }?>



