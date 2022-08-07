<?php
include('./base.php');
$Portfolio = new DB('resume_portfolio');

if(isset($_POST['id'])){

    foreach ($_POST['id'] as $key => $id) {
        
        $data = $Portfolio->find($id);

        $data['title'] = $_POST['title']["$key"];
        $data['text'] = $_POST['text']["$key"];
        $data['type'] = $_POST['type']["$key"];
        $data['href'] = $_POST['href']["$key"];

        $Portfolio->save($data);
        // dd($data);
    }

}

to("../back.php?do=portfolio");

?>