<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include('php/config.php') ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Персонажи</title>
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
                                            background: url(../images/background/h-1.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>              
            </div>
        <div class="wrapper">

            <div class="rectangle">  
                <div class="news_window">
                <?php
                    echo '<p class="description"> Логин: ' . $_SESSION['login'] . '</p>';
                    echo '<p class="description"> ID: ' . $_SESSION['id'] . '</p>';
                    echo '<p class="description"> Тип аккаунта: ' . $_SESSION['status'] . '</p>';
                    if (isset($_POST['logout'])) {
                        $_SESSION = [];
                        header("location: index.php");
                    }
                ?>
                <form method="post" action="">
                <button type="submit" name="logout">Выйти</button>
                </form> 
                </div>
            </div>

        </div>
        
    </main>
</body>
</html>