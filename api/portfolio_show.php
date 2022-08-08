<?php
include('./base.php');
$Portfolio = new DB('resume_portfolio');
$res = $Portfolio->all(['sh' => 1,'type'=>$_GET['type']], "ORDER BY `order_num` DESC");

echo json_encode($res);
?>