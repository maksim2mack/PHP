<?php
$user = 'Alicehost97';// логин БД
$pass = 'password'; // пароль БД
try {
    $dbh = new PDO('mysql:host=localhost;dbname=service', $user, $pass);
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>