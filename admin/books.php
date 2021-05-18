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
    <tr style="background:#337ab7">
		<td colspan="10"><a style="color:#fff;font-weight:bold" href="admin.php?option=add_new_books" title="Click here to add new book">Add New Books</a></td>
	</tr>
	<tr class="active">
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
$r="select * from books";	
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