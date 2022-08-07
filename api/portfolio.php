<?php
include('./base.php');
$Portfolio = new DB('resume_portfolio');

if(isset($_POST['id'])){

        
    $data = $Portfolio->find($_POST['id']);

    $data['title'] = $_POST['title'];
    $data['text'] = $_POST['text'];
    $data['type'] = $_POST['type'];
    $data['href'] = $_POST['href'];

    $Portfolio->save($data);
    // dd($data);
    

}

to("../back.php?do=portfolio");

?>