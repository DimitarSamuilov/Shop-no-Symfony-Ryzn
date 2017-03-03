<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Multivac</title>
    <link rel="stylesheet" href="Content/css/shop-style.css">
    <link rel="stylesheet" href="Content/css/main.css">
    <link rel="stylesheet" href="Content/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<main>
    <header>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 search-bar">
                <img src="Content/Images/logo.png">
                <div class="cart-bar" style="position: absolute;">
                    <span>0 прод</span>|<span>0,00лв.</span>
                    <div class="cart-btn">
                        <a href="#" class="navbar-link">
                            <img src="Content/Images/cart.png"> Кошница </a>
                    </div>
                </div>
                <div class="header-search-box">
                    <div class="search-bar">
                        <form>
                            <input class="keyword-field" type="text" name="search"
                                   placeholder="Търсете навсякъде в нашия сайт">
                            <button class="search-btn" name="submit">Търси</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
        </div>
        <hr class="white-line">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 clear-all" >
                <div class="col-5">
                    <p>Добре дошли в нашият онлайн магазин</p>
                </div>
                <div class="col-4 ">
                </div>
                <div class="col-3 search-bar">
                    <ul class="navbar-list authentication-bar">
                        <?php if($data[1]): ?>
                        <?php if($data[2]): ?>
                        <li>
                            <a class="authentication-link" href="adminView.php">Админ страница</a>
                        </li>
                        <?php endif ?>
                        <li><a href="logout.php" class="authentication-link">Изход</a>
                        </li>
                        <?php else: ?>
                        <li><a href="register.php" class="authentication-link">Регистрация</a>
                        </li>
                        <li><a href="login.php" class="authentication-link">Вход</a>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-12 navbar-background clear-all" style="background-image:url('navigation.jpg')">
                <div class="col-2"></div>
                <div class="col-8" style="padding: inherit;">
                    <div class="col-1" style="padding: 0;"><a href="index.php"><img
                                src="Content/Images/ico-home.png"></a>
                    </div>
                    <div class="col-8">
                        <ul class="navbar-list">
                            <li><a href="#" class="navbar-link">промоции</a></li>
                            <li><a href="#" class="navbar-link">камерни машини</a></li>
                            <li><a href="#" class="navbar-link">консумативи</a></li>
                            <li><a href="#" class="navbar-link">компактни термоформи</a></li>
                        </ul>
                    </div>
                    <div class="col-3 side-clear">
                        <div class="search-bar">
                            <ul class="navbar-list right-nav">
                                <li><a href="#" class="navbar-link">Сертификати</a></li>
                                <li><a href="#" class="navbar-link">Контакти</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </header>
    <main>
        <div class="row match-col">
            <div class="col-2 slide-side-color "></div>
            <div class="col-8 clear-all">
                <div class="slide-container">
                    <div class="single-slide">
                        <div class="slide-text">
                            <h3>Модел Т300</h3><br>
                            <h1>Лесен за използване</h1><br>
                            <p> Замъкът е вид сграда
                                или комплекс от сгради
                                с укрепителни и отбранителни
                                функции, строена по време на Средновековието в Европа
                            </p>
                        </div>
                        <div class="slide-buttons">
                            <a href="#">
                                <div class="slider-single-button">
                                    <img src="Content/Images/btn-blue.png">
                                    <span class="slider-btn-text more-info">Виж подробно</span>
                                    <img src="Content/Images/btn-black.png">
                                    <span class="slider-btn-text buy">Купи</span>
                                </div>
                            </a>
                        </div>
                        <img src="Content/Images/home-banner.jpg" style="width: 100%;">
                        <div>
                            <div class="dots-nav" style="text-align:center">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 slide-side-color"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 side-clear inner-clear-padding">
                <div class="col-4 clear">
                    <a href="#">
                        <img src="Content/Images/banner.png"></a></div>
                <div class="col-4 clear"><a href="#">
                        <img src="Content/Images/banner.png"></a></div>
                <div class="col-4 clear "><a href="#">
                        <img src="Content/Images/banner.png"></a></div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 clear-all" style="position: relative;">
                <span class="products-text">Препоръчани продукти</span>
                <span class="grey-text">ВСИЧКИ ПРОДУКТИ</span>
            </div>
            <div class="col-2"></div>
        </div>
         <div class="row">
             <div class="col-2"></div>
             <div class="col-8 side-clear">
                 <?php foreach ($data[0] as $single):?>
                 <div class="col-3 side-clear">
                     <div class="merchandise-box">
                     <span><?= $single->getName(); ?>
                     </span>
                         <img class="merchandise-main-image" src="<?= $single->getImage(); ?>">
                         <p>&#36;<?= $single->getPrice(); ?> </p>
                         <a href="#"><img class="merchandise-cart"
                                          src="Content/Images/add-to-cart.png"></a>
                     </div>
                 </div>
                 <?php endforeach; ?>
             </div>
             <div class="col-2"></div>
         </div>
    </main>
    <div class="col-12">
        <hr>
    </div>
    <footer>
        <div class=" row">
            <div class="col-2"></div>
            <div class="col-5">
                <div class="contact-info">
                    <span>За нас </span>|<span>как да поръчам </span>|<span>Начин на доставка</span>|<span>Условия за ползване</span>|<span>Контакти</span>
                    <p>&copy All rights reserverd</p>
                    <p>Designed bt Ryzn</p>
                </div>
            </div>

            <div class="col-3 side-clear">
                <div class="search-bar">
                    <div class="buletin">
                        <h3>Бюлетин</h3>
                        <form>
                            <input class="bul-field" type="text" name="buletin">
                            <button name="submit" class="close-icon btn-placer"><img
                                    src="Content/Images/btn-newsletter.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </footer>
</main>
</body>
</html>
