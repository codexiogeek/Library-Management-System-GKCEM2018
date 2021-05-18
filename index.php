<?php
session_start();
include('header.php');
include('db.php');	

?>

<style>.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid #F2F3F3;
   }

*{margin:0px}
#searchbox
{
}
#display
{
width:250px;
display:none;
float:right; margin-right:60px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
}
.display_box
{
color:#222;
border-top:solid 1px #dedede; 
font-size:12px; 
height:30px;
overflow:hidden;
}
.display_box:hover
{
background-color:#284761;
color:#FFF;
}
</style>
	<!-- Page Content -->
    
	<!--slider -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
			
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/1.jpg" alt="university">
      </div>

      <div class="item">
        <img src="img/2.jpg">
      </div>
    
      <div class="item">
        <img src="img/3.jpg" >
      </div>

      <div class="item">
        <img src="img/4.jpg" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  
</div>
			
			</div>
		</div>
	</div>		

<!--slider -->

<br/>	
	<div class="container">

<!-- about and contact page -->
    <?php 
	$opt =	$_GET['option'];
	if($opt=="about")
	{
	include('about.php');
	}
	else if($opt=="contact")
	{
	include('contact.php');
	}
	else
	{
	?>


    


        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-4">
			
			
			 <!-- Blog Categories Well -->
                <div class="well">
				<div class="panel panel-heading" style="background-color:#284761; color:#fff;">
						  <h4 align="center">Features</h4>
					</div>
 
                    <div class="row">
                        <div class="col-lg-8" style="width:99%">
                           <ul class="list-unstyled nav nav-sidebar">
						   <li class="active"><a href=""> -> Admin Login</a></li>
							<li><a href=""> -> Insert/Update/Display/Delete Book</a></li>
							<li><a href=""> -> Manage Students</a></li>
							<li><a href=""> -> Student Registraion</a></li>
							<li><a href=""> -> Student Login</a></li>
							<li><a href=""> -> Booked Book</a></li>
							<li><a href=""> -> Return Booked Book</a></li>
			              
						  </ul><br/>
                        </div>
                    
                    </div>
                    <!-- /.row -->
                </div>
				
				

	

<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    	<div class="modal-content">
    
	
	  	<div class="modal-header" style=" background-color:#284761;   color:#fff;">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel" ><span class="glyphicon glyphicon-log-in"style=" background-color:#284761; margin-left:180px; color:#fff;">&nbsp;Login</h4>
      	</div>
      	<div class="modal-body">
	  
			<div class="alert alert-success" id="err" role="alert"></div>  
	  
	  		<form action="#" method="post">
			<div class="form-group">
				<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email"  id="email" placeholder="Email"/>
	</div>
	</div>
	
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"/>
					
		</div>
		</div>
		
		<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-user"></span></span>
							
	 <select class="form-control" name="user1"  id="user1">
	 	<option value="">Select User type</option>
		<option value="1">User(Student)</option>
		<option value="2">Staff(admin)</option>
	 </select>
					
		</div>
		</div>
	  
	  
      
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" id="save1"  value="Login" name="login" />
		<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
	</div>
</form>
</div>   </div>
   		<script src="jquery-1.11.2.min.js"></script>
   <script>
  
   </script>
<script>

$(document).ready(function()
{	
	$("#err").hide();
	$("#save1").click(function()
	{		
	var email1 =$('#email').val();
	var pass1 =$('#pass').val();
	var user1 =$('#user1').val();				
	var dataString = 'email_id='+ email1+'&password='+pass1+'&user1='+user1  ;
	
	if(email1== '' )
	{	
		$("#err").show();
		$("#err").hide().slideDown();
		setTimeout(function(){
		$("#err").hide();        
		}, 3000);
		
 		$("#err").html("please enter email ");
	} 
	else if(pass1=='')
	{
	$("#err").show();
	$("#err").hide().slideDown();
	setTimeout(function(){
	$("#err").hide();        
			  }, 3000);
			  
 	$("#err").html("please enter password");
	}
	else if(user1=='')
	{
	$("#err").show();
	$("#err").hide().slideDown();
	setTimeout(function(){
	$("#err").hide();        
			  }, 3000);
			  
 	$("#err").html("please select user type");
	}
	else
	{
	$.ajax({
	type: "POST",
	url: "ajax_login.php",
	data: dataString,
	cache: false,
	success: function(result){
	$("#err").show(300);
	$('#err').html(result);
	$("#err").hide().slideDown();
	setTimeout(function(){
				  	$("#err").hide();        
			  }, 3000);
	
	}
	});
	}
return false;
			
	});
	
});
</script>

   
    </div>
  </div>
</div>
	
	<div class="col-md-8">	
	<?php include('include_category.php');?>
    </div>

    </div>
<!-- /row -->
    		<?php } ?>
	</div>
    <!-- /.container -->
	 	<!--------start modal fpr registration------------>
   
   		<?php include('registration.php');?>

    <script src="jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	
	$(document).ready(function(){
					$("#err1").hide();
			$("#save").click(function(){
		
					var user =$('#user').val();
					var email =$('#email12').val();
					var pass =$('#pass123').val();

	var dataString = 'user='+ user + '&email='+ email+'&pass='+pass  ;
//alert(dataString);
	if(email==''||pass==''||user=='')
   {
   		$("#err1").show();
	
  
    	$("#err1").html(" enter the  details before submit ");
	}
	else
	{

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "msg_ajax.php",
	data: dataString,
	cache: false,
	success: function(result){
	//	$("#err").show();
	$('#err1').html(result);
	$("#err1").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err1").hide();        
			  }, 3000);
			
	}
	});
	}
return false;
		
		
		});
	
	});
	
	</script>
 
	<script src="ajax_insert.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
	  <script src="assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	
</body>

</html>
