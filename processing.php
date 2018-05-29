<?php
include 'connect.php';
session_start();
session_id(0);
$login = $_POST['login'];
$password = $_POST['password'];
$passwordExist = false;
$loginExist = false;
$query = 'SELECT * FROM service.users';
$SESSION_ID = 0;
$URL = 'index.php';
$res = $dbh->query($query, PDO::FETCH_ASSOC);
while ($rows = $res->fetchAll()): $i=0;
    foreach ($rows as $item){
        $passwordExist = false;
        $loginExist = false;
        foreach ($item as $key => $value) {
            if ($key === 'id') {
                $SESSION_ID = $item[$key];
            }
            if ($key === 'login') {
                if ($item[$key] === $login) {
                    $loginExist = true;
//                    upload($SESSION_ID,onUpload,onError,$URL);
                }
            }
            if ($key === 'password') {
                if ($item[$key] === $password) {
                    $passwordExist = true;
                }
            }
            if ($loginExist && $passwordExist){
                session_id(strval($SESSION_ID));
            }
            }
    };
    endwhile;
    echo session_id();
    $_SESSION['id'] = session_id();
    ?>
