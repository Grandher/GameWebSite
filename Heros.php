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
                                            background: url(../images/background/h-6.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>              
            </div>
        <div class="wrapper">

            <div class="rectangle" id="grid">
                
                <table class="primary-table">
                    <thead>
                    <tr> 
                        <th data-type="string">Имя</th>
                        <th data-type="string">Элемент</th>
                        <th data-type="string">Оружие</th>
                        <th data-type="string">Редкость</th>
                        <th data-type="number">Здоровье</th>
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
                        SELECT Hero.Name, Element.Title as Element, Billet.Title as Arms, Rarity.Title as Rarity, Hero.Base_HP
                        FROM Hero INNER JOIN
                        Element ON Element.Element_ID = Hero.Element,
                        Billet ON Billet.Billet_ID = Hero.Arms,
                        Rarity ON Rarity.Rarity_ID = Hero.Rarity
                        ORDER BY Hero.Name;
                        EOF;

                        $ret = $db->query($sql);
                        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                            echo "<tr> <td>" . $row['Name'] . "</td> <td>" . $row['Element'] . "</td> <td>" . 
                            $row['Arms'] . "</td> <td>" . $row['Rarity'] . "</td> <td>" . $row['Base_HP'];
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