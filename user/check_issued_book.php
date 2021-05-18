<div class="table-responsive">
  <table class="table" border="1">
	<tr style="background:#337ab7;color:#FFFFFF">
	  <th>Booking Id</th>
	  <th>Book Name</th>
	  <th>Booking Date</th>
	  <th style="color:red">Submission Date</th>
	  <th>Submit Book</th>
	</tr>
<?php 
$r="select * from booked_books where user_id='".$_SESSION['user']."'";	
$select=$db->query($r);
$i=1;
while($result=mysqli_fetch_array($select))
{

$q1=$db->query("select * from books where id='".$result['book_id']."'");
$ress=mysqli_fetch_array($q1);
$bookid=$ress['id'];




$id=$result['booked_id'];
	if($i%2==0)
	{
	echo "<tr class='success'>";
	echo "<td>".$result[0]."</td>";
	echo "<td>".$ress['book_name']."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	echo "<td><a href='index.php?option=return_book&booking_id=$id&book_id=$bookid'>Return Book </a></td>";
	echo "</tr>";
	}
	else
	{
	echo "<tr class='active'>";
	echo "<td>".$result[0]."</td>";
	echo "<td>".$ress['book_name']."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	echo "<td><a href='index.php?option=return_book&booking_id=$id&book_id=$bookid'>Return Book </a></td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>