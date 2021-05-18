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
    <label for="name"></label>
    <input type="text" class="form-control" name="bname" placeholder="Enter Book Name" value="<?php echo @$n; ?>" required >
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group"><br />
  <button type="submit" name="save" class="btn btn-success">Search Books</button>
  </div>
  </div>
</div>
</form> 
 
<?php 
extract($_POST);
if(isset($save))
{
$r="select * from books where book_name like '%$bname%'";	
$sel=$db->query($r);
$row=mysqli_num_rows($sel);
	if(!$row)
	{
	echo "<font color='red'>No any books found !</font>";
	}
	else{

?>
 

<div class="table-responsive">
  <table class="table" border="1">
	<tr style="background:#337ab7;color:#FFFFFF">
	  <th>Sr.No</th>
	  <th>Book Name</th>
	  <th>Author</th>
	  <th>Publisher</th>
	  <th>Price</th>
	  <th>Publish Year</th>
	  <th>Purchase Date</th>
	  <th>Category</th>
	  <th>Want to Book ?</th>
	</tr>
<?php 
$r="select * from books where book_name like '%$bname%'";	
$select=$db->query($r);
$i=1;
while($result=mysqli_fetch_array($select))
{
$id=$result['id'];
	if($i%2==0)
	{
	echo "<tr class='success'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result[1]."</td>";
	echo "<td>".$result[2]."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	echo "<td>".$result[5]."</td>";
	echo "<td>".$result[6]."</td>";
	echo "<td>".$result[7]."</td>";
	echo "<td><a href='index.php?option=booked_book&book_id=$id'>Want to book ?</a></td>";
	echo "</tr>";
	}
	else
	{
	echo "<tr class='danger'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result[1]."</td>";
	echo "<td>".$result[2]."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	echo "<td>".$result[5]."</td>";
	echo "<td>".$result[6]."</td>";
	echo "<td>".$result[7]."</td>";
	echo "<td><a href='index.php?option=booked_book&book_id=$id'>Want to book ?</a></td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>

<?php } }?>

<hr/>


<!-- display by category-->
<form method="post">
<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name"></label>
    <select class="form-control" name="book_category" required >
		<option value="">Select Books Category</option>
		<?php 
		
$cat=$db->query("select * from category ");
while($res=mysqli_fetch_array($cat))
{
echo "<option value='".$res['id']."'>".$res['name']."</option>";
}
		?>
	</select>
  </div>
</div>  
  <div class="col-md-6">
  <div class="form-group"><br />
  <button type="submit" name="disp_category" class="btn btn-success">Search Books</button>
  </div>
  </div>
</div>
</form> 

<?php 
if(isset($disp_category))
{
$r="select * from books where category='".$book_category."'";	
$sel=$db->query($r);
$row=mysqli_num_rows($sel);
	if(!$row)
	{
	echo "<font color='red'>No any books found !</font>";
	}
	else{

?>
 
 
 
 
<script>
	function delete_books(id)
	{
		if(confirm("You want to delete this books ?"))
		{
		window.location.href='delete_books.php?book_id='+id;
		}
	}
</script>
<div class="table-responsive">
  <table class="table" border="1">
	<tr style="background:#337ab7;color:#FFFFFF">
	  <th>Sr.No</th>
	  <th>Book Name</th>
	  <th>Author</th>
	  <th>Publisher</th>
	  <th>Price</th>
	  <th>Publish Year</th>
	  <th>Purchase Date</th>
	  <th>Category</th>
	  <th>Issue</th>
	</tr>
<?php 
$r="select * from books where category='".$book_category."'";	
$select=$db->query($r);
$i=1;
while($result=mysqli_fetch_array($select))
{
$id=$result['id'];
	if($i%2==0)
	{
	echo "<tr class='success'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result[1]."</td>";
	echo "<td>".$result[2]."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	echo "<td>".$result[5]."</td>";
	echo "<td>".$result[6]."</td>";
	echo "<td>".$result[7]."</td>";
	echo "<td><a href='index.php?option=booked_book&book_id=$id'>Want to book ?</a></td>";
	echo "</tr>";
	}
	else
	{
	echo "<tr class='danger'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result[1]."</td>";
	echo "<td>".$result[2]."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	echo "<td>".$result[5]."</td>";
	echo "<td>".$result[6]."</td>";
	echo "<td>".$result[7]."</td>";
	echo "<td><a href='index.php?option=booked_book&book_id=$id'>Want to book ?</a></td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>

<?php } }?>
