<?php
include('./base.php');
$table = "resume_".$_POST['table'];
$DB = new DB($table);

if(isset($_POST['id'])){

    foreach ($_POST['id'] as $key => $id) {
        
        $data = $DB->find($id);

        $data['title'] = $_POST['title']["$key"];
        $data['text'] = $_POST['text']["$key"];
        $data['during'] = $_POST['during']["$key"];

        $DB->save($data);
    }

}

to("../back.php?do={$_POST['table']}");

?>