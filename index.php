<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: https://iplocator.brunowerf.repl.co/login/login.php");
}
?>

<nav>
<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" type="image/x-icon" href="tools/mars.ico">
    <title>W3rf Tools</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        font-family: 'Segoe UI', sans-serif;
        font-size: 16px;
        background-image: url('imgs/background.jpg');
        background-size: cover;
        background-position: center;
      }

      .menu {
        display: inline-block;
        border: 2px solid #ffffff;
        border-radius: 5px;
        margin: 0;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.8);
      }

      .menu li {
        display: vertical;
        margin: 0 10px;
      }

      .menu-link {
        display: inline-block;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .menu-link:hover {
        color: #007bff;
      }

      /* Botão Sair */
      .logout {
        position: fixed;
        bottom: 10px;
        left: 10px;
        color: #fff;
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <nav>
      <ul class="menu">
        <li><a href="/" class="menu-link">Datasheet</a></li>
        <li><a href="/tools/iplocate.php" class="menu-link" target="_blank">IP Features</a></li>
        <li><a href="/tools/database/database.php" class="menu-link" target="_blank">Database</a></li>
      </ul>
    </nav>

    <a href="login/logout.php" class="logout">Sair</a>

    <footer style="position: fixed; bottom: 10px; right: 10px; text-align: right; font-size: 14px; color: #ffffff;">
      <p>Desenvolvido por Bruno Werf<p>
      <p>E-mail: brunostumsec@gmail.com</p>
    </footer>
  </body>
</html>


