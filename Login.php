<?php

    if (!empty($_SESSION))
        header("location: Account.php");

    $error = ['',''];
    $reg_message = '';
    try {
        $connection = new PDO("sqlite:Game_database.db");
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }

    //include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //$query = $db->query("SELECT * FROM Account WHERE Login=:username");
        $query = $connection->prepare("SELECT * FROM Account WHERE Login=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            $error[0] = '<div class="login-error">Неверное имя пользователя!</div>';
        } else {
            if (password_verify($password, $result['Password_Hash'])) {
                $_SESSION['user_id'] = $result['Account_ID'];
                echo '<p>Поздравляем, вы прошли авторизацию!</p>';
            } else {
                $error[1] = '<div class="login-error">Неверный пароль!</div>';
            }
        }
    
        if ($error == ['','']) {
            //Запускаем пользователю сессию
            session_start();
            
        
            //Записываем в переменные login и id
            $_SESSION['login']=$result['Login'];
            $_SESSION['id']=$result['Account_ID'];
            $_SESSION['status']=$result['Type_account'];
            
            //Переадресовываем на главную
            header("location: Account.php");
        }
    }
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password-repeat'];
        if ($password != $password_repeat) {
            $error[1] = '<div class="login-error">Пароли не совпадают!</div>';
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "SELECT COUNT(*) FROM Account WHERE Login='" . $username . "'";
            $res = $connection->query($sql);
            $count = $res->fetchColumn();

            if ($count > 0) {
                $error[0] = '<div class="login-error">Логин занят!</div>';
            }
            else {
                $query = $connection->prepare("INSERT INTO Account(Login, Password_Hash, Type_account, Balance) VALUES (:username,:password_hash,4,0)");
                $query->bindParam("username", $username, PDO::PARAM_STR);
                $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
                
                try { $result = $query->execute();
                    echo '<p class="success">Регистрация прошла успешно!</p>';
                    header("location: ?register=success");
                } catch (PDOException $e) {
                    echo '<p class="error">Неверные данные!</p>';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include('php/config.php') ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Авторизация</title>
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
                                            background: url(../images/background/h-14.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>

            <div class="wrapper">
                <form class="login-form" method="post" action="" name="signin-form">
                    <?php if ($_GET['register'] == 'success') print('
                        <div class="login-error">Регистрация прошла успешно, вы можете авторизироваться в системе</div>
                    ');?>
                    <h3 class="login-h3"><?php $_GET['register'] == 'true' ? print('Регистрация') : print('Авторизация'); ?></h3>

                    <label class="login-label" for="username">Логин</label>
                    <input class="login-input" type="text" placeholder="Логин (E-Mail)" name="username" pattern="[a-zA-Z0-9]+" required />

                    <?php echo $error[0]; ?>

                    <label class="login-label" for="password">Пароль</label>
                    <input class="login-input" type="password" placeholder="Пароль" name="password" required />
                    
                    <?php if ($_GET['register'] == 'true') print('
                    <label class="login-label" for="password">Повторите пароль</label>
                    <input class="login-input" type="password" placeholder="Пароль" name="password-repeat" required />
                    ');
                    ?>

                    <?php echo $error[1]; ?>

                    <?php if ($_GET['register'] == 'true') print('
                    <button class="login-button" type="submit" name="register">Зарегистрироваться</button>
                    <a href="?register=false" class="login-a">Уже есть аккаунт? Войти</a>
                    
                    ');
                    else print('
                    <a href="404.php" class="login-a">Забыли пароль?</a>
                    <button class="login-button" type="submit" name="login">Войти</button>
                    <a href="?register=true" class="login-a">Создать аккаунт?</a>
                    ')
                    ?>

                </form>

            </div>

    </main>
</body>

</html>