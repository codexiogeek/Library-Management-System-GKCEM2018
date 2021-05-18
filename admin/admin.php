<?php
session_start();
error_reporting(1);
include('../db.php');
if($_SESSION['admin_email']==false)
{
header('location:index.php');
}
include('admin_header.php');

?>
	
	<div class="row">
		<!-- center left-->
		<div class="col-md-12">
		<?php	
		
		$option=$_REQUEST['option'];		
		
	
		if($option=="")
		{
		//count total books
		$s=$db->query("select * from books");
		$r=mysqli_num_rows($s);
		echo "<h3 style='color:green'>Total Number of books : ".$r." </h3>";
		
		//count total students
		$s1=$db->query("select * from user");
		$r1=mysqli_num_rows($s1);
		echo "<h3 style='color:red'>Total Registered Students : ".$r1." </h3>";
		
		}
		
		//Mange Your Branch
		if($option=='branch')
		{
		include('branch.php');
		}
		if($option=='add_new_branch')
		{
		include('add_new_branch.php');
		}
		if($option=='update_branch')
		{
		include('update_branch.php');
		}
		//Branch ends
		
		
		//manage category
		if($option=='category')
		{
		include('category.php');
		}
		if($option=='add_new_category')
		{
		include('add_new_category.php');
		}
		if($option=='update_category')
		{
		include('update_category.php');
		}
		//end category
		
		
		
		//Books 
		if($option=='books')
		{
		include('books.php');
		}
		if($option=='add_new_books')
		{
		include('add_new_books.php');
		}
		if($option=='update_books')
		{
		include('update_books.php');
		}
		
		if($option=='booked_book')
		{
		include('book_booked.php');
		}
		//end books
		
		//stock Management
		if($option=='stock')
		{
		include('All_stock.php');
		}
		if($option=='add_new_stock')
		{
		include('add_new_stock.php');
		}
		if($option=='update_stock')
		{
		include('update_stock.php');
		}

		//stock end
		
		
		//search
		if($option=='search')
		{
		include('search.php');
		}
		//end search
		
		
		
		//Student
		if($option=='student')
		{
		include('student.php');
		}
		if($option=='add_student')
		{
		include('add_student.php');
		}
		
		if($option=='update_student')
		{
		include('update_student.php');
		}
		//ends student
		
		//for admin profile
		
		if($option=='update_profile')
		{
		include('update_profile.php');
		}
		//ends admin profile
		
		//Notification
		if($option=='all_notification')
		{
		include('all_notification.php');
		}
		if($option=='add_notification')
		{
		include('add_notification.php');
		}
		//end notification
		
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
<?php //include('admin_pic.php');?>
<!-- /.modal -->
	<!-- script references -->
		<script src="../jquery-1.11.2.min.js"></script>
		
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>