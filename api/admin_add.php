<?php
include('./base.php');

$Admin = new DB('resume_admin');

$data = [];

$data['acc'] = $_POST['acc'];
$data['pw'] = $_POST['pw'];
$data['email'] = $_POST['email'];

$Admin->save($data);
?>