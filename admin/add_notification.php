<?php
$admin=$_SESSION['admin_email'];
extract($_POST);
 if(isset($send))
 {
$que=$db->query("insert into notification values('','$admin','$stu','$subj','$msg','',now())");
 $err="<font style='color:blue'>Notification Sent to student</font>";
 }
 ?>
 <div class="row">
<div class="col-sm-0">
</div>
<div class="col-sm-10">

<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title" style="color:#000;" align="center">Add Notification to Student</h3>
</div>
<div class="panel-body">

 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Select Student</label>
   <select class="form-control" name="stu" required>
  <option value="" selected="selected" disabled="disabled">Select Student</option>
 	<?php 
	$sql=$db->query("select * from user");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value=$r[email]>".$r['user_name']."</option>";
	}
	?>
</select>
  </div> 
<!-- supervisior end-->

<div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
   <input type="text" class="form-control" name="subj"  placeholder="Subject" required>
   
  </div> 

  
<div class="form-group">
    <label for="exampleInputEmail1">Notification</label>
   <textarea class="form-control" name="msg" rows="4" placeholder="Message" required></textarea>
  </div> 


<br/>
<div class="form-group">
    <button name="send" class="btn btn-lg btn-primary btn-block" type="submit">Add Notification</button>
</div>
	</form>	
		</div>
	</div>
</div>

	</div>		