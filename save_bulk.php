<?php

require('Database.php');

$db = new Database();

// query yang akan dijalankan ditempatkan diantara beginTransaction() dan endTransaction()
$db->beginTransaction();
  $db->query('INSERT INTO `contoh_table` (`data`) VALUES (:data)');  
  $db->bind(':data', 'Contoh Data G');
  $db->execute();
  $db->bind(':data', 'Contoh Data H');
  $db->execute();
  $db->bind(':data', 'Contoh Data I');
  $db->execute();
  $db->bind(':data', 'Contoh Data J');
  $db->execute();
  echo $db->lastInsertId();
$db->endTransaction();