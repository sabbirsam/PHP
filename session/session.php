<?php

session_name("sam");
session_start([
    'cookie_domain'=>'.localhost:3030/session',
    'cookie_path'=>'/'
]);

$_SESSION['data']= "sabbir main session.php";

echo $_SESSION['data'];