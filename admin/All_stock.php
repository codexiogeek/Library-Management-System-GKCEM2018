<script>
	function delete_books(id)
	{
		if(confirm("You want to delete this books ?"))
		{
		window.location.href='delete_stock.php?book_id='+id;
		}
	}
</script>
<div class="table-responsive">
  <table class="table" border="1">
    <tr style="background:#337ab7">
		<td colspan="10"><a style="color:#fff;font-weight:bold" href="admin.php?option=add_new_stock" title="Click here add new Stock">Add Stock</a></td>
	</tr>
	<tr class="active">
	  <th>Sr.No</th>
	  <th>Book Name</th>
	  <th>No Of Books</th>
	  <th>Delete</th>
	  <th>Update</th>
	</tr>
<?php 
$r="select * from stock";	
$select=$db->query($r);
$i=1;
while($result=mysqli_fetch_array($select))
{
$id=$result['id'];
	if($i%2==0)
	{
	echo "<tr class='success'>";
	echo "<td>".$i."</td>";
$sel=$db->query("select * from books where id='".$result[1]."'");
$res=mysqli_fetch_array($sel);	
	echo "<td>".$res[1]."</td>";
	echo "<td>".$result[2]."</td>";
	echo "<td><a href='javascript:delete_books(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	
	echo "<td><a href='admin.php?option=update_stock&book_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
	echo "</tr>";
	}
	else
	{
	echo "<tr class='danger'>";
	echo "<td>".$i."</td>";
$sel=$db->query("select * from books where id='".$result[1]."'");
$res=mysqli_fetch_array($sel);
	
	echo "<td>".$res[1]."</td>";
	
	echo "<td>".$result[2]."</td>";
	echo "<td><a href='javascript:delete_books(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	echo "<td><a href='admin.php?option=update_stock&book_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>