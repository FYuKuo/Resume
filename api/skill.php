<?php
include('./base.php');
$Skill = new DB('resume_skill');

if(isset($_POST['id'])){

        
    $data = $Skill->find($_POST['id']);

    $data['title'] = $_POST['title'];
    $data['text'] = $_POST['text'];
    $data['type'] = $_POST['type'];

    $Skill->save($data);
    // dd($data);
    

}

to("../back.php?do=skill");

?>