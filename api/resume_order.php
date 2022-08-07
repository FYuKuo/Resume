<?php
include('./base.php');
$Resume = new DB('resume_resume');
$data = $Resume->find($_POST['id']);
$pre_data = $Resume->find($_POST['pre_id']);

$data['order_num'] = $_POST['pre_order'];
$pre_data['order_num'] = $_POST['order'];

$Resume->save($data);
$Resume->save($pre_data);
?>