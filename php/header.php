<?php
$onPage = explode('/', trim($_SERVER['PHP_SELF'], '/'))[0];
?>

<header class="header">
    <div class="wrapper">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    <div id="animation_container" style="background-color:rgba(255, 255, 255, 0.00)">
                        <canvas id="canvas" style="background-color:rgba(255, 255, 255, 0.00);"></canvas>
                        <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; left: 0px; top: 0px;">
                        </div>
                    </div>
                </a>
            </div>

            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="index.php" class="header__link<?php if ($onPage == 'index.php') echo '-current'; ?>">Главная</a>
                    </li>
                    <li class="header__item">
                        <a href="Heros.php" class="header__link<?php if ($onPage == 'Heros.php') echo '-current'; ?>">Персонажи</a>
                    </li>
                    <li class="header__item">
                        <a href="Weapons.php" class="header__link<?php if ($onPage == 'Weapons.php') echo '-current'; ?>">Оружие</a>
                    </li>
                    <li class="header__item">
                        <a href="Artifact.php" class="header__link<?php if ($onPage == 'Artifact.php') echo '-current'; ?>">Артефакты</a>
                    </li>
                    <li class="header__item">
                        <a href="Combs.php" class="header__link<?php if ($onPage == 'Combs.php') echo '-current'; ?>">Сборки</a>
                    </li>
                    <li class="header__item">
                        <form method="post" action="Search.php">
                            <div class="search__form">
                            <input class="search__input" type="text" placeholder="Поиск" name="search">
                            <button class="search__button" type="submit"></button>
                            </div>
                        </form>
                    </li>
                    <li class="header__item">
                        <?php
                            $class = 'class="header__link';
                            if ($onPage == 'Login.php' or $onPage == 'Account.php') {
                                $class = 'class="header__link-current';
                            }
                            if (isset($_SESSION['id'])) {
                                echo '<a href="Account.php" ' . $class . '">' . $_SESSION['login'] . '</a>';
                            } else echo '<a href="Login.php?register=false" ' . $class . '"> Войти </a>';
                        ?>
                        </a>
                    </li>
            </nav>
        </div>
    </div>
</header>