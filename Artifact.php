<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include('php/config.php') ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Артифакты</title>
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
                                            background: url(../images/background/h-17.jpeg) no-repeat center;
                                            background-size: cover;
                                            "></div>              
            </div>
        <div class="wrapper">

            <div class="rectangle">
                
                <table class="primary-table" id="grid">
                    <thead>
                        <tr> 
                            <th>Название</th>
                            <th>Здоровье</th>
                            <th>Редкость</th>   
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
                        SELECT Artifact.Title, Artifact.HP, Rarity.Title as Rarity
                        FROM Artifact INNER JOIN Rarity ON Rarity.Rarity_ID = Artifact.Rarity;
                        EOF;

                        $ret = $db->query($sql);
                        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                            echo "<tr> <td>" . $row['Title'] . "</td> <td>" . $row['HP'] . "</td> <td>" . 
                            $row['Rarity'];
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