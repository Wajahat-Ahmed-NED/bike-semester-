<?php
// DB credentials.
define('DB_HOST','remotemysql.com');
define('DB_USER','BPl0WE4WNy');
define('DB_PASS','5qMfBaL3bS');
define('DB_NAME','BPl0WE4WNy');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
