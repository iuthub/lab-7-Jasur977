<?php
session_start();
if (empty($_SESSION['user'])){
    echo "Accsess denied!";die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Document</title>
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="fonts/stylesheet1.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> <img src="img/logo.png" alt="logo"> </a>
                    <div class="tablet">
                        <a href="tel:+73912168471"> <img src="img/insta.svg" alt="conatct_phone"> +7 (391) 216-84-71</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                            <li class="nav-item">
                                <a class="nav-link" href="#">Ремонт компьютеров </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Ремонт ноутбуков </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Установка ПО</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Блог </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Радио рекорд </a>
                            </li>

                        </ul>
                        <ul class="header_contacts">
                            <li class="conatct_phone" ><a href="tel:+73912168471"> <img src="img/insta.svg" alt="conatct_phone"> +7 (391) 216-84-71</a></li>

                            <li class="call_back" ><a href="#">Заказать обратный звонок</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="main_screen">
        <div class="container">
            <div class="row">
                <div class="col-md-7 me-auto" style="margin-right:auto;">
                    <h1> <span class="bg-orange"> Выездной </span> ремонт ПК <br>
                        и ноутбуков с гарантией <br>
                        <span class="bg-orange" > в Красноярске </span> </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 me-auto">
                    <form action="" class="cost-form">
                        <div class="form-item">
                            <p class="form-title">
                                Узнайте стоимость ремонта за 5 минут
                            </p>
                        </div>
                        <div class="form-item">
                            <input type="tel"  placeholder="Ваш номер:">
                        </div>
                        <div class="form-item">
                            <button class="form-sent" >Узнать стоимость ремонта</button>
                        </div>
                        <div class="form-item">
                            <ul class="social-links" >
                                <li><a href="#">Или напишите нам: </a></li>
                                <li><a href="#"> <img src="img/Vector (1).svg" alt="insta"> </a></li>
                                <li><a href="#"> <img src="img/Vector (2).svg" alt="fb"> </a></li>
                                <li><a href="#"> <img src="img/Vector (3).svg" alt="vk"> </a></li>
                                <li><a href="#"> <img src="img/ok1.svg" alt="ok"> </a></li>
                            </ul>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="opportunities">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="opportunities-item" >
                            <div class="item-img">
                                <img src="img/001-tools.svg" alt="img">
                            </div>
                            <div class="item-text">
                                Ремонт, модернизация и обслуживание
                                компьютеров, ноутбуков на дому и офисе
                                по низким ценам
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="opportunities-item">
                            <div class="item-img">
                                <img src="img/003-target.svg" alt="">
                            </div>
                            <div class="item-text">
                                Ремонт, модернизация и обслуживание
                                компьютеров, ноутбуков на дому и офисе
                                по низким ценам
                            </div>

                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="opportunities-item">
                            <div class="item-img">
                                <img src="img/002-speed.svg" alt="">
                            </div>
                            <div class="item-text">
                                Ремонт, модернизация и обслуживание
                                компьютеров, ноутбуков на дому и офисе
                                по низким ценам
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="About-company" >
        <div class="container">
            <div class="section-title">
                О компании
            </div>
            <div class="company-info-text">
                <p>
                    Поломка компьютера является неприятностью, способной принести большие проблемы и неудобства
                    для пользователя. Это может стать причиной потери данных, личной информации, лицензионного ПО
                    или рабочей документации. Одним из вариантов решения данной проблемы является обращение
                    к компьютерному мастеру, который выполнит ремонт ПК и ноутбуков, предоставляя гарантию
                    на проделанную работу. Это будет наиболее выгодным решением, исключающим лишние траты.
                </p>
                <p>
                    «Сектор-ПК» предоставляет услуги по обслуживанию и ремонту персональных компьютеров в Красноярске
                    по выгодной стоимости. Всем работами занимается частный мастер с большим опытом работы,
                    что является гарантией высокого качества оказываемых услуг, независимо от их специфики:
                </p>
            </div>
            <div class="row services">
                <div class="col-lg-3 col-md-4">
                    <div class="service-item text-center ">
                        <div class="service-img">
                            <img src="img/01.jpg" alt="service">
                        </div>
                        <div class="service-name">
                            Ремонт ноутбуков
                        </div>
                        <div class="service-list">
                            <ul>
                                <li>Замена экрана / клавиатуры</li>
                                <li>Ремонт системы охлаждения</li>
                                <li>Ремонт материнской платы </li>
                                <li>Пайка микросхем и BGA</li>
                            </ul>
                        </div>
                        <div class="order-service">
                            <a href="#">Заказать услугу </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="service-item text-center ">
                        <div class="service-img">
                            <img src="img/02.jpg" alt="service">
                        </div>
                        <div class="service-name">
                            Ремонт компьютеров
                        </div>
                        <div class="service-list">
                            <ul>
                                <li>Диагностика системы</li>
                                <li>Чистка системного блока</li>
                                <li>Ремонт/замена деталей</li>
                                <li>Сборка ПК</li>
                            </ul>
                        </div>
                        <div class="order-service">
                            <a href="#">Заказать услугу </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="service-item text-center ">
                        <div class="service-img">
                            <img src="img/03.jpg" alt="service">
                        </div>
                        <div class="service-name">
                            Установка программ на ПК
                        </div>
                        <div class="service-list">
                            <ul>
                                <li>Установка ОС и ее проверка </li>
                                <li>Инсталляция ПО и драйверов </li>
                                <li>Исправление ошибок </li>
                                <li>Удалению лишних программ</li>
                            </ul>
                        </div>
                        <div class="order-service">
                            <a href="#">Заказать услугу </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4">
                    <div class="service-item text-center ">
                        <div class="service-img">
                            <img src="img/04.jpg" alt="service">
                        </div>
                        <div class="service-name">
                            Восстановление данных
                        </div>
                        <div class="service-list">
                            <ul>
                                <li>С флешки</li>
                                <li>С жесткого диска</li>

                                <li> <span class="strok"> Восстановление
                        после форматирования</span></li>
                            </ul>
                        </div>
                        <div class="order-service">
                            <a href="#">Заказать услугу </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-we" >
        <div class="container">
            <div class="section-title text-center">
                Почему нужно обратиться в «Сектор-ПК»
            </div>
            <div class="section-subtitle text-center">
                Большой спектр предлагаемых услуг позволяет любому клиенту получать обслуживание
                на высшем уровне, несмотря на особенность проделанных работ. Такая вариативность – отличная
                возможность заказать комплексное обслуживание персонального ПК.
                Обратившись ко мне за помощью в модернизации и ремонте ПК, каждый клиент получает следующее:
            </div>

            <div class="why-we-block row text-center">
                <div class="col">
                    <div class="wy-we-item">
                        <div class="item-image">
                            <img src="img/0001.png" alt="item-image">
                        </div>
                        <div class="item-name">
                            Доступная <br> стоимость
                        </div>
                        <div class="item-description">
                            Цена ремонта ПК зависит от сложности.
                            В прайсе указана стоимость, которая является
                            фиксированной.
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="wy-we-item">
                        <div class="item-image">
                            <img src="img/0002.png" alt="item-image">
                        </div>
                        <div class="item-name">
                            Гарантия <br> качества
                        </div>
                        <div class="item-description">
                            Предоставляется гарантия на
                            оказываемые услуги
                            и применяемые детали – все
                            выполняется своими руками
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="wy-we-item">
                        <div class="item-image">
                            <img src="img/0003.png" alt="item-image">
                        </div>
                        <div class="item-name">
                            Оригинальные <br> комплектующие
                        </div>
                        <div class="item-description">
                            Использование комплектующих оригинального
                            качества при модернизации или сборке
                            компьютера.
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="wy-we-item">
                        <div class="item-image">
                            <img src="img/0004.png" alt="item-image">
                        </div>
                        <div class="item-name">
                            Индивидуальный <br> подход
                        </div>
                        <div class="item-description">
                            В своей работе я использую индивидуальный
                            подход к каждому клиенту. Принимаю к сведению
                            все пожелания.
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="wy-we-item">
                        <div class="item-image">
                            <img src="img/0005.png" alt="item-image">
                        </div>
                        <div class="item-name">
                            Всегда <br> вовремя
                        </div>
                        <div class="item-description">
                            Сроки выполнения работ оговариваются заранее.
                            При возникновении непредвиденных ситуаций
                            я сразу ставлю в известность клиента.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-request">
        <div class="container">
            <div class="section-title text-center">
                У нас можно заказать обслуживание и ремонт ПК<br>
                в Красноярске по выгодным ценам
            </div>
            <div class="section-subtitle text-center">
                Оформить заявку возможно в удобное время по
                предварительному звонку. Качество гарантируется – <br>
                современная материально-техническая база и большой опыт
                в восстановлении персональных<br> компьютеров и ноутбуков.
                Получить ответы на вопросы можно при помощи телефона или<br>
                мессенджеров (ОК, ВК, ФБ, Инст).
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-6"></div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="form-title">
                        Оставьте заявку и мы перезвоним <br>
                        Вам в течение 5 минут
                    </div>
                    <form action="">

                        <div class="form-item">
                            <input type="text" name="name" placeholder="Ваше имя:">
                        </div>

                        <div class="form-item">
                            <input type="tel" name="phone" placeholder="Ваш номер:">
                        </div>

                        <div class="form-item">
                            <input type="email" name="email" placeholder="Ваш e-mail:">
                        </div>
                        <div class="form-item">
                            <button>Оставить заяявку на обратный звонок</button>
                        </div>

                        <div class="form-item">
                            <ul class="social-links" >
                                <li><a href="#" >Или напишите нам:</a> </li>
                                <li><a href="#"> <img src="img/Vector (1).svg" alt="insta"> </a></li>
                                <li><a href="#"> <img src="img/Vector (2).svg" alt="fb"> </a></li>
                                <li><a href="#"> <img src="img/Vector (3).svg" alt="vk"> </a></li>
                                <li><a href="#"> <img src="img/ok1.svg" alt="ok"> </a></li>
                            </ul>
                        </div>
                        <div class="form-item">
                            <input type="checkbox" name="agreemant">
                            <a href="#"> Согласие на обратботку персональных данных </a>
                        </div>



                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    <section class="contacts">

        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A194f31dcbc16305ca6408e0bdeccdc103641d4fcaa1fb766a1eae5f631de5d81&amp;source=constructor" width="100%" height="630" frameborder="0"></iframe>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="contacts-block">

                        <div class="section-title"> Контакты: </div>

                        <div class="contacts-title">Телефон:</div>

                        <div class="contacts-item"> <a href="tel: +998998051204">+7 (391) 216-84-81</a> </div>

                        <div class="contacts-title"> Адреса приёма техники в ремонт:</div>

                        <div class="contacts-item"> <a href="https://yandex.ru/map-widget/v1/?um=constructor%3A194f31dcbc16305ca6408e0bdeccdc103641d4fcaa1fb766a1eae5f631de5d81&amp;source=constructor" target="_blank" > 3-я Дальневосточная, 85А <br> Красной Армии, 121</a> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contacts-title">Присоединяйтесь к нам <br> в социальных сетях:</div>
                            </div>
                            <div class="col-md-6">
                                <div class="contacts-item social ">
                                    <ul class="social-links">
                                        <li><a href="#"> <img src="img/Vector (1).svg" alt="insta"> </a></li>
                                        <li><a href="#"> <img src="img/Vector (2).svg" alt="fb"> </a></li>
                                        <li><a href="#"> <img src="img/Vector (3).svg" alt="vk"> </a></li>
                                        <li><a href="#"> <img src="img/ok1.svg" alt="ok"> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-about">
                        <div class="foter-logo">
                            <a href="#"> <img src="img/footer_log.png" alt=" Futer logo"> </a>
                        </div>
                        <div class="footer-abt-text">
                            Качественный  и бытрый ремонт компьютеров в Красноярске
                            по самым лучшим ценам.
                        </div>
                    </div>
                    <div class="confidencial ">
                        <p>
                            <a href="#">
                                Соглашение на обработку персональных данных
                                Политика конфиденциальности
                            </a>
                        </p>
                        <p class="copyright" >
                            Все права защищены. © 2020 Сектор ПН
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu">

                        <ul>
                            <div class="footer-title">Наши услуги</div>
                            <li><a href="#"> Ремонт компьютеров</a></li>
                            <li><a href="#">Ремонт ноутбуков</a></li>
                            <li><a href="#">Установка программ на ПК</a></li>
                            <li><a href="#">Восстановление данных</a></li>
                            <li><a href="#">Модернизация и сборка ПК</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="contacts-block">


                        <div class="footer-title">Контакты:</div>



                        <div class="contacts-title">Телефон:</div>

                        <div class="contacts-item"> <a href="tel: +998998051204">+7 (391) 216-84-81</a> </div>

                        <div class="contacts-title"> Адреса приёма техники в ремонт:</div>

                        <div class="contacts-item"> <a href="https://yandex.ru/map-widget/v1/?um=constructor%3A194f31dcbc16305ca6408e0bdeccdc103641d4fcaa1fb766a1eae5f631de5d81&amp;source=constructor" target="_blank" > 3-я Дальневосточная, 85А <br> Красной Армии, 121</a> </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="contacts-title">Присоединяйтесь к нам <br> в социальных сетях:</div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="contacts-item social ">
                                    <ul class="social-links">
                                        <li><a href="#"> <img src="img/footer1.svg" alt="insta"> </a></li>
                                        <li><a href="#"> <img src="img/footer2.svg" alt="fb"> </a></li>
                                        <li><a href="#"> <img src="img/footer3.svg" alt="vk"> </a></li>
                                        <li><a href="#"> <img src="img/footer4.svg" alt="ok"> </a></li>


                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="confidencial mobile">
                                    <p>
                                        <a href="#">
                                            Соглашение на обработку персональных данных
                                            Политика конфиденциальности
                                        </a>
                                    </p>
                                    <p class="copyright" >
                                        Все права защищены. © 2020 Сектор ПН
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </footer>

</div>

<script src="bootstrap/bootstrap.js" ></script>

</body>
</html>







