<?php session_start();
include('db.php');

extract($_GET);
extract($_POST);
			if(isset($topic_id))
			{
			
		
		$sel="insert into topic    value('','$t_title','$t_describe','".$_SESSION['user']."','".$topic_id."',Now())";
				
				$insert=$db->query($sel);
				echo "insert your topic";
				echo "<script>window.location='topic.php?Topic_id=".$topic_id."';alert('your data is successfully upload');</script>";
			//	echo $_SESSION['page'];
		}
		if(isset($Topic_id))
		{
				$sel="select * from topic where topic_id='$Topic_id'";
				$insert=$db->query($sel);
				
				$rows=mysqli_fetch_array($insert);
				//echo $rows['category_id'];
		$sel1="insert into post   values('','$Topic_id','".$rows['category_id']."','".$_SESSION['user']."','0','$t_describe',Now())";
				
				//echo $Topic_id;
				$insert1=$db->query($sel1);
				
				if($insert1==true)
				{
				
				echo "insert your comment";
					?>
					<script>
					
					alert(<h2>+"your data is successfully upload"+</h2>);
					</script>
					<?php
					
				echo "<script> 
						
								alert('ok');
								window.location='post.php?topic_id=".$Topic_id."';
					</script>";
					
					
			}else{
			echo "not inserted";
			}
			//	
		
		}
?>
