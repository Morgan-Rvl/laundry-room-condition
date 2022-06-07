<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <link rel="stylesheet" href="./style/style.css">
    
    <script src="./script/script.js"></script>
    
    <link rel="icon" href="./images/logo-grey.png">
    <title>Laundry Room Condition</title>
</head>
<body>
    <header>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Accueil</a>
            <a href="#news">Affluence</a>
            <a href="#contact">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
            <a href="#profil" id="profil">Morgan Raveleau - 007</a>
        </div>
    </header>

    <div id="appareils">
        <div id="machines">
            <div class="machine">
                <div class="nom">
                    <p>Machine 1</p>
                </div>
                <div class="etat">
                    <p>etat-machine1</p>
                </div>
                <div id="response_Machine1" class="time"></div>
                <div class="timer">
                    <div class="time">
                        <span class="timer__part timer__part--minutes">00</span>
                        <span class="timer__part">:</span>
                        <span class="timer__part timer__part--seconds">00</span>
                    </div>
                    <div class="action">
                        <button type="button" class="timer__btn timer__btn--reset">
                            <span class="material-icons">timer</span>
                        </button>
                        <button type="button" class="timer__btn timer__btn--control timer__btn--start">
                            <span class="material-icons">play_arrow</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="machine">
                <div class="nom">
                    <p>Machine 2</p>
                </div>
                <div class="etat">
                    <p>etat-machine2</p>
                </div>
                <div id="response_Machine2"></div>
                <div class="timer">
                    <div class="time">
                        <span class="timer__part timer__part--minutes">00</span>
                        <span class="timer__part">:</span>
                        <span class="timer__part timer__part--seconds">00</span>
                    </div>
                    <div class="action">
                        <button type="button" class="timer__btn timer__btn--reset">
                            <span class="material-icons">timer</span>
                        </button>
                        <button type="button" class="timer__btn timer__btn--control timer__btn--start">
                            <span class="material-icons">play_arrow</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="seche-linges">
            <div class="seche-linge">
                <div class="nom">
                    <p>Sèche-linge 1</p>
                </div>
                <div class="etat">
                    <p>etat-seche-linge1</p>
                </div>
                <div id="response_Seche_linge1"></div>
                <div class="timer">
                    <div class="time">
                        <span class="timer__part timer__part--minutes">00</span>
                        <span class="timer__part">:</span>
                        <span class="timer__part timer__part--seconds">00</span>
                    </div>
                    <div class="action">
                        <button type="button" class="timer__btn timer__btn--reset">
                            <span class="material-icons">timer</span>
                        </button>
                        <button type="button" class="timer__btn timer__btn--control timer__btn--start">
                            <span class="material-icons">play_arrow</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="seche-linge">
                <div class="nom">
                    <p>Sèche-linge 2</p>
                </div>
                <div class="etat">
                    <p>etat-seche-linge2</p>
                </div>
                <div id="response_Seche_linge2"></div>
                <div class="timer">
                    <div class="time">
                        <span class="timer__part timer__part--minutes">00</span>
                        <span class="timer__part">:</span>
                        <span class="timer__part timer__part--seconds">00</span>
                    </div>
                    <div class="action">
                        <button type="button" class="timer__btn timer__btn--reset">
                            <span class="material-icons">timer</span>
                        </button>
                        <button type="button" class="timer__btn timer__btn--control timer__btn--start">
                            <span class="material-icons">play_arrow</span>
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>

    <!-- timer -->
    <script type="text/javascript">
        setInterval(function() 
        {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","./php/response.php",false);
            xmlhttp.send(null);
            times=xmlhttp.responseText;
            times = times.split(",")
            document.getElementById("response_Machine1").innerHTML= times[0]
            document.getElementById("response_Machine2").innerHTML= times[1]
            document.getElementById("response_Seche_linge1").innerHTML= times[2]
            document.getElementById("response_Seche_linge2").innerHTML= times[3]
        }, 1000);
    </script>
</body>
</html>