<?php
include('./base.php');

$Resume = new DB('resume_resume');
$data = $Resume->find($_POST['id']);

$data['sh'] = $_POST['sh'];

$Resume->save($data);
?>