<?php
include('./base.php');
$Portfolio = new DB('resume_portfolio');
dd($_FILES['img']);

$data = [];



if($_FILES['img']['error'] == 0 && isset($_FILES['img']['tmp_name'])) {
    $sub = explode(".",$_FILES['img']['name'])[1] ;
    $name = date("Ymdhis").".".$sub;

    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$name);
    $data['img'] = $name;

    $data['title'] = $_POST['title'];
    $data['href'] = $_POST['href'];
    $data['type'] = $_POST['type'];
    $data['text'] = $_POST['text'];

    $data['sh'] = 1;
    $data['order_num'] = ($Portfolio->math('MAX','order_num')+1);

    $Portfolio->save($data);
}


to('../back.php?do=portfolio');
?>