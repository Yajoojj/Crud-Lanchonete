<?php 
session_start();
?>
<!doctype html>
<html lang="pt_br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/pg_login.css" rel="stylesheet" />
    <title>Lanchonete Freitas</title>
    <link rel="shortcut icon" href="imgs/favicon.ico" />
  </head>
  <body>
    <div>
      
    </div>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
        <div class="imgLogo d-flex justify-content-center" style="width: 300px;">
          <img src="imgs/icone_lanchonete.png" id="icon" width="10px" alt="User Icon"/>
        </div>
        <div class="row">
          <?php if(isset($_SESSION['usuario_invalido'])) : ?>
          <h5 style="color:red;">Usuário ou senha inválido</h5>
          <?php endif; unset($_SESSION['usuario_invalido']); ?>
        </div>
    
        <!-- Login Form -->
        <form action="../php/proc_login.php" method="POST">
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
          <input type="password" id="password" class="fadeIn third" name="senha" placeholder="senha">
          <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Esqueceu a Senha?</a>
        </div>
    
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>