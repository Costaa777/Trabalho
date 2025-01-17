<?php
require_once '../basedados/basedados.h.php';;

$sql = "SELECT * FROM rotas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexibus</title>
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="../logIn.css">

</head>
<body>
    <header>
        <h1>Flexibus</h1>
        <div class="logotipo-header">
            <img src="../img/logotipotb.png" alt="Logotipo flexibus" class="logo">
        </div>
        <p>Soluções flexíveis para o transporte moderno</p>

        <button class="header-button login-btn" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</button>
        <button class="header-button register-btn" onclick="document.getElementById('register').style.display='block'" style="width:auto;">Registo</button>
    </header>

<!--Modals login e register-->
    <div id="login" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img/img_avatar.png"Avatar" class="avatar">
          </div>
      
          <div class="container">
            <label for="uname"><b>Introduza o seu Email</b></label>
            <input type="email" placeholder="Enter Email" name="uname" required>
      
            <label for="psw"><b>Introduza a sua Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
        </form>
    </div>

    <div id="register" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
      
          <div class="container">
            <label for="uname"><b>Introduza o seu Email</b></label>
            <input type="email" placeholder="Enter Email" name="uname" required>
            
            <label for="uname"><b>Introduza o seu Nome</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Introduza uma Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw"><b>Volte a introduzir a Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit">Register</button>
            
          </div>
      
        </form>
    </div>
<!--Fim dos modals de registo e login-->
    
</body>
</html>

<?php
$conn->close();
?>