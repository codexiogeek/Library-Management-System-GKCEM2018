<?php
include('../db.php'); 
extract($_GET);
$cid = $cat_id;
$db->query("delete from category where id='$cid'");
?>
<script>
window.location='admin.php?option=category';
</script>