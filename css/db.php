<?php 

$db=mysql_connect('localhost','root','arii');
$db_sect=mysql_select_db($db,'forum');
  if($db_sect==true)
  {
  echo "ok";
  }else
  {
  echo "not ok";
  }
?>