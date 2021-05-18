
<style>
body{width:610px;}
#uploadForm {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
#uploadForm label {margin:2px; font-size:1em; font-weight:bold;}
.demoInputBox{padding:5px; border:#F0F0F0 1px solid; border-radius:4px; background-color:#FFF;}

.btnSubmit{background-color:#09f;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
#targetLayer{width:100%;text-align:center;}

</style>
<script src="../jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="jquery.form.min.js"></script>

<script type="text/javascript">
$(document).ready(function() { 

	$(".progress").hide();
	 $('#uploadForm').submit(function(e) {	
		if($('#userImage').val()) {
			e.preventDefault();
			$('#loader-icon').show();
			$(this).ajaxSubmit({ 
				target:   '#targetLayer', 
				beforeSubmit: function() {
				  $("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("#progress-bar").width(percentComplete + '%');
					$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
				},
				success:function (){
					$('#loader-icon').hide();
					//$("").hide();
					$(".progress").show();
	
			  		setTimeout(function(){
				  	$(".progress").hide();        
			  }, 3000);

				
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
}); 

</script>
<script>
$(document).ready(function(){




var ='';



});

</script>
<form id="uploadForm" action="_image.php" method="post">
<div>
<label>Upload Image File:</label>
<input name="userImage" id="userImage" type="file" class="demoInputBox" />
</div>

<div class='progress'>
<div id="progress-div"><div id="progress-bar" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div></div>
</div>
<div id="targetLayer"></div>
<div><input type="submit" id="btnSubmit" value="Submit" class="btn btn-success" /></div></form>
<div id="loader-icon" style="display:none;"><img src="LoaderIcon.gif" /></div>