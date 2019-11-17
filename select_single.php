<?php

require('Database.php');

$db = new Database();
$db->query('SELECT * FROM `contoh_table` WHERE data = :data');
$db->bind(':data', 'Contoh Data B');
$result = $db->single();

print_r($result);
