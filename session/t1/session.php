<?php
session_name("sam");
session_start([
    'cookie_domain'=>'.localhost:3030/session',
    'cookie_path'=>'/'
]);

$_SESSION['data2']= "san main session t1 data 2.php";

echo $_SESSION['data2'];
echo $_SESSION['data'];