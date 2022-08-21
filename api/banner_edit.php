<?php
include('./base.php');
$Banner = new DB('resume_banner');
$data = $Banner->find(1);

if($_FILES['img']['error'] == 0 && isset($_FILES['img']['tmp_name'])) {
    unlink('../img/'.$data['img']);

    $sub = explode(".",$_FILES['img']['name'])[1] ;
    $name = date("Ymdhis").".".$sub;

    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$name);

    $data['img'] = $name;

}

$data['title'] = $_POST['title'];
$data['text'] = $_POST['text'];

dd($data);
$Banner->save($data);

to('../back.php?do=banner');

?>