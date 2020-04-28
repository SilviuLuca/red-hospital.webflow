<?php


$db['db_host'] = 'localhost';
$db['db_user'] = 'recumedi_admin';
$db['db_pass'] = '7z9)YE*RKG+%';
$db['db_name'] = 'recumedi_website';


foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);




?>