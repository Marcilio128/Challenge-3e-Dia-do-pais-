<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/static.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="/css/products.css">
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/aboult.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <title>@yield('title')</title>

</head>
<body>
    <header id="header" >
        <img class="logo-3e" src="/assets/logo3e.png" alt=""> </img>

            <nav id="nav">

                <button id="btn-mobile"> <span id="icon-menu"></span> </button>

            <ul id="menu" role="menu">

                <li><a href="/">Inicio</a></li>
                <li><a href="livros">Homenagens</a></li>
                <li><a href="/sobre">Sobre</a></li>

            </ul>
        </nav>
    </header>

<main>@yield('content')</main>
    
    <footer class="rodape"> 

    <div class="icon">
    <img class="logo-3e" src="/assets/logo3e.png" alt=""> </img>
            <p>&copy; 3E Soluções</p>

        <a href="#"><img src="/assets/instagram.png" class="insta" alt=""></a>
        <a href="#"><img src="/assets/facebook.png" class="face" alt=""></a>
        <a href="#"><img src="/assets/whatsapp.png" class="wpp" alt=""></a>

        </div>
    </footer>
</body>

<script src="/js/script.js"></script>
</html>