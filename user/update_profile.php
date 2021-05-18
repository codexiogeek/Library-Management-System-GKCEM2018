 <?php 
 extract($_POST);
 if(isset($update))
 {
 	 $que=$db->query("update user set user_name='$n',mobile='$mob',branch='$branch',address='$add' where email='".$_SESSION['user']."'");
	
$err="<font color='blue'>Profile Updated Successfully</font>";
	 
 }
 
 //select 
  
  $que=$db->query("select * from user where email='".$_SESSION['user']."'");
$res =  mysqli_fetch_array($que);

 ?>

<div class="row">
<div class="col-sm-12">
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  	</div> 
  </div>
 </div> 


<div class="row">
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="n" value="<?php  echo $res[1]; ?>" required>
  </div> 
  </div>
  
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" readonly="readonly" value="<?php  echo $res[2]; ?>" >
  </div>
  </div>
 </div> 


  
<div class="row">
  
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="number" value="<?php  echo $res[4]; ?>" class="form-control" name="mob" >
  </div> 
  </div>
<div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">Branch</label>
  <select class="form-control" name="branch">
  <option>Select Your Branch</option>
  <?php 
 $que=$db->query("select * from branch");
while($res1 =  mysqli_fetch_array($que))
{?>
<option <?php if($res1[0]==$res[7]){echo "selected";} ?> value="<?php echo $res1[0];?>"><?php echo $res1[1];?></option>
<?php } 
  ?>
</select>
  </div> 
  </div>



</div>  
  

<div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Address</label>

   <textarea class="form-control" name="add"><?php echo $res['address'];?></textarea>
    </div> 
  </div>
</div>

<div class="row">
<div class="col-sm-4"> 
         <button name="update" class="btn btn-lg btn-success btn-block" type="submit">Update Profile</button>
</form>	
	</div>
	</div>
