<?php
include('../db.php'); 
extract($_GET);
$fid = $student_id;
$db->query("delete from user where id='$fid'");
?>
<script>
window.location='admin.php?option=student';
</script>