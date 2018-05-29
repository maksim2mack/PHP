<?php
  include 'connect.php';

//
//  if (isset($_POST["submit"])){
//
//    $idgroup = $_POST["idgroup"];
//    $name = $_POST["name"];
//    $amount = $_POST["amount"];
//    $price = $_POST["price"];
//    if (($name != "") && ($price != "")) {
//      $mysqli->query ("INSERT INTO `price` (`id_group`, `name`, `amount`, `price`) VALUES (\"".$idgroup."\", \"".$name."\", \"".$amount."\", \"".$price."\" )");
//      header("Location: admin");
//    }else{
//      Header("Location: price");
//    }
//      }
?>
<html>
  <head>
    <?php include "head.html";?>
    <title>Админка</title>
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
  </head>
  <body>
    <?php  include "navbar.html";?>
    <div id="wrapper" class="container">
      <!--<div class="formAuth col-md-4" >
        <div class="form-group">
          <label for="email">Логин</label>
          <input name="email" placeholder="Введите Логин" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="password">Пароль</label>
          <input name="password" placeholder="Введите Пароль" class="form-control" id="password" type="password">
        </div>
        <button type="button" name="button" class="btn-success">Войти</button>
      </div> -->
      <div class="row">
        <form method="post" id="SendForm" class="container-fluid">
          <div class="form-group col-md-2">
            <label for="sel1">Номер группы: </label>
            <select class="form-control" id="idgroup" name="idgroup">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="usr">Название: </label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group col-md-2">
            <label for="sel1">Номер группы: </label>
            <select class="form-control" id="amount" name="amount">
              <option>шт</option>
              <option>м2</option>
              <option>м3</option>
              <option>окно</option>
              <option>мп</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="usr">Цена: </label>
            <input type="text" class="form-control" id="price" name="price" required>
          </div>
      </div>
      <div class="row">
        <input class="btn btn-success col-md-8 col-md-offset-2" type="submit" id="submit" name="submit" value="Отправить">
      </div>
      </form>
    </div>
    <?php include "fscript.html";?>
    <!--<script type="text/babel">
      class Auth extends React.Component{
        constructor(props){
          super(props);
          this.state = {
            pressButtonS:false,
          };
        };
        pressButton = () =>{
          this.setState({pressButtonS: true});
        };
        render(){
          if (this.state.pressButtonS)
            alert("pressed");
          return(
            <form className="formAuth col-md-4" >
              <div className="form-group">
                <label htmlFor="email">Логин</label>
                <input name="email" ref="sLogin" placeholder="Введите Логин" className="form-control" id="email" />
              </div>
              <div className="form-group">
                <label htmlFor="password">Пароль</label>
                <input name="password" rew="sPassword" placeholder="Введите Пароль" className="form-control" id="password" type="password" />
              </div>
              <button type="button" name="button" className="btn-success" onClick={this.pressButton}>Войти</button>
            </form>
          );
        }
      };
      var adr = document.getElementById('wrapper');
      ReactDOM.render(
        <Auth />
        ,adr
      );
    </script>-->
    </body>
</html>
