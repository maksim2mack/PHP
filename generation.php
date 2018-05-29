<?php
include 'connect.php';
$tableName =  $_POST['value'];
$res = $dbh->query("SELECT serviceName, amount, price FROM ".$tableName);
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($rows));