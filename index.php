<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include('php/config.php') ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="./css/particle.css">
    
</head>

<body onload="init();">

    <?php include('php/header.php') ?>

    <main class="main">
        <div class="intro">
            <div class="intro-image" style="position: fixed;
                                            width: 100vw;
                                            height: 100vh;
                                            background: url(../images/background/h-5.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>
            <div class='white'>
                <div class='squares'>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                    <div class='square'></div>
                </div>
            </div>
            <div class='grey'></div>
            <script src='js/jquery.min.js'></script>
        </div>
        <div class="wrapper">

            <div class="rectangle">
                <div class="news_window">
                    <h1>Добро пожаловать на Genshin-Monde</h1>
                    <p class="description">
                        На данном сайте вы сможете найти актуальные таблицы героев, оружия и
                        артефактов из игры Genshin Impact. Зарегистрированные пользователи могут
                        составлять собственные наборы персонажей, коллекционировать достижения и
                        общаться с друзьями.
                    </p>
                    
                    <div class="menu__photos">
                        <figure class="menu__photo menu__photo_size_lg">
                            <img src="/images/menu/1.jpg" alt="Heros" class="menu__photo-pic">
                            <figcaption class="menu__photo-title">Персонажи</figcaption>
                            <a href="Heros.php" class="menu__photo-link"></a>
                        </figure>
                        <figure class="menu__photo menu__photo_size_lg">
                            <img src="/images/menu/2.jpg" alt="Weapons" class="menu__photo-pic">
                            <figcaption class="menu__photo-title">Оружие</figcaption>
                            <a href="Weapons.php" class="menu__photo-link"></a>
                        </figure>

                        <figure class="menu__photo menu__photo_size_sm">
                            <img src="/images/menu/3.jpg" alt="Artifact" class="menu__photo-pic">
                            <figcaption class="menu__photo-title">Артефакты</figcaption>
                            <a href="Artifact.php" class="menu__photo-link"></a>
                        </figure>
                        <figure class="menu__photo menu__photo_size_sm">
                            <img src="/images/menu/4.jpg" alt="Combs" class="menu__photo-pic">
                            <figcaption class="menu__photo-title">Сборки</figcaption>
                            <a href="Combs.php" class="menu__photo-link"></a>
                        </figure>
                        <figure class="menu__photo menu__photo_size_sm">
                            <img src="/images/menu/5.jpg" alt="Achievements" class="menu__photo-pic">
                            <figcaption class="menu__photo-title">Достижения</figcaption>
                            <a href="#!" class="menu__photo-link"></a>
                        </figure>
                    </div>

                </div>

                <!-- <div class="chat__background">

                    <h2 style="text-align: center; margin-top:100px;margin-bottom:200px">Здесь возможно будет чат<br>
                Или новости<br>Я не знаю<br>Пока не решил</h2>
                <textarea cols="30" rows="3" style="display: block;margin: 0 auto;resize:none;"></textarea>

                </div> -->

            </div>

        </div>

    </main>
</body>

</html>