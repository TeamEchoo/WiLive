<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>WiLive</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/popUp.css">
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Montserrat:wght@400&display=swap" rel="stylesheet">

 

 
</head>
<body>

    <header class="categoryHeader" >
        <a href="{{route('home')}}">
            <i class="fas fa-arrow-circle-left downArrow"></i>
        </a>
        <h1 class="categoryTitle">APRENDE</h1>
    </header>

    <main>        
        <h5 class="eventTitle">Título evento</h5>

        <span class="imageSpan">
            <img class="imageEventCard" src="https://picsum.photos/200/200" alt="">
        </span>
        
        <div class="buttonCapacityContainer">
            <p class="numberCapacity">2/5<p>
            <button class="enterButton" onclick="popUp()">Entrar </button>
                <div class="enterButton1" id="myPopup">
                    <span>Normas</span>
                    <span>Trata al resto de usuarios con respeto, no se permitirá el uso de lenguaje ofensivo</span>
                    <span>No está permitido ningún tipo de insinuación de caracter sexual</span>
                    <span>El no cumplimiento de las normas anteriores, supondrá la eliminación inmediata del perfil</span>
                    <div class="buttons">
                        <button type="button" class="cancelar">Cancelar</button>
                        <button type="button" class="aceptar">Aceptar</button>
                    </div>   
                </div>    
           
        </div>
    
        <button class="createButton">Crear Sala</button>
    </main>
   
    <footer>
    <a href="{{'te-ayudamos'}}">
        <button id="help">Te ayudamos</button>
    </a>

    <p class="copyRight">Design with <span class="heart">❤</span> by echoteams</p>

    <nav class="mainMenu">
        <ul class="iconMenu">
            <a href="{{ route('home') }}"> 
                <li class="liMainMenu">
                    <i class="fas fa-home iconNav"></i>
                    <p class="iconText">Inicio</p>
                </li>
            </a>

            <a href="{{ route('perfil') }}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Perfil</p>
                </li>
            </a>
        </ul>
    </nav> 
</footer>
    
<script src="{!! mix('./resources/js/popUp.js') !!}"></script>

</body>
</html>