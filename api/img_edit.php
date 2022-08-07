<?php
include('./base.php');
$Portfolio = new DB('resume_portfolio');

if($_FILES['img']['error'] == 0 && isset($_FILES['img']['tmp_name'])) {
    $data = $Portfolio->find($_POST['id']);
    unlink('../img/'.$data['img']);

    $sub = explode(".",$_FILES['img']['name'])[1] ;
    $name = date("Ymdhis").".".$sub;

    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$name);

    $data['img'] = $name;


    // dd($data);
    $Portfolio->save($data);
}


to('../back.php?do=portfolio');

?>