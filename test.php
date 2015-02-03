<?php
require_once('PgDatabase.php');

$db=new PgDatabase();
$result =$db->retrieve("Select * from subjects");
var_dump($result);
?>