<?php

$dbserver="localhost";
$dbname="root";
$dbpassword="";

mysql_query("SET NAMES 'UTF-8'");

if(mysql_connect ($dbserver,$dbname,$dbpassword));

else    {
    echo "Error!!!";	
}

if (!mysql_select_db ("loto_db")) die ("Error!!!");

?>
