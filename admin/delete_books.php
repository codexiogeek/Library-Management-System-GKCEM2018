<?php
include('../db.php'); 
extract($_GET);
$bid = $book_id;
$db->query("delete from books where id='$bid'");
?>
<script>
window.location='admin.php?option=books';
</script>