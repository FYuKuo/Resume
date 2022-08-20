<?php
include('./base.php');

$Admin = new DB('resume_admin');

$res = $Admin->math('COUNT','id',['acc'=>$_POST['acc']]);



echo $res;
?>