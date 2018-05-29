<?php
include ('connect.php');
session_start();
define('INCLUDE_CHECK', true);
include ('service.php')
 ?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <title>Ремонтникофф - главная</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "navbar.html" ?>
<div class="container-fluid wrapper--main">
<div class="navigation__menu">
    <a class="personal__link" href="index.php">Главная</a>
    <span> &#8594</span>
    <span class="personal__title">Личный кабинет</span>
</div>
    <div class="personal__order">
        <table class="personal__table">
            <thead>
            <tr>
               <td class="personal__order--title"> Вы выбрали позиции:</td>
            </tr>
            </thead>
            <tbody>
            <?php $selectQuery = 'SELECT * FROM orders';
            $orders = $dbh->query($selectQuery);
            $rows= $orders->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $orderNumber) { ?>
            <tr>
                <?php foreach ($orderNumber as $id => $key) { if ($id !==  'userId'){?>
                <td><?php echo $orderNumber[$id];} ?></td>
              <?php  } ?>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
