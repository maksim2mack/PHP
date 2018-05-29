<?php
include 'connect.php';
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$query = 'SELECT * FROM service.users';
$res = $dbh->query($query, PDO::FETCH_ASSOC);
$existedUser = 0;
while ($rows = $res->fetchAll()):
    foreach ($rows as $item){
        foreach ($item as $key => $value) {
            if ($key === 'login') {
                if ($item[$key] === $login) {
                    $existedUser += 1;
                }
            }
        }
    };
endwhile;
if ($existedUser === 0) {
    $insertQuery = 'INSERT INTO service.users (id, login, password, name, sername, mail) VALUES (NULL,"'.$login.'","'.$password.'","'.$name.'","'.$surname.'","'.$mail.'");';
    $statement = $dbh->prepare($insertQuery);
    $statement->execute();
}
echo $existedUser;
?>