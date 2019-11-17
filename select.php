<?php 

require('Database.php');

$db = new Database();
$db->query('SELECT * FROM `contoh_table`');
$result = $db->resultset();

print_r($result);