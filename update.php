<?php

require('Database.php');

$db = new Database();
$db->query('UPDATE `contoh_table` SET `data`=:data WHERE `id`=:id');  
$db->bind(':data', 'Contoh Data K');
$db->bind(':id', 10);
$db->execute();

echo $db->lastInsertId();