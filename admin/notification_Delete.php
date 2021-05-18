<?php
require('../db.php');
extract($_GET);
$db->query("delete from notification  where id='$msgid'");
echo "<script>window.location='admin.php?option=all_notification'</script>";
?>