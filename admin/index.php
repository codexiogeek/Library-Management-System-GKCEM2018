<?php
include('header.php');
error_reporting(1);		
if($_SESSION['admin_email']==true)
{
header('location:admin.php');
}
			
			
?>


<div class="container" style="margin-top:50px;" >
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		<div class="alert alert-success" id="err" role="alert"></div>
		<div class="panel panel-default" >
			<div class="panel panel-heading" style=" background-color:#284761; color:#fff; height:50px;">
			<h4 style="margin-left:120px;"><span class="glyphicon glyphicon-user">&nbsp;LOGIN
			</h4>
			</div>				
			<div class="panel panel-body">
				
		<form actino="#" method="post">
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email"  id="email" placeholder="Email"/>
	</div>
	<br/>
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"/>
	</div>
	
  
   </div>
		
		<div class="controls controls-row">

	   <!--<form method="POST" >-->
		
		<div class="controls controls-row">
		

  
  
 <div class="controls controls-group">      </div></div>
	  <div class="modal-footer">
	
<center>
	  <input type="submit" class="btn btn-primary" id="save1"  value="Login as Admin" name="login" />
    </form>    

</center>
		</div>
		
	</div>
	
		
</div>		
 <script src="../jquery-1.11.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>	

<script>
$(document).ready(function(){
	
			$("#err").hide();
		$("#save1").click(function(){
			
					//var user =$('#user').val();
					var email1 =$('#email').val();
					var pass1 =$('#pass').val();
					//var file =$('#file').val();					
				//alert("sfeq");
			

	//alert(file);
	var dataString = 'email_id='+ email1+'&password='+pass1  ;
	//alert(dataString);			
	if(email1== '' || pass1=='')
	{//	alert("fce");
		$("#err").show(5000);
 		$("#err").html("please enter    ");
	}
	else
	{
//alert("vdss");

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "login_ajax.php",
	data: dataString,
	cache: false,
	success: function(result){
		//$("#err").show();
		$("#err").show(300);
		$("#err").hide(5000);
		$('#err').html(result);
		//alert(result);
	}
	});
	}
return false;
		
		
		});
	
	});
	</script>

</script>
<?php

include('footer.php');

?>