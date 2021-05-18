<script>
	function delete_student(id)
	{
		if(confirm("You want to delete this memeber ?"))
		{
		window.location.href='delete_student.php?student_id='+id;
		}
	}
</script>
<div class="table-responsive">
  <table class="table" border="1">
    <tr style="background:#337ab7">
		<td colspan="6"><a style="color:#fff;font-weight:bold" href="admin.php?option=add_student">Add New Student</a></td>
	</tr>
	<tr class="success">
	  <th>Sr.No</th>
	  <th>Name</th>
	  <th>Email</th>
	  <th>Password</th>
	  <th>Delete</th>
	  <th>Update</th>
	</tr>
<?php 
$r="select * from user";	
$select=$db->query($r);
$i=1;
while($result=mysqli_fetch_array($select))
{
$id=$result['id'];
	if($i%2==0)
	{
	echo "<tr class='danger'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result['user_name']."</td>";
	echo "<td>".$result['email']."</td>";
	echo "<td>".$result['password']."</td>";
	echo "<td><a href='javascript:delete_student(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	echo "<td><a href='admin.php?option=update_student&student_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
	echo "</tr>";
	}
	else
	{
	echo "<tr class='active'>";
	echo "<td>".$i."</td>";
	echo "<td>".$result['user_name']."</td>";
	echo "<td>".$result['email']."</td>";
	echo "<td>".$result['password']."</td>";
	echo "<td><a href='javascript:delete_student(".$id.")'><span class='glyphicon glyphicon-trash' style='color:red'></span></a></td>";
	echo "<td><a href='admin.php?option=update_student&student_id=$id'><span class='glyphicon glyphicon-edit' style='color:green'></span></a></td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>