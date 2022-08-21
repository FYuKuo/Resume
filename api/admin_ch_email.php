<?php
include('./base.php');

$Admin = new DB('resume_admin');

$res = $Admin->math('COUNT','id',['email'=>$_POST['email']]);

echo $res;
?>