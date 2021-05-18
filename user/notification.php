 <?php
 extract($_POST);
 ?>
<div class="table-responsive">
  <table class="table">
   	<caption><h4 style="color:red" align="center">See Notification From admin</h4></caption>
	   	
		<tr class="success">
		<th>Sr. No</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
		</tr>
<?php
$que=$db->query("select * from  notification where user='".$_SESSION['user']."'");
$i=1;
while($row= mysqli_fetch_array($que))
	{
	?>
	<tr  class="danger">
		<Td><?php echo $i;?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[6];?></Td>

<td>
<?php 
$email= $row[1];
$msgid= $row[0];
$to= $row[2];
?>
<?php echo "<a href='delete_message.php?msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a></td>";?>

<?php //echo "<a href='index.php?option=reply&to=$email'><span class='glyphicon glyphicon-share-alt' style='color:black' aria-hidden='true'></span></a>";?>


	</tr>
	
	<?php $i++;} ?>
  </table>
  
