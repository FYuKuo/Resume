<?php
include('./base.php');
$table = "resume_".$_POST['table'];
$DB = new DB($table);
$data = $DB->find($_POST['id']);
$pre_data = $DB->find($_POST['pre_id']);

$data['order_num'] = $_POST['pre_order'];
$pre_data['order_num'] = $_POST['order'];

$DB->save($data);
$DB->save($pre_data);
?>