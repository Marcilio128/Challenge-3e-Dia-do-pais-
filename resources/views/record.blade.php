@section('title', '3E ')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/record.css">

    <script src="/js/record.js" defer></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Registro</title>
</head>

<body>
    <section class="registration">
        <div class="container">
            <div class="itens-registration">

                <img class="background" src="/assets/pai-filho.jpg" alt="">
                <img class="back-mobile" src="/assets/fundo-cell.png" alt="">
    
                <div class="registration-text">
                    <h2>Dia dos pais na 3e soluções!!!</h2>
                    <p>Pai é uma palavra tão curta mas com tanto significado cada um
                    consegue da o seu significado, venha conosco e de o seu</p>
                </div>            

                <form class="fields-registration" method="_POST" id="form" action="">
                    <img class="background-img" src="/assets/3e-logo-registro.png" alt="">
                    <h1>Bem-Vindo</h1>
                    
                    <div class="inputFields ">
                    <input type="text" name="name" id="name" required placeholder="Digite seu nome" autofocus data-required data-min-length="3" data-max-length="16">
                    <small>Error Message</small>
                    </div>

                    <div class="inputFields ">
                    <input type="email" name="email" id="email" required placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
                    <small>Error Message</small>
                    </div>
                    
                    <div class="inputFields ">
                    <input type="password" name="password" required id="password" placeholder="Senha de acesso" data-password-validate data-required>
                    <small>Error Message</small>
                    <button type="submit" id="btnSubmit" onclick="location.href='/inicio'"; disabled>Entrar</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
    
</body>
</html>

