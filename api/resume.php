<?php
include('./base.php');
$Resume = new DB('resume_resume');

if(isset($_POST['id'])){

    foreach ($_POST['id'] as $key => $id) {
        
        $data = $Resume->find($id);

        $data['title'] = $_POST['title']["$key"];
        $data['text'] = $_POST['text']["$key"];
        $data['during'] = $_POST['during']["$key"];

        $Resume->save($data);
    }

}

to('../back.php?do=resume');

?>