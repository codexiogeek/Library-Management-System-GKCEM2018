$(document).ready(function(){
	
		$("#save").click(function(){
			
					var user =$('#user').val();
					var email =$('#email').val();
					var pass =$('#pass').val();
					var file =$('#file').val();					
		
alert(user);
var dataString = 'user='+ user + '&email='+ email+'&pass='+pass +'&file='+file ;
				
if(file==''||email==''||pass==''||user=='')
{
 $("#err").html("please first login before ");
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

$('#err').html(result);
}
});
}
return false;
		
		
		});
	
	});
	