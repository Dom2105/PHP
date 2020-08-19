<?php 
error_reporting(0);
$db = new mysqli('localhost','root','','testdbb');
print_r($db->connect_error);
#print_r("hallo");
if ($db->connect_error) {
    die('DB Error');
}/* else{
    die("DB Connected");
} */
?>