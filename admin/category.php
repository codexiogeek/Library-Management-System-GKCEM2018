<script>
	function delete_course(id)
	{
		if(confirm("You want to delete this memeber ?"))
		{
		window.location.href='delete_category.php?cat_id='+id;
		}
	}
</script>
<div class="table-responsive">
  <table class="table" border="1">
    <tr style="background:#337ab7;">
		<td colspan="4"><a style="color:#FFFFFF" href="admin.php?option=add_new_category" title="Click here to add new Book Category">Add New Category</a></td>
	</tr>
	<tr  class="success">
	  <th>Sr.No</th>
	  <th>Category</th>
	  <th>Delete</th>
	  <th>Update</th>
	</tr>
<?php 
$r="select * from category";	
$select=$db->query($r);
$i=1;
while($result=mysqli_fetch_array($select))
{
$id=$result['id'];
	if($i%2==0)
	{
	echo "<tr class='active'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result['name']."</td>";
	echo "<td><a href='javascript:delete_course(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	echo "<td><a href='admin.php?option=update_category&cat_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
	echo "</tr>";
	}
	else
	{
	echo "<tr class='danger'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result['name']."</td>";
	echo "<td><a href='javascript:delete_course(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	echo "<td><a href='admin.php?option=update_category&cat_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>