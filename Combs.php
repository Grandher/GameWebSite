<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include('php/config.php') ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Сборки</title>
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
                                            background: url(../images/background/h-8.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>              
            </div>
        <div class="wrapper">

            <div class="rectangle" id="grid">
                
                <?php
                    //session_start();
                    if (isset($_SESSION['id'])) {
                        echo '
                        <table class="primary-table">
                            <thead>
                                <tr> 
                                    <th>Герой</th>
                                    <th>Оружие</th>
                                    <th>Артефакт</th>
                                    <th>Уровень</th>
                                </tr> 
                            </thead>
                            <tbody>';
                        try {
                            $connection = new PDO("sqlite:Game_database.db");
                        } catch (PDOException $e) {
                            exit("Error: " . $e->getMessage());
                        }
                        $query = $connection->prepare("SELECT Hero.Name as Hero, Weapon.Title as Weapon,
                                                             Artifact.Title as Art, Character.Lvl as Lvl
                                                        FROM Character
                                                        LEFT JOIN Hero ON Character.Hero = Hero.Hero_ID
                                                        LEFT JOIN Weapon ON Character.Weapon = Weapon.Weapon_ID
                                                        LEFT JOIN Artifact ON Character.Artifact = Artifact.Artifact_ID
                                                        INNER JOIN Player ON Player.Character = Character.Character_ID
                                                        INNER JOIN Account ON Player.Account = Account.Account_ID
                                                        WHERE Account.Login = :login;");

                        $query->bindParam("login", $_SESSION['login'], PDO::PARAM_STR);
                        $query->execute();

                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr> <td>" . $row['Hero'] . "</td> <td>" . $row['Weapon'] . "</td> <td>" . 
                            $row['Art'] . "</td> <td>" . $row['Lvl'] . "</td>";
                        }
                        echo '
                            </tboby>
                            </table>';
                        include('php/table_sort.php');
                    } else echo '
                    <div class="news_window full_width">
                    <h1>Авторизируйтесь, для просмотра данной информации</h1>
                    </div>
                    <div class="news_window">
                    <p class="description">
                        Здесь вы можете составлять собственные комбинации из персонажей, оружия и артефактов
                        для подбора наиболее эффективной команды.
                    </p>
                    <img src="/images/Combs.gif" alt="Tutorial" style="margin: 20px 0">
                    <p class="description">
                        Чтобы начать - 
                        <a href="Login.php?register=false" class="header__link"> войдите </a> или
                        <a href="Login.php?register=true" class="header__link"> зарегистрируйтесь </a>
                    </p>
                    </div>
                    <img src="/images/paimon.png" alt="Paimon" class="paimon__combs">
                    ';
                ?>

            </div>

        </div>
        
    </main>
</body>
</html>