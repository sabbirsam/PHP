
<?php
echo "Array";
$data= $_POST;
$data['result']='Bye';

echo json_encode($data, JSON_PRETTY_PRINT);
