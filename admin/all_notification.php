 <?php
// require('../config.php');
 extract($_POST);
 ?>
<div class="table-responsive">
  <table class="table">
	 <tr style="background:#337ab7;color:#FFFFFF">
	 	<th colspan="8"><a style="color:#FFFFFF" title="Add notification to Student" href="admin.php?option=add_notification"><span class=" glyphicon glyphicon-plus-sign" style="color:black"></span>Sent Notification to user</a></th>
	 </tr>
	   	
		<tr class="success">
		<th>Sr. No</th>
		<th>Student</th>
		<th>Subject</th>
		<th>Notification</th>
		<th>Date</th>
		<th>Delete</th>
		
		</tr>
<?php
	$que=$db->query("select * from  notification");
	$i=1;
	while($row= mysqli_fetch_array($que))
	{?>
	<tr  class="danger">
		<Td><?php echo $i;?></Td>
		<Td><?php echo $row[2];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[6];?></Td>
		

<td>
<?php 
$i++;
$email= $row[1];
$msgid= $row[0];
$to= $row[2];
?>
<?php echo "<a href='notification_Delete.php?msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a>";?>
</td>



	</tr>
	
	<?php } ?>
  </table>
  
