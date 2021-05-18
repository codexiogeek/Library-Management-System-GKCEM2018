<?php
include('../db.php'); 
extract($_GET);
$cid = $course_id;
$db->query("delete from branch where id='$cid'");
header('location:admin.php?option=branch');
?>