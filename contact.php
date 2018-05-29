<?php
  include "connect.php";
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
  <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
  <title>Ремонтникофф - мои работы</title>
</head>
<body>
  <?php include "navbar.html"?>
  <div class="container-fluid wrapper--main">
      <div class="wrapper--main wrapper--contacts">
    <h1 class="text-center">Контакты мастера по ремонту</h1>
    <h2>Сергей - Частный мастер</h2>
    <p>г. Удомля, пр. Энергетиков д.5</p>
    <p>Встреча возможна по предварительной договоренности:</p>
          <div class="contacts">
              <div class="phone">
                  <i class="fas fa-phone-volume"></i>
                  <a href="tel:+79157173515">+7(915)717-35-15</a>
              </div>
              <div class="email">
                  <i class="fas fa-at"></i>
                  <a href="mailto:asergio@htmlbook.ru">asergio@htmlbook.ru</a>
              </div>
      </div>
    </div>
  </div>
    <div class="form-send form-send__contacts">
        <form class="col-md-6 col-md-offset-3 text-center form__contacts" action="index.html" method="post">
          <h3>Свяжитесь с нами!</h3>
          <div class="form-group">
            <label for="name">Ваше имя </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Как Вас зовут?" required>
          </div>
          <div class="form-group">
            <label for="phone">Ваш телефон</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Ваш телефон" required>
          </div>
          <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea class="form-control" id="message" name="message" placeholder="Ваше сообщение" required></textarea>
          </div>
          <div class="form-group">
            <input class="btn btn-success" name="send" value="Отправить" type="submit">
          </div>
        </form>
    </div>
</body>
</html>
