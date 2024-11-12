<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "onlinebank";

$conn = new  mysqli('$mysql_hostname', '$mysql_user', '$mysql_password','$mysql_database');
if($conn){
    echo"database connecte";
}
else
echo"not coonecte";
?>