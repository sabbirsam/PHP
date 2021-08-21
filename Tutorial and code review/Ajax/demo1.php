<?php
echo "hello";
$data = $_GET;
$data['res']='success';
echo json_encode($data, JSON_PRETTY_PRINT);
