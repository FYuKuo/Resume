<?php
include('./base.php');

$Admin = new DB('resume_admin');

$res = $Admin->math('COUNT','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);


if($res == 1){
    $_SESSION['user'] = $_POST['acc'];
    echo $res;
}else{
    echo $res;
    
}

?>