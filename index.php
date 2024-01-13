<?php
phpinfo();
define("SITENAME","PHP-DAY1");
echo SITENAME;
echo "<br>";

#print_r($_SERVER);
$serverName = $_SERVER["SERVER_NAME"];
echo "Server Name : $serverName";
echo "<br>";

$serverAddress = $_SERVER["SERVER_ADDR"];
echo "Server Address: $serverAddress";
echo "<br>";

$serverPort = $_SERVER["SERVER_PORT"];
echo "Server Port: $serverPort";
echo "<br>";

echo __FILE__;
echo "<br>";

$age=10;
switch($age){
    case ($age < 5):
        echo "stay at home";
        break;
    case ($age == 5):
        echo "Go to Kindergarden";
        break;
    case ($age >= 6 && $age <= 12):
        echo "go to grade 4";
        break;  
}
?>