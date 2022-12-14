<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Task</title>
    <link href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel='stylesheet'" href="./css/main.css">
</head>
<body>
    <header>
        <div class="header" id="header">
            <div class="container">
                <div class="header__up_mobile">
                    <div class="header__up_contacts"><a href="tel:+70000000000" class="header__up_contacts-phone">+7 (000) 000-00-00</a><a href="mailto:test@test.ru" class="header__up_contacts-mail">test@test.ru</a></div>
                    <div class="header__up_menu">
                        <ul class="header__up_links">
                            <li class="header__up_close">X</li>
                            <li class="header__up_link"><a href="#about">О компании</a></li>
                            <li class="header__up_link"><a href="#catalog">Каталог</a></li>
                            <li class="header__up_link"><a href="#">Каталог производителя</a></li>
                            <li class="header__up_link"><a href="#">Сертификаты</a></li>
                            <li class="header__up_link"><a href="#map">Производители</a></li>
                            <li class="header__up_link"><a href="#">Контакты</a></li>
                        </ul>
                        <a href="./index.php" class="header__up_logo"><img src="./icons/LOGO.svg" alt=""></a>
                        <div class="header__up_button"><div class="header__up_hamburger"></div><div class="header__up_hamburger-text">меню</div></div>
                    </div>
                    
                </div>
                <div class="header__up">
                    <a href="./index.php" class="header__up_logo"><img src="./icons/LOGO.svg" alt=""></a>
                    <ul class="header__up_links">
                        <li class="header__up_link"><a href="#about">О компании</a></li>
                        <li class="header__up_link"><a href="#catalog">Каталог</a></li>
                        <li class="header__up_link"><a href="#">Каталог производителя</a></li>
                        <li class="header__up_link"><a href="#">Сертификаты</a></li>
                        <li class="header__up_link"><a href="#map">Производители</a></li>
                        <li class="header__up_link"><a href="#footer">Контакты</a></li>
                    </ul>
                    <div class="header__up_contacts"><a href="tel:+70000000000" class="header__up_contacts-phone">+7 (000) 000-00-00</a><a href="mailto:test@test.ru" class="header__up_contacts-mail">test@test.ru</a></div>
                </div>
                <h1 class="header__info">производитель электронных компонентов</h1>
                <h2 class="header__info">25 заводов поставщиков</h2>
                <div class="header__search">
                    <input class="header__search_input" type="text" placeholder="Поиск по каталогу">
                    <div class="header__search_btn-block">
                        <div class="header__search_btn">Поиск</div>
                        <div class="header__search_btn second"></div>
                    </div>
                    
                </div>
            </div>
            <div class="header__backgroud_right"></div>
        </div>
        <div class="header__transition"></div>
    </header>
    <section class="catalog" id="catalog">
        <div class="container">
            <div class="catalog__card_line line"></div>
            <h2 class="catalog__title">Каталог</h2>
            <div class="swiper__new">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                                $obj = array('Активные компоненты','Пассивные компоненты','Светодиоды<br> и светодиодные  индикаторы','Установочные изделия','Резонаторы и генераторы','Акустические компоненты','Реле','Кабели и аксесуары');
                                for($j=0;$j<4;$j++){
                                    echo ('
                                        <div class="swiper-slide">
                                        <div class="catalog__cards row justify-content-between">'
                                    );
                                    if($j%2!=0){
                                        for($i=4;$i<8;$i++){
                                            echo('
                                                <a href="#" class="catalog__card col-xl-4 col-md-4 col-12 p-2 ">
                                                    <div class="catalog__card_img"><img class="lazy" src="./img/catalog/'.($i+1).'.png" alt="Активные компоненты"></div>
                                                    <div class="catalog__card_text">'.$obj[$i].'</div>
                                                    <div class="catalog__line"></div>
                                                </a>'
                                            );
                                        }
                                    }
                                    else{
                                        for($i=0;$i<4;$i++){
                                            echo('
                                                <a href="#" class="catalog__card col-xl-4 col-md-4 col-12 p-2 ">
                                                    <div class="catalog__card_img"><img class="lazy" src="./img/catalog/'.($i+1).'.png" alt="Активные компоненты"></div>
                                                    <div class="catalog__card_text">'.$obj[$i].'</div>
                                                    <div class="catalog__line"></div>
                                                </a>'
                                            );
                                        }
                                    }
                                    echo('
                                        </div>
                                        </div>'
                                    );
                                }
                            ?>
                    </div>
                </div>
                <div class="catalog__navigation">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>    
            </div>
        </div>
    </section>
    <section class="map" id="map">
        <div class="container">
            <div class="map__background">
                <div class="map__background img">
                    <div class="map__background_city">
                        <div class="map__background_city-icon"></div>
                        <div class="map__background_city-text">Северо-Западный<br>федеральный округ</div>
                    </div>
                    <div class="map__background_city">
                        <div class="map__background_city-icon"></div>
                        <div class="map__background_city-text">Центральный<br>федеральный округ</div>
                    </div>
                    <div class="map__background_city">
                        <div class="map__background_city-icon"></div>
                        <div class="map__background_city-text">Южный<br>федеральный округ</div>
                    </div>
                    <div class="map__background_city">
                        <div class="map__background_city-icon"></div>
                        <div class="map__background_city-text">Уральский<br>федеральный округ</div>
                    </div>
                    <div class="map__background_city">
                        <div class="map__background_city-icon"></div>
                        <div class="map__background_city-text">Приволжский<br>федеральный округ</div>
                    </div>
                    <div class="map__background_city">
                        <div class="map__background_city-icon"></div>
                        <div class="map__background_city-text">Сибирский<br>федеральный округ</div>
                    </div>
                    <div class="map__background_city">
                        <div class="map__background_city-icon"></div>
                        <div class="map__background_city-text">Дальневосточный<br>федеральный округ</div>
                    </div>
                </div>
            </div>
            <div class="map__text">
                <div class="map__text_title">География поставок</div>
                <div class="map__text_line"></div>
                <div class="map__text_descr">Мы работаем только с надежными транспортными компаниями и организуем доставку в любой регион России или за рубеж </div>
            </div>
        </div>
    </section>
  
    <section class="about" id="about">
        <div class="container">
            <div class="about_line line"></div>
            <div class="about__title title">о компании</div>
            <div class="about__descr">С 1996 года мы занимаемся оптовыми поставками электронных компонентов от ведущих заводов изготовителей из Европы и Азии для Российских производителей.</div>
            <ul class="about__blocks">

                <li class="about__block">
                    <div class="about__block_icon"><img src="./icons/about/home.svg" alt=""></div>
                    <div class="about__block_descr">Изделия в наличии, на складе СПБ и Мск</div>
                </li>

                <li class="about__block">
                    <div class="about__block_icon"><img src="./icons/about/car.svg" alt=""></div>
                    <div class="about__block_descr">Комплексные поставки, предлагаем аналоги</div>
                </li>

                <li class="about__block">
                    <div class="about__block_icon"><img src="./icons/about/puzzle.svg" alt=""></div>
                    <div class="about__block_descr">Официальные  дистрибьюторы 12 заводов-изготовителей</div>
                </li>
            
            </ul>
        </div>
    </section>
    <section class="call" id="call">
        <div class="container">
            <div class="call__title">Закажите обратный звонок</div>
            <div class="call__line line-horizontal"></div>
            <div class="call__descr">Более 150 крупнейших компаний уже доверили нам комплектацию. Давайте работать вместе!</div>
            <form class="call__form" id="form" action="./php/main.php" enctype="multipart/form-data" method="POST">
                <input type="text" data-validate-field="name" name="name" placeholder="Имя">
                <input type="tel" data-validate-field="tel" name="phone" placeholder="Телефон">
                <button type="submit" class="call__form_btn">
                    Отправить
                </button>
            </form>
            <div class="agreement">Нажимая на кнопку, вы даете согласие на обработку <a href="#">персональных данных</a>  и соглашаетесь с условиями <a href="#">пользовательского соглашения</a></div>
        </div>
        <img class="call__background" src="./bg/freeCall.svg" alt="">
    </section>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer__blocks">
                <ul class="footer__block">
                    <li><a href="./index.php"><img src="./icons/LOGO.svg"></a></li>
                    <li class="footer__map">
                        <div class="footer__map_icon"><img src="./icons/footer/map.svg" alt=""></div>
                        <div class="footer__map_text">
                            <div class="footer__map_adress"><a href="#">Санкт-Петербург, ул. Тестовая д. 0 офис 0</a></div>
                            <div class="footer__map_number"><a href="tel:+70000000000">+7 (000) 000-00-00</a></div>
                            <div class="footer__map_mail"><a href="mailto:test@test.ru">test@test.ru</a></div>
                        </div>
                    </li>
                    <li class="footer__map">
                        <div class="footer__map_icon"><img src="./icons/footer/map.svg" alt=""></div>
                        <div class="footer__map_text">
                            <div class="footer__map_adress"><a href="#">Москва, ул. Тестовая д. 0 стр. 0</a></div>
                            <div class="footer__map_number"><a href="tel:+70000000000">+7 (000) 000-00-00</a></div>
                            <div class="footer__map_mail"><a href="mailto:test@test.ru">test@test.ru</a></div>
                        </div>
                    </li>
                </ul>
                <ul class="footer__block">
                    <li class="footer__list">
                        <div class="footer__list_title"><a href="#">Меню</a></div>
                        <div class="footer__list_point"><a href="#header">Главная</a></div>
                        <div class="footer__list_point"><a href="#">О компании</a></div>
                        <div class="footer__list_point"><a href="#">Каталог производителя</a></div>
                        <div class="footer__list_point"><a href="#">Сертификаты</a></div>
                        <div class="footer__list_point"><a href="#">Контакты</a></div>
                    </li>
                    <li class="footer__list">
                        <div class="footer__list_link"><a href="#">Карта сайта</a></div>
                        <div class="footer__list_link"><a href="#">Политика конфиденциальности</a></div>
                    </li>
                </ul>
                <ul class="footer__block">
                    <li class="footer__list">
                        <div class="footer__list_title"><a href="#">Каталог</a></div>
                        <div class="footer__list_blocks">
                            <div class="footer__list_block">
                                <div class="footer__list_point"><a href="#">Активные компоненты</a></div>
                                <div class="footer__list_point"><a href="#">Пассивные компоненты</a></div>
                                <div class="footer__list_point"><a href="#">Светодиоды и светодиодные индикаторы</a></div>
                                <div class="footer__list_point"><a href="#">Установочные изделия</a></div>
                                <div class="footer__list_point"><a href="#">Резонаторы и генераторы компоненты</a></div>
                                <div class="footer__list_point"><a href="#">Акустические компоненты</a></div>
                                <div class="footer__list_point"><a href="#">Реле</a></div>
                                <div class="footer__list_point"><a href="#">Вентиляторы и аксессуары</a></div>
                                <div class="footer__list_point"><a href="#">Кабели, провода, аксессуары</a></div>
                                <div class="footer__list_point"><a href="#">Оборудование и материалы для пайки</a></div>
                            </div>
                            <div class="footer__list_block">
                                <div class="footer__list_point"><a href="#">Элементы питания и аксессуары</a></div>
                                <div class="footer__list_point"><a href="#">Дисплеи жидкокристаллические</a></div>
                                <div class="footer__list_point"><a href="#">Электродвигатели</a></div>
                                <div class="footer__list_point"><a href="#">Антенны</a></div>
                                <div class="footer__list_point"><a href="#">Готовые изделия</a></div>
                                <div class="footer__list_point"><a href="#">Разрядники</a></div>
                                <div class="footer__list_point"><a href="#">Датчики</a></div>
                            </div>
                        </div>
                        
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <section class="black__background"></section>
    <div class="basket">
        <div class="basket__icon">
            <img src="./icons/basket.svg" alt="Корзинаы">
            <div class="basket__icon_number">123</div>
        </div>
    </div>
      <!-- Swiper JS -->
    <script src="./js/jquery.min.js" ></script>
    <script src="./js/jquery.lazy.min.js"></script>
    <script src="./js/jakor.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/inputmask.min.js"></script>
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script>const validate = new window.JustValidate('#form');</script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: "horizontal",
            slidesPerView: 2,
            slidesPerColumnFill:"row",
            spaceBetween: 30,
            loop: false,
            autoplay: false,
            pagination: false,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="./js/main.js"></script>
    
</body>
</html>