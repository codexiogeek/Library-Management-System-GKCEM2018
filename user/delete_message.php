<?php
require("../db.php");
$db->query("delete from notification where id='{$_GET['msgid']}'");
?>
<script>
window.location='index.php?option=notification';
</script>
