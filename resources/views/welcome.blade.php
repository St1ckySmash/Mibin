<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <div class = "header">
        <div class="leftSide">
            <div class="drawerIcon">
                <img class="icon" src="http://127.0.0.1:8000/images/Hamburger_icon.png" alt="fff">
            </div>
            <div class = "logo">
                <!-- <img class="logoImg" src="http://127.0.0.1:8000/images/logo.jpg" alt=""> -->
                <p class="logoText">Mibin</p>
            </div>
        </div>
        <div class="rightSide">
            <div class="auth">
                <div class="loginSide">
                    <img class="loginIcon" src="http://127.0.0.1:8000/images/loginIcon.png.png" alt="">
                </div>
                <div class="registerSide">
                    <img class="registerIcon" src="http://127.0.0.1:8000/images/registerIcon.png" alt="">
                </div>
            </div>
        </div>
    </div><hr>
    <div class="mainLayout">
        <div class="about">
            <div class="aboutWrapper">
                <div class="aboutTitle">
                    <div class="text">О проекте</div>
                </div>
                <div class="aboutText"></div>
            </div>
        </div>
    </div>
</body>

</html>