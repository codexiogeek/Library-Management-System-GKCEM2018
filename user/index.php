<?php
session_start();
error_reporting(1);
include('../db.php');
if($_SESSION['user']=="")
{
?>
<script>
window.location='../index.php';
</script>
<?php 
//header('location:../index.php');
}
include('header.php');

?>
	<div class="row">
		<!-- center left-->
		<div class="col-md-12">
		<?php	
		
		$option=$_REQUEST['option'];		
		
	
		if($option=="")
		{
		//count total books
		$s=$db->query("select * from booked_books where user_id='".$_SESSION['user']."'");
		$r=mysqli_num_rows($s);
echo "<h3 style='color:green'>Total Number of books booked by You : ".$r." </h3>";
	echo "<h4><a href='index.php?option=check_issued_book'>Click here to Check all booking history</a></h2>"	;
		
		
		}
		
		
		//search
		if($option=='search')
		{
		include('search.php');
		}
		
		if($option=='booked_book')
		{
		include('booked_book.php');
		}
		
		if($option=='check_issued_book')
		{
		include('check_issued_book.php');
		}
		
		if($option=='return_book')
		{
		include('return_book.php');
		}
		
		
		//update  password
		
		if($option=='update_password')
		{
		include('update_password.php');
		}
		if($option=='update_profile')
		{
		include('update_profile.php');
		}
		if($option=='notification')
		{
		include('notification.php');
		}
		
		//ends admin profile
		
		?>
			
		</div>
        </div>
        <!--/row-->

           
            </div>
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->
<?php include('admin_pic.php');?>
<!-- /.modal -->
	<!-- script references -->
		<script src="../jquery-1.11.2.min.js"></script>
		
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>