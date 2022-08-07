<?php
include('./base.php');
$table = "resume_".$_POST['table'];
$DB = new DB($table);

$data = [];


$data['title'] = $_POST['title'];
$data['text'] = $_POST['text'];
$data['during'] = $_POST['during'];
$data['sh'] = 1;
$data['order_num'] = ($DB->math('MAX','order_num')+1);

$DB->save($data);

?>