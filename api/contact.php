<?php
include('./base.php');
$Contact = new DB('resume_contact');
$data = $Contact->find(1);

if(isset($_POST['email'])){
    $data['email'] = $_POST['email'];
}

if(isset($_POST['tel'])){
    $data['tel'] = $_POST['tel'];
}

if(isset($_POST['address'])){
    $data['address'] = $_POST['address'];
}

if(!empty($data)){

    $Contact->save($data);
}

to('../back.php?do=contact');
?>