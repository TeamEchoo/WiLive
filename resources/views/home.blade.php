<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiLive</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>
</head>

<body>

<header class="homeHeader">

    <a href= "{{route('home')}}">
        <img class="logo" src="/imagenes/Logo.svg" alt="wilive logo">
    </a>

    <p class="sloganMobile">Conéctate a la vida online</p>

    <div class="header-background">

        <p class="sloganDesktop">Conéctate a la vida online</p>
        <p class="descriptiveTextDesktop">Crea y asiste a eventos desde casa.</p>

    </div>

    <p class="descriptiveTextMobile">Crea y asiste a eventos desde casa.</p>

        <p class="arrowParagraph">Desliza para ver el contenido</p>
    <a class="arrow" href="#vidaOnline">
        <i class="fas fa-arrow-circle-down downArrow"></i>
    </a>

</header>

<section id="vidaOnline">
    <h2>¿Qué quieres hacer?</h2>

    <div class="options-section">
        <div class="categoryDesktopContainer">
            <a href="{{route('aprende')}}">
                <img class="imageMenu" src="/imagenes/aprende.jpeg" alt="">
            </a>
            <span class="options">APRENDE</span>
        </div>

        <div class="categoryDesktopContainer">
            <a href="{{route('viaja')}}">
                <img class="imageMenu" src="/imagenes/viaja.jpeg" alt="">
            </a>
            <li class="options">VIAJA</li>
        </div>

        <div class="categoryDesktopContainer">
            <a href="{{route('debate')}}">
                <img class="imageMenu" src="/imagenes/debate.jpeg" alt="">
            </a>
            <li class="options">DEBATE</li>
        </div>

        <div class="categoryDesktopContainer">
            <a href="{{route('come')}}">
                <img class="imageMenu" src="/imagenes/come.jpeg" alt="">
            </a>
            <li class="options">COME</li>
        </div>
    </div>

</section>

<footer>
    <a href="{{route('faq')}}">
        <button id="help">Te ayudamos</button>
    </a>

    <p class="copyRight">Design with <span class="heart">❤</span> by echoteam</p>

    <nav class="mainMenu">
        <ul class="iconMenu">
            <a href="{{ route('home') }}">
                <li class="liMainMenu">
                    <i class="fas fa-home iconNav"></i>
                    <p class="iconText">Inicio</p>
                </li>
            </a>
        
        @if(auth()->user() == null)
            <a href="{{ route('login') }}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Login</p>
                </li>
            </a> 
        @else
        <a href="{{ route('user.show', auth()->user() )}}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Perfil</p>
                </li>
            </a>
        @endif

        </ul>
    </nav>
</footer>

</body>
</html>
