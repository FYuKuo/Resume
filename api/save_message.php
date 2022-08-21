<?php
include('./base.php');
$Message = new DB('resume_message');

$data = [];

$data['email'] = $_POST['email'];
$data['tel'] = $_POST['tel'];
$data['name'] = $_POST['name'];
$data['title'] = $_POST['title'];
$data['message'] = $_POST['text'];

// dd($data);
echo $Message->save($data);

?>