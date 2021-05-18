<h2>Book Issued </h2>
<div class="table-responsive">
  <table class="table" border="1">
	<tr style="background:#337ab7;color:#FFFFFF">
	  <th>Booking Id</th>
	  <th>Book Name</th>
	  <th>User Name</th>
	  <th>Book Issue Date</th>
	  <th style="color:red">Submission Date</th>
	</tr>
<?php 
$r="select * from booked_books";	
$select=$db->query($r);
$i=1;
while($result=mysqli_fetch_array($select))
{
$sel=$db->query("select * from books where id='".$result['book_id']."'");
$res=mysqli_fetch_array($sel);

$id=$result['book_name'];
	if($i%2==0)
	{
	echo "<tr class='success'>";
	echo "<td>".$result[0]."</td>";
	echo "<td>".$res['book_name']."</td>";
	echo "<td>".$result[2]."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	
	echo "</tr>";
	}
	else
	{
	echo "<tr class='active'>";
	echo "<td>".$result[0]."</td>";
	echo "<td>".$res['book_name']."</td>";
	echo "<td>".$result[2]."</td>";
	echo "<td>".$result[3]."</td>";
	echo "<td>".$result[4]."</td>";
	echo "</tr>";
	}
$i++;	
}	
?>	
	
  </table>
</div>