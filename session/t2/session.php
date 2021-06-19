<?php
session_name("sam");
session_start([
    'cookie_domain'=>'.localhost:3030/session',
    'cookie_path'=>'/'
]);
echo $_SESSION['data']; // here just echo from main session.php
echo $_SESSION['data2']; // here just echo from main session.php