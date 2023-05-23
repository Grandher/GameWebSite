<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include('php/config.php') ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Оружие</title>
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
                                            background: url(../images/background/h-9.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>
        </div>
        <div class="wrapper">

            <div class="rectangle">

                <table class="primary-table" id="grid">
                    <thead>
                        <tr>
                            <th data-type="string">Название</th>
                            <th data-type="string">Оружие</th>
                            <th>Модификатор урона</th>
                            <th>Уровень</th>
                            <th data-type="string">Редкость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        class MyDB extends SQLite3
                        {
                            function __construct()
                            {
                                $this->open('Game_database.db');
                            }
                        }
                        $db = new MyDB();
                        if (!$db) {
                            echo $db->lastErrorMsg();
                        }
                        $sql = <<<EOF
                        SELECT Weapon.Title, Billet.Title as Billet, Weapon.Modifier_damage, Weapon.Lvl,
                        Rarity.Title as Rarity FROM Weapon INNER JOIN Billet ON Billet.Billet_ID = Weapon.Billet,
                        Rarity ON Rarity.Rarity_ID = Weapon.Rarity ORDER BY Weapon.Title;
                        EOF;

                        $ret = $db->query($sql);
                        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                            echo "<tr> <td>" . $row['Title'] . "</td> <td>" . $row['Billet'] . "</td> <td>" . 
                            $row['Modifier_damage'] . "</td> <td>" . $row['Lvl'] . "</td> <td>" . $row['Rarity'];
                        }
                        $db->close();

                        ?>
                    </tbody>
                </table>
                <?php include('php/table_sort.php') ?>

            </div>

        </div>

    </main>
</body>

</html>