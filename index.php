<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoce a Vida - Bolos no Pote</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
    <style>
        body{
    margin: 0;
    background-color: #F0FFFF;
    font-family: 'Quicksand', sans-serif;
}
header {
    background-color: #B0E0E6;
    height: 100px;
    text-align: center;
    padding: 10px;
}
.logo {
    height: 80px;
}
nav {
    background-color: #5F9EA0;
    font-weight: bold;
}
nav ul {
    list-style: none;
    width: 100%;
    margin: 0px;
    padding: 0px;
    display: flex;
    justify-content: center;
    font-size: 18px;
}
nav ul li {
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 25px;
    padding-right: 25px;
}
.content {
    min-height: 400px;
}
footer {
    background-color: #5F9EA0;
    text-align: center;
    min-height: 50px;
    padding: 20px;
}
    </style>
    <!-- fazer um style em css e linkar aqui
        fazer um script em js e linkar aqui
    estilizar fonte assistindo a parte 2 do video -->
</head>
<body>
    <header>
        <img src="images/logo2.png" width="400px" alt="Logo" class="logo">
    </header>
    <nav>
        <ul>
            <li>Home</li>
            <li>Sobre a empresa</li>
            <li>Nosso contato</li>
            <li>Nos encontre</li>
        </ul>
    </nav>
    <div class="content">
        <div class="container">
          <?php
            include('pages/home.php');
         ?>
        </div>
    </div>
    <footer>
        R.A.: 20007410-5, Priscilla Guerra Junior
    </footer>
</body>
</html>