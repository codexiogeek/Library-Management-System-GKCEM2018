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
    <input type="text" class="form-control" name="bname" placeholder="Book Name" value="<?php echo @$n; ?>" required >
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
	  <th>Name</th>
	  <th>Author</th>
	  <th>Publisher</th>
	  <th>Price</th>
	  <th>Publish Year</th>
	  <th>Purchase Date</th>
	  <th>Category</th>
	  <th>Delete</th>
	  <th>Update</th>
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
	echo "<td><a href='javascript:delete_books(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	echo "<td><a href='admin.php?option=update_books&book_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
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
	echo "<td><a href='javascript:delete_books(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	echo "<td><a href='admin.php?option=update_books&book_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>

<?php } }?>