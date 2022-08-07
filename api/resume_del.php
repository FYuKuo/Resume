<?php
include('./base.php');
$Resume = new DB('resume_resume');

$Resume->del($_POST['id']);
?>