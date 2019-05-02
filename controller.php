<?php 
// $data = $_REQUEST;
// $data = ['tst' => 'va'];
$data = file_get_contents('php://input');
echo json_encode($data);exit();