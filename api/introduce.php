<?php
include('./base.php');
$Introduce = new DB('resume_introduce');
$data = $Introduce->find(1);

if(isset($_POST['text'])){
    $data['text'] = $_POST['text'];
}

if(!empty($data)){

    $Introduce->save($data);
}

to('../back.php?do=introduce');
?>