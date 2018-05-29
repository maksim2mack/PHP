<?php
include "connect.php";
$res = $dbh->query("SELECT serviceName, amount, price FROM orders");
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
  <link rel="stylesheet" href="css/style-price.css">
  <title>Ремонтникофф - главная</title>
</head>
<body>
  <?php include "navbar.html"?>
  <div id="price" class="container">
    <div class="panel-group" id="collapse-group">
      <div class="panel panel-success">
        <div class="panel-heading" tabindex="0">
          <a data-toggle="collapse" data-parent="#collapse-group" href="#el1" class="table__header">Стены</a>
        </div>
          <div id="el1" class="collapse" style="display:block;">
              <div class="panel-body price__table hidenn">
                  <div class="puts_tab">
                      <form method="post" name="form" class="price__form">
                          <table class="table table-hover table-bordered">
                              <thead>
                              <tr class="info">
                                  <th class="text-center">Название</th>
                                  <th class="text-center">Величина</th>
                                  <th class="text-center">Стоимость</th>
                                  <th  class="text-center">Выбрать</th>
                              </tr>
                              </thead>
                              <tbody class="text-center template__container">
                              </tbody>
                          </table>
                          <button class="btn btn-success btn--save ">Запомнить</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <div class="panel panel-success">
        <div class="panel-heading" tabindex="0">
          <a data-toggle="collapse" data-parent="#collapse-group" href="#el2" class="table__header">Полы</a>
        </div>
          <div id="el1" class="collapse" style="display:block;">
              <div class="panel-body price__table hidenn">
                  <div class="puts_tab">
                      <form method="post" name="form" class="price__form">
                          <table class="table table-hover table-bordered">
                              <thead>
                              <tr class="info">
                                  <th class="text-center">Название</th>
                                  <th class="text-center">Величина</th>
                                  <th class="text-center">Стоимость</th>
                                  <th  class="text-center">Выбрать</th>
                              </tr>
                              </thead>
                              <tbody class="text-center template__container">
                              </tbody>
                          </table>
                          <button class="btn btn-success btn--save">Запомнить</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading" tabindex="0">
          <a data-toggle="collapse" data-parent="#collapse-group" href="#el3" class="table__header">Потолок</a>
        </div>
          <div id="el1" class="collapse" style="display:block;">
              <div class="panel-body price__table hidenn">
                  <div class="puts_tab">
                      <form method="post" name="form" class="price__form">
                          <table class="table table-hover table-bordered">
                              <thead>
                              <tr class="info">
                                  <th class="text-center">Название</th>
                                  <th class="text-center">Величина</th>
                                  <th class="text-center">Стоимость</th>
                                  <th  class="text-center">Выбрать</th>
                              </tr>
                              </thead>
                              <tbody class="text-center template__container">
                              </tbody>
                          </table>
                          <button class="btn btn-success btn--save ">Запомнить</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <div class="panel panel-success">
        <div class="panel-heading" tabindex="0">
          <a data-toggle="collapse" data-parent="#collapse-group" href="#el4" class="table__header">Окна и двери</a>
        </div>
          <div id="el1" class="collapse" style="display:block;">
              <div class="panel-body price__table hidenn">
                  <div class="puts_tab">
                      <form method="post" name="form">
                          <table class="table table-hover table-bordered">
                              <thead>
                              <tr class="info">
                                  <th class="text-center">Название</th>
                                  <th class="text-center">Величина</th>
                                  <th class="text-center">Стоимость</th>
                                  <th  class="text-center">Выбрать</th>
                              </tr>
                              </thead>
                              <tbody class="text-center template__container">
                              </tbody>
                          </table>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading" tabindex="0">
          <a data-toggle="collapse" data-parent="#collapse-group" href="#el5" class="table__header">Демонтаж</a>
        </div>
          <div id="el1" class="collapse" style="display:block;">
              <div class="panel-body price__table hidenn">
                  <div class="puts_tab">
                      <form method="post" name="form">
                          <table class="table table-hover table-bordered">
                              <thead>
                              <tr class="info">
                                  <th class="text-center">Название</th>
                                  <th class="text-center">Величина</th>
                                  <th class="text-center">Стоимость</th>
                                  <th  class="text-center">Выбрать</th>
                              </tr>
                              </thead>
                              <tbody class="text-center template__container">
                              </tbody>
                          </table>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <div class="panel panel-success">
        <div class="panel-heading" tabindex="0">
          <a data-toggle="collapse" data-parent="#collapse-group" href="#el6" class="table__header">Электрика</a>
        </div>
          <div id="el1" class="collapse" style="display:block;">
              <div class="panel-body price__table hidenn">
                  <div class="puts_tab">
                      <form method="post" name="form">
                          <table class="table table-hover table-bordered">
                              <thead>
                              <tr class="info">
                                  <th class="text-center">Название</th>
                                  <th class="text-center">Величина</th>
                                  <th class="text-center">Стоимость</th>
                                  <th  class="text-center">Выбрать</th>
                              </tr>
                              </thead>
                              <tbody class="text-center template__container">
                              </tbody>
                          </table>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading" tabindex="0">
          <a data-toggle="collapse" data-parent="#collapse-group" href="#el7" class="table__header">Сантехнические работы</a>
        </div>
          <div id="el1" class="collapse" style="display:block;">
              <div class="panel-body price__table hidenn">
                  <div class="puts_tab">
                      <form method="post" name="form">
                          <table class="table table-hover table-bordered">
                              <thead>
                              <tr class="info">
                                  <th class="text-center">Название</th>
                                  <th class="text-center">Величина</th>
                                  <th class="text-center">Стоимость</th>
                                  <th  class="text-center">Выбрать</th>
                              </tr>
                              </thead>
                              <tbody class="text-center template__container">
                              </tbody>
                          </table>
                      </form>
                  </div>
              </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <template id="row">
     <tr>
         <td class="first__row"></td>
         <td class="second__row"></td>
         <td class="third__row"></td>
         <td> <input type="checkbox" class="row__input" id="row__input"></td>
     </tr>
  </template>
  <script>
      var template = document.querySelector('#row').content;
      var fragment = document.createDocumentFragment();
      var serviceTypes = {
          'Стены': 'walls',
          'Полы': 'floor',
          'Потолок': 'soffit',
          'Окна и двери': 'windowsAndDoors',
          'Демонтаж': 'dismantling',
          'Электрика': 'electric',
          'Сантехника': 'plumbing'
      };

          function renderRow(row,i) {
          var rowElement = template.cloneNode(true);
          rowElement.querySelector('.first__row').textContent = row.serviceName;
          rowElement.querySelector('.second__row').textContent = row.amount;
          rowElement.querySelector('.third__row').textContent = row.price;
          return rowElement;
      }
      var obj = {};
          var arr=[];
      function checkService(checkbox,tbody,name,saveButton) {
          saveButton.addEventListener('click',function (evt) {
              evt.preventDefault();
              for (var j = 0; j< checkbox.length;j++){
                  if (checkbox[j].checked){
                      arr.push(j);
                  }
              }
              obj[name] = arr;
              load(JSON.stringify(obj),onLoad,onUploadError,UPLOAD_URL);
              arr = [];
          })
      }
      function renderRows(rows,container,name) {
          for (var i = 0; i < rows.length; i++) {
              fragment.appendChild(renderRow(rows[i],i));
          }
          container.appendChild(fragment);
          var form = container.parentNode.parentNode;
          var saveButton = form.querySelector('.btn-success');
          var inputValue = form.querySelectorAll('#row__input');
          checkService(inputValue,container,name,saveButton);
      }
      var buttons = document.querySelectorAll('.panel-heading');
      var onUpload = function (xhr,container,name) {
          console.log(JSON.parse(xhr));
          renderRows(JSON.parse(xhr),container,name);
      };
      var LOAD_URL = 'generation.php';
      var UPLOAD_URL ='service.php';
      var onUploadError = function () {
      };

      var onLoad = function (xhr) {
          console.log(xhr);
      }

      function load(data, onLoad, onError, UPLOAD_URL) {
          var xhr = new XMLHttpRequest();
          processingRequest(xhr, onLoad, onError);
          xhr.open('POST', UPLOAD_URL);
          xhr.setRequestHeader("Content-Type", "application/json");
          xhr.send(data);
      }

      function upload(data, onLoad, onError, UPLOAD_URL,container,name) {
          var xhr = new XMLHttpRequest();
          processingRequest(xhr, onLoad, onError,container,name);
          xhr.open('POST', UPLOAD_URL);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.send(data);
      }

      function processingRequest(xhr, onLoad, onError,container,name) {
          xhr.addEventListener('load', function () {
              if (xhr.status === 200) {
                  onLoad(xhr.responseText,container,name);
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
      for (var i=0;i< buttons.length;i++) {
          buttons[i].addEventListener('click', function (evt) {
              var target = evt.currentTarget;
              var container = target.parentNode.querySelector('.template__container');
              var tableHeader = target.querySelector('.table__header').textContent;
              for (var item in serviceTypes) {
                  if (tableHeader === item) {
                      upload('value=' + serviceTypes[item], onUpload, onUploadError, LOAD_URL,container,serviceTypes[item])
                  }
              }
              target.parentNode.querySelector('.price__table').classList.toggle('hidenn');
          });
      }

  </script>
</body>
</html>