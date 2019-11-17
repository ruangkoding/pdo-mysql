<?php

require('Database.php');

$db = new Database();
$db->query('DELETE FROM `contoh_table` WHERE `id`=:id');  
$db->bind(':id', 10);
$db->execute();