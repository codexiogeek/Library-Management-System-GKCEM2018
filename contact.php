<div class="row">
		 <div class="col-lg-4">
                <div class="well">
				<div class="panel panel-heading">


		 	<h2>Contact me</h2><br/>
			<p>Name  : Sumit Biswas</p><br/>
			<p>Email : sumitbiswas17@gmail.com</p><br/>
			<p>Mobile: 9831212137</p><br/>
			<p>Greater Kolkata College of Engineering & Management</p><br/>
			
		 </div>
		 </div>
		 </div>
		 
		
		<!-- right sidebar-->
		 <div class="col-lg-8">
         	<div class="well">
				<div class="panel panel-heading">


<form method="post">
<?php if(isset($msg)){?>
<div class="form-group" style="background:silver;padding:5px">
    <label for="name"><?php echo $msg; ?></label>
</div>
<?php }?>

	
	<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="n" id="name" placeholder="Enter Your Name" required >
  </div>
  
  <div class="form-group">
    <label for="name">Email</label>
    <input type="email" class="form-control" name="n" id="name" placeholder="Enter Your email" required >
  </div>
  
  <div class="form-group">
    <label for="name">Mobile</label>
    <input type="number" class="form-control" name="n" id="name" placeholder="Enter Your mobile" required >
  </div>
  
   <div class="form-group">
    <label for="name">Query</label>
    <textarea class="form-control" required ></textarea>
  </div>
  
 
  <button type="submit" name="save" class="btn btn-success">Send Query </button>
</form>

					
		 		</div>
		 	</div>
		 </div>
				 
</div>