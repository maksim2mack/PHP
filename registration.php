<?php ?>
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
  <div class="container-fluid wrapper--main wrapper--main--form">
      <div class="form-send">
          <form class="col-md-6 col-md-offset-3 color--form" method="post" enctype="multipart/form-data">
              <div class="form-group form-group--first">
                  <label for="name">Введите имя</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя" required>
              </div>
              <div class="form-group">
                  <label for="surname">Введите фамилию</label>
                  <input type="text" class="form-control" id="surname" name="surname" placeholder="Введите фамилию" required>
              </div>
              <div class="form-group">
                  <label for="mail">Введите электронную почту</label>
                  <input type="email" class="form-control" id="mail" name="mail" placeholder="Введите электронную почту" required>
              </div>
              <div class="form-group">
                  <label for="login">Введите логин</label>
                  <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин" required>
                  <p class="validation__title hidden">Такой пользователь уже существует</p>
              </div>
              <div class="form-group">
                  <label for="password">Введите пароль</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Введите парооль" minlength="7" required>
              </div>
              <div class="form-group">
                  <button class="btn btn-success btn-success--in" name="send" type="submit">Отправить</button>
              </div>
          </form>
      </div>
  </div>
  <script>
      var loginForm = document.querySelector('form');
      var validationTitle = document.querySelector('.validation__title');
      var URL = 'registrationProcessing.php';
      var redirectUrl = 'http://localhost:63342/Mazay98-rep_dip-c7d992ca8958/personal.php';
      var onUpload = function (xhr) {
          console.log(xhr);
              if (Number(xhr) === 0) {
                  validationTitle.classList.add('hidden');
                  loginForm.classList.remove('incorrect__data');
                  window.location.href = redirectUrl;
              } else {
                  loginForm.classList.add('incorrect__data');
                  validationTitle.classList.remove('hidden');
              }
      };

      var onUploadError = function () {
      };
      function processingRequest(xhr, onLoad, onError) {
          xhr.addEventListener('load', function () {
              if (xhr.status === 200) {
                  onLoad(xhr.response);
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
