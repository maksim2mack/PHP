<?php
session_start();
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
    <h1 class="text-center">Приветствую Вас на моём сайте!</h1>
    <div class="row">
      <div class="col col-md-4 img--container">
        <img src="img/rem2.png" alt="Сергей Таросюк">
      </div>
      <div class="col col-md-6 text">
        <p>
          Меня зовут Сергей Викторович Тарасюк, я - частный мастер по ремонту квартир, рад предложить
          Вам свои услуги по отделке и ремонту квартиры или комнаты любой сложности и любого объёма, буду рад помочь
          Вам воплотить в жизнь любые Ваши задумки!
        </p>
          <p>
          К тому же мои цены на ремонт достаточно демократичны, вполне доступны и понятны, при том вы получаете
          качественную услугу настоящего профессионала, который и воплотит в жизнь то, что вы задумывали и поверьте,
          как показывает опыт, результат будет лучше чем вы ожидаете.
          </p>
      <p>
          Я люблю свою работу, поэтому до сих пор работаю сам, дорожу своей репутацией и расстаюсь со
          всеми своими клиентами только добрыми друзьями, которые рекомендуют меня своим знакомым, буду рад знакомству с
          Вами, звоните.
        </p>
      </div>
    </div>
  </div>
  <div class="form-send hidden">
      <form class="col-md-6 col-md-offset-3 form resize-center " method="post" action="contact.php" enctype="multipart/form-data">
          <div class="form-group form-group--first">
              <label for="login">Введите логин</label>
              <input type="text" class="form-control form-control--resize" id="login" name="login" placeholder="Введите логин" required>
          </div>
          <div class="form-group">
              <label for="password">Введите пароль</label>
              <input type="password" minlength="7" class="form-control form-control--resize" id="password" name="password" placeholder="Введите пароль" required>
          </div>
          <p class="validation__title hidden">Введен неправильный пароль или логин</p>
          <p class="registration__title">У вас нет аккаунта?<a  class="registration__link" href="registration.php">Заргистрироваться</a></p>
          <div class="form-group">
              <button class="btn btn-success btn-success--in" name="send" type="submit">Войти</button>
          </div>
      </form>
  </div>
<script>
    var loginForm = document.querySelector('form');
    var userLink = document.querySelector('.navbar__user-link');
    var URL = 'processing.php';
    var LOAD__URL = 'personal.php';
    var validationTitle = document.querySelector('.validation__title');
    var openPopup = document.querySelector('.navbar__link--open');
    var popup = document.querySelector('.form-send');
    openPopup.addEventListener('click',function () {
        popup.classList.remove('hidden');
    });
    var onLoad = function(xhr) {
        console.log(xhr);
    };
    var onUpload = function (xhr) {
        load('value=' + xhr,onLoad,onUploadError,LOAD__URL);
        console.log(xhr);
        if (Number(xhr) === 0){
            validationTitle.classList.remove('hidden');
        } else {
            userLink.classList.remove('hidden');
            validationTitle.classList.add('hidden');
            openPopup.classList.add('hidden');
            popup.classList.add('hidden');
        }
    };

    var onUploadError = function () {
    };
    function processingRequest(xhr, onLoad, onError) {
        xhr.addEventListener('load', function () {
            if (xhr.status === 200) {
                onLoad(xhr.responseText);
            } else {
                onError('Статус ответа: ' + xhr.status + ' ' + xhr.statusText);
            }
        });
        xhr.addEventListener('error', function () {
            onError('Произошла ошибка соединения');
        });
        xhr.addEventListener('timeout', function () {
            onError('Запрос не успел выполниться за ' + xhr.timeout + 'мс');
        });

        xhr.timeout = 10000; // 10s
    }

    window.load = function (data,onLoad, onError, LOAD_URL) {
        var xhr = new XMLHttpRequest();
        processingRequest(xhr, onLoad, onError);
        xhr.open('POST', LOAD_URL);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(data);
    };

    function upload(data, onLoad, onError, UPLOAD_URL) {
        var xhr = new XMLHttpRequest();
        processingRequest(xhr, onLoad, onError);
        xhr.open('POST', UPLOAD_URL);
        xhr.send(data);
    }

    loginForm.addEventListener('submit', function (evt) {
        upload(new FormData(loginForm), onUpload, onUploadError,URL);
        evt.preventDefault();
        loginForm.reset();
    });


</script>
</body>
</html>