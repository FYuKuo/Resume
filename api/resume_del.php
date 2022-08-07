<?php
include('./base.php');
$table = "resume_".$_POST['table'];
$DB = new DB($table);

$DB->del($_POST['id']);

echo $table;
?>