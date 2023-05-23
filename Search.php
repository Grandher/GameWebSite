<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include('php/config.php') ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Поиск</title>
</head>
<body onload="init();">
    <?php
        include('php/header.php')
    ?>
    <main class="main">
        <div class="intro">
            <div class="intro-image" style="position: fixed;
                                            width: 100vw;
                                            height: 100vh;
                                            background: url(../images/background/h-3.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>              
            </div>
        <div class="wrapper">
            <div class="rectangle">

                <form class="search__form" method="post" action="Search.php">
                    <input class="search__input-menu" type="text" placeholder="Поиск" name="search">
                    <button class="search__button" type="submit"></button>
                </form>
                <p class="news_window description">
                    Результаты по запросу: <?php echo $_POST['search'] ?>
                </p>

                
                <table class="primary-table">                    
                    <tbody>
                        <tr><td>Тут будут какие-то результаты поиска, когда я пойму как его сделать</td></tr>
                    </tbody>
                </table>
                </div>
        </div>
        
    </main>
</body>
</html>