<?php

require('Database.php');

$db = new Database();
$db->query('INSERT INTO `contoh_table` (`data`) VALUES (:data)');  
$db->bind(':data', 'Contoh Data F');
$db->execute();

echo $db->lastInsertId();