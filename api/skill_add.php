<?php
include('./base.php');
$Skill = new DB('resume_skill');

$data = [];


$data['title'] = $_POST['title'];
$data['type'] = $_POST['type'];
$data['text'] = $_POST['text'];

$data['sh'] = 1;
$data['order_num'] = ($Skill->math('MAX','order_num')+1);

$Skill->save($data);

dd($data);

to('../back.php?do=skill');
?>