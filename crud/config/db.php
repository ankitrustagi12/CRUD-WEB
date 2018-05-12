<?php

ob_start();

if(!isset($_session))
{
    session_start();
}

$host = 'localhost';
$user = 'root';
$pass ='';
$db_name ='crudapp';

$connection=mysqli_connect($host,$user,$pass,$db_name);

if($connection)
{
    echo "Connection Successful";
}
else
{
    echo "Connection Failed";
}

?>
