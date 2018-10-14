<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Пластины</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/stylemaket.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,800,900" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/jquery.cookie/jquery.cookie.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js/main.js"></script>
    <script src="js/init.js"></script>
    <script>
        "use strict";
        $(document).ready(function () {
            let $catalog = $.find("#CatalogPage");
            let prod = new Catalog($catalog);

            //вешать обработчики загрузки страниц на ссылки страниц внизу экрана бессмысленно
            //это надо делать на сервере

        });
    </script>
</head>

<body>
<header class="Header">
    <div class="Container HeaderFlex">
        <div class="Left">
            <a class="Logo" href="index.php">
               <img class="Logo__Image" src="img/logogo.png" style="width: 240px; height: 60px; margin-left: -50px; margin-right: 25px; opacity: 0.8;" alt="logo">
                    
                </span>
            </a>
            <form action="#">
                <input class="SearchTxt" type="text" placeholder="Найти на сайте...">
                <div class="BtnExt">
                
                    <div class="DropDownMenu Row Swing-in-top-fwd">
                        <div class="Column">
                            <h4>WOMAN</h4>
                            <ul>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Sweaters/Knits</a></li>
                                <li><a href="#">Jackets/Coats</a></li>
                                <li><a href="#">Blazers</a></li>
                                <li><a href="#">Denim</a></li>
                                <li><a href="#">Leggins/Pants</a></li>
                                <li><a href="#">Skirts/Shorts</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                            <h4>MAN</h4>
                            <ul>
                                <li><a href="#">Tees/Tank tops</a></li>
                                <li><a href="#">Shirts/Polos</a></li>
                                <li><a href="#">Sweaters</a></li>
                                <li><a href="#">Sweatshirts/Hoodies</a></li>
                                <li><a href="#">Blazers</a></li>
                                <li><a href="#">Jackets/vests</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <input class="SearchBtn" type="submit" value=" ">

            </form>
        </div>
        <div class="Right">
            <div id="rphones">
                 8 (903) 130-43-48 НИКОЛАЙ <br>
                    8 (916) 839-68-55 ТИМУР 
            </div>
    </div>
</header>
<nav class="Menu Container">
    <ul>
         <li><a href="ugolki.php" >Уголки</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Уголки:</h4>
                    <ul>
                        <li><a href="../app/detail-ugolki/mebelnie-ugolki.php">-Мебельные уголки</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok.php">-Крепёжный уголок</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-usilennij-ugolok.php">-Крепёжный усиленный уголок</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok-ravnostoronnij.php">-Крепёжный уголок равносторонний</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok-s-2-usileniem.php">-Крепёжный уголок с двойным усилением</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok-assimetrichnij.php">-Крепёжный уголок ассиметричный</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok-pod-135-gradusov.php">-Крепёжный уголок под 135°</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok-z-obraznij.php">-Крепёжный уголок Z-образный</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok-ankernij.php">-Крепёжный анкерный уголок</a></li>
                        <li><a href="../app/detail-ugolki/krepejnij-ugolok-ravnostoronnij-shirokij.php">-Крепёжный уголок равносторонний, широкий</a></li>
                        <li><a href="../app/detail-ugolki/uglovoi-soedinitel.php">-Угловой соединитель</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="oporu.php">Опоры</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Опоры:</h4>
                    <ul>
                        <li><a href="../app/detail-oporu/skolzyashyaya-opora.php">-Скользящая опора</a></li>
                        <li><a href="../app/detail-oporu/opora-brusa.php">-Опора бруса</a></li>
                        <li><a href="../app/detail-oporu/opora-brusa-zakrutaya.php">-Опора бруса закрытая</a></li>
                        <li><a href="../app/detail-oporu/opora-balki.php">-Опора балки</a></li>
                        <li><a href="../app/detail-oporu/derjatel-balki.php">-Держатель балки</a></li>
                        <li><a href="../app/detail-oporu/skolzashaya-opora-dlya-stropil.php">-Скользящая опора для стропил</a></li>
                        <li><a href="../app/detail-oporu/skolzashaya-opora-dlya-stropil-zakrutaya.php">-Скользящая опора для стропил закрытая</a></li>
                        <li><a href="../app/detail-oporu/zakladnaya-opora.php">-Закладная опора</a></li>
                        <li><a href="../app/detail-oporu/osnovanie-kolonnu.php">-Основание колонны</a></li>
                    </ul>
                </div>
            </div>
        </li>   
        <li><a href="plastinu.php">Пластины</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Пластины:</h4>
                    <ul>
                        <li><a href="../app/detail-plastinu/krepejnaya-plastina.php">-Крепёжная пластина</a></li>
                        <li><a href="../app/detail-plastinu/plastina-soedinitelnaya.php">-Пластина соединительная</a></li>
                        <li><a href="../app/detail-plastinu/gvozdevaya-plastina.php">-Гвоздевая пластина</a></li>
                
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="lentu.php">Ленты</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Ленты:</h4>
                    <ul>
                        <li><a href="../app/detail-lentu/lenta-montajnaya.php">-Лента монтажная</a></li>
                        <li><a href="../app/detail-lentu/lenta-montajnaya-14-mm.php">-Лента монтажная <br> (&Oslash отв. 14мм.)</a></li>
                        <li><a href="../app/detail-lentu/lenta-dlya-ventilyacii_pryamaya.php">-Лента для вентиляции прямая</a></li>
                        <li><a href="../app/detail-lentu/lenta-dlya-ventilyacii_volnoobraznaya.php">-Лента для вентиляции волнообразная</a></li>
                        <li><a href="../app/detail-lentu/perforirovannaya-lenta-dlya-teplogo-pola.php">-Перфорированная лента для тёплого пола</a></li>
                        <li><a href="../app/detail-lentu/tarnaya-lenta.php">-Тарная лента</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="ankeru.php">Анкеры</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Анкеры:</h4>
                    <ul>
                        <li><a href="../app/detail-ankeru/anker-regul-po-vusote.php">-Анкер регулировочный <br> по высоте</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="krepeju.php">Крепежи</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Крепежи:</h4>
                    <ul>
                        <li><a href="../app/detail-krepeji/krepej-dlya-stoek.php">-Крепёж для стоек</a></li>
                        <li><a href="../app/detail-krepeji/okonnue-plastinu.php">-Оконные пластины</a></li>
                        <li><a href="../app/detail-krepeji/podves-pryamoi.php">-Подвес прямой</a></li>
                        <li><a href="../app/detail-krepeji/krab.php">-Краб</a></li>
                        <li><a href="../app/detail-krepeji/shaiba-s-muftoi.php">-Шайба с муфтой</a></li>
                        <li><a href="../app/detail-krepeji/skoba-dlya-vagonki.php">-Скоба для вагонки</a></li>
                        <li><a href="../app/detail-krepeji/krepej-dlya-blokhausa.php">-Крепёж для блокхауса</a></li>
                        <li><a href="../app/detail-krepeji/prujinnij-uzel.php">-Пружинный узел</a></li>
                        <li><a href="../app/detail-krepeji/krepej-dlya-terrasnoi-doski.php">-Крепёж для террасной доски</a></li>
                        <li><a href="../app/detail-krepeji/krepej-dlya-stenovih-panelei-planfix.php">-Крепёж для стеновых панелей "Планфикс"</a></li>
                        <li><a href="../app/detail-krepeji/krepej-dlya-terrasnoi-doski-TWIN.php">-Крепёж для террасной доски "TWIN"</a></li>
                        <li><a href="../app/detail-krepeji/kreplenie-stenovoe.php">-Крепление стеновое</a></li>
                        <li><a href="../app/detail-krepeji/kruchok-vetrovoi.php">-Крючок ветровой</a></li>
                        <li><a href="../app/detail-krepeji/petlya-nakladnaya-cunk.php">-Петля накладная, цинк</a></li>
                        <li><a href="../app/detail-krepeji/petlya-strela.php">-Петля стрела</a></li>
                        <li><a href="../app/detail-krepeji/podveski-mebelnie-cunk.php">-Подвески мебельные, цинк</a></li>
                        <li><a href="../app/detail-krepeji/polkoderjatel.php">-Полкодержатель</a></li>
                        <li><a href="../app/detail-krepeji/proboi-ushko-cunk.php">-Пробой ушко, цинк</a></li>
                        <li><a href="../app/detail-krepeji/ruchka-skoba.php">-Ручка скоба</a></li>
                        <li><a href="../app/detail-krepeji/zadvizhka-cunk.php">-Задвижка, цинк</a></li>
                    </ul>
                </div>
            </div>
        </li>
         <li><a href="krepeju.php">Фиксаторы</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Фиксаторы:</h4>
                    <ul>
                        <li><a href="../app/detail-fixators/zvezdochka.php">-Фиксатор арматуры "звездочка"</a></li>
                        <li><a href="../app/detail-fixators/stulchik.php">-Фиксатор арматуры "стульчик"</a></li>
                        <li><a href="../app/detail-fixators/kubik.php">-Фиксатор арматуры "кубик"</a></li>
                        <li><a href="../app/detail-fixators/podstavka-opora.php">-Подставка-опора на сыпучие поверхности, для кубика 35-50</a></li>
                        <li><a href="../app/detail-fixators/truba.php">-Труба ПНД</a></li>
                        <li><a href="../app/detail-fixators/konus.php">-Фиксатор "конус"</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="oporu.php">Саморезы</a>
            <div class="Square10"></div>
            <div class="DropDownMenu Row Swing-in-top-fwd">
                <div class="Column">
                    <h4>Саморезы:</h4>
                    <ul>
                        <li><a href="../app/detail-samorezu/samorezu-chernie-po-derevy.php">-Саморезы черные по дереву</a></li>
                        <li><a href="../app/detail-samorezu/samorezu-chernie-po-metallu.php">-Саморезы черные по металлу</a></li>
                        <li><a href="../app/detail-samorezu/samorezu-s-pressshaiboi-first.php">-Саморезы с прессшайбой, цинк, наконечник-острый 1</a></li>
                        <li><a href="../app/detail-samorezu/samorezu-s-pressshaiboi-second.php">-Саморезы с прессшайбой, цинк, наконечник-острый 2</a></li>
                        <li><a href="../app/detail-samorezu/samorezu-zheltie-po-derevy.php">-Саморезы желтые по дереву</a></li>
                        <li><a href="../app//detail-samorezu/samorezu-zheltie-universalnie.php">-Саморезы желтые универсальные</a></li>
                        <li><a href="../app/detail-samorezu/samorezu-krovelnie-cunk.php">-Саморезы кровельные, цинк</a></li>
                        <li><a href="../app/detail-samorezu/samorezu-okonnie-zheltie.php">-Саморезы оконные, желтые</a></li>
                        
                    </ul>
                </div>
            </div>
        </li>   
         <nobr><li><a href="Monolit(price).xlsx" download="Monolit(price).xlsx" style="color: #2BBBAD">Скачать прайс</a></nobr>
           
        </li>   
        
    </ul>
</nav>


<input class="open" id="top-box" type="checkbox" hidden>
       <label class="btn" for="top-box"></label>
        <div class="top-panel">
             
            <div class="mapmap">
               <iframe src="https://yandex.ru/map-widget/v1/-/CBBMnWq02D"  frameborder="1" allowfullscreen="true"></iframe>
                
            </div>
        </div>

<div class="BreadCrumbs">
    <div class="Container">
        <div class="Left">
            <h2>Пластины</h2>
        </div>
        <div class="Right">
            <nav>
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    
                    <li><a href="plastinu.php" class="Active">Пластины</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="CatalogPage">
    <div class="Container">
        <div class="LeftMenu">
            <div class="Details">
                <input type="checkbox" id="Category">
                <label for="Category">Категории<span class="Triangle"></span></label>
                <div class="Line"></div>
                <nav class="Swing-in-top-fwd2">
                    <ul>
                       <li><a href="#">Уголки</a></li>
                        <li><a href="oporu.php">Опоры</a></li>
                        <li><a href="plastinu.php">Пластины</a></li>
                        <li><a href="lentu.php">Ленты</a></li>
                        <li><a href="ankeru.php">Анкеры</a></li>
                        <li><a href="krepeju.php">Крепежи</a></li>
                        <li><a href="fixators.php">Фиксаторы</a></li>
                        <li><a href="samorezu.php">Саморезы</a></li>
                        
                    </ul>
                </nav>
            </div>
            
        </div>
        <div class="Products Catalog">
            <div class="Filters Row">
                
                
            </div>
            <div class="SelectorFilters">
                <div class="Selector Selector_row Marginr_10">
                    <div class="Selector__LabelLeft">Сорт. по</div>
                    <div class="Selector__Column Position_relative">
                        <input class="Selector__Input" type="checkbox" id="sortby">
                        <label class="Selector__Box Selector__Box_height_small Width_auto Color_black Selector__Box_paddingl_12"
                               for="sortby">Имени
                            <i class="Triangle"></i>
                        </label>
                        <ul class="Selector__Options Width_full Selector__Options_top_30 Swing-in-top-fwd2">
                            <li class="Selector__Option Selector__Option_paddingl_12 Color_black">Имя</li>
                            
                            <li class="Selector__Option Selector__Option_paddingl_12 Color_black">Цена</li>
                        </ul>
                    </div>
                </div>
                <div class="Selector Selector_row">
                    <div class="Selector__LabelLeft">Показать</div>
                    <div class="Selector__Column Position_relative">
                        <input class="Selector__Input" type="checkbox" id="show">
                        <label class="Selector__Box Selector__Box_height_small Width_auto Color_black Selector__Box_paddingl_12"
                               for="show">09
                            <i class="Triangle"></i>
                        </label>
                        <ul class="Selector__Options Width_full Selector__Options_top_30 Swing-in-top-fwd2">
                            <li class="Selector__Option Selector__Option_paddingl_12 Color_black">09</li>
                            <li class="Selector__Option Selector__Option_paddingl_12 Color_black">45</li>
                            <li class="Selector__Option Selector__Option_paddingl_12 Color_black">90</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="CatalogPage" class="ProductsPage">
                <article class="Product">
                    <a class="Product__Link" href="detail-plastinu/krepejnaya-plastina.php">
                        <div class="Product__Photo">
                            <img class="Product__Image" src="img/details/p1.jpg" alt="product43">
                            <div class="Product__AddBtn">
                                <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                                Подробно
                            </div>
                        </div>
                        <div class="Product__Info">
                            <h2 class="Product__Name">Крепёжная пластина</h2>
                            <span class="Product__Price Color_pink">есть в наличии</span>
                        </div>
                    </a>
                </article>
                <article class="Product">
                    <a class="Product__Link" href="detail-plastinu/plastina-soedinitelnaya.php">
                        <div class="Product__Photo">
                            <img class="Product__Image" src="img/details/p2.jpg" alt="product44">
                            <div class="Product__AddBtn">
                                <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                                Подробно
                            </div>
                        </div>
                        <div class="Product__Info">
                            <h2 class="Product__Name">Пластина соединительная</h2>
                            <span class="Product__Price Color_pink">есть в наличии</span>
                        </div>
                    </a>
                </article>
                <article class="Product">
                    <a class="Product__Link" href="detail-plastinu/gvozdevaya-plastina.php">
                        <div class="Product__Photo">
                            <img class="Product__Image" src="img/details/p3.jpg" alt="product3">
                            <div class="Product__AddBtn">
                                <svg class="BasketSvgWhite" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 32 29" style="enable-background:new 0 0 32 29;" xml:space="preserve" width="32" height="29">
                        <g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="1.3" y2="1"></line>
                            </g>
                            <g>
                                <line class="st0" x1="5.3" y1="1" x2="10.6" y2="19.4"></line>
                            </g>
                            <g>
                                <line class="st0" x1="14.1" y1="6.9" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="25.3" y1="19.4" x2="30.8" y2="7"></line>
                            </g>
                            <g>
                                <line class="st0" x1="10.6" y1="19.4" x2="25.3" y2="19.4"></line>
                            </g>
                            <g>
                                <circle class="st1" cx="9.4" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st1" cx="26.1" cy="26.2" r="1.6"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="9.5" cy="26.2" r="0.8"></circle>
                            </g>
                            <g>
                                <circle class="st2" cx="26.1" cy="26.2" r="0.8"></circle>
                            </g>
                        </g>
                    </svg>
                                Подробно
                            </div>
                        </div>
                        <div class="Product__Info">
                            <h2 class="Product__Name">Гвоздевая пластина</h2>
                            <span class="Product__Price Color_pink">есть в наличии</span>
                        </div>
                    </a>
                </article>
                

            </div>

        </div>
    </div>
</div>

<div id="slide_lft">
  Как купить?
  <div id="slide_in">
    <form style="text-align: center;" name="test" method="POST" action="phone-form.php">

<h6 style="text-align: center;">Заполните форму и мы вам перезвоним</h6>
<hr>

  <p><b>Ваше имя:</b><br>
   <input class="forminp" type="text" autocomplete="off" name="name" >
  </p>
 
  <p>Телефон:<Br>
    <input class="forminp" type="tel" autocomplete="off" name="tel" ><br> <br>
     <p>Сообщение:</p>
<textarea class="forminp" name="msg" id="22" cols="20" rows="5" placeholder="Перезвоните мне"></textarea>

<br><br>

  <p><input type="submit" class="formbtn" name="ok" value="Отправить">

 </form>

  </div>
</div>

<div class="Features ContainerW">
    <div class="Container RowFeatures">
        <div class="FeatureBox">
            <div><img src="img/feature-pic1.png" alt="feature1"></div>
            <h3>Доставка</h3>
            <p>Доставка курьерской службой СДЭК,<br>или другим удобным для вас способом<br>при заполнении формы обратной связи.</p>
        </div>
        <div class="FeatureBox">
            <div class="Pic"><img src="img/feature-pic2.png" alt="feature2"></div>
<h3>Дисконты/Акции</h3>
                <p>Скидки для постоянных клиентов.</p>

        </div>
        <div class="FeatureBox">
            <div class="Pic"><img src="img/feature-pic3.png" alt="feature3"></div>

             <h3>Гарантия качества</h3>
                <p> Высокое качество представленной продукции.
    Быстрое и качественное обслуживание. <br>
    По желанию доставка в удобное для Вас время.</p>

        </div>
    </div>
</div>
<div class="Subscribe">

    <div class="Container Sub">
       
       
        <div class="Right">
            <h5>ИНФОРМАЦИЯ ДЛЯ ЗАКАЗА</h5>
            <form action="contact-form.php" method="POST">
                 <div class="osform"> 
                    <div class="osform1"> 
                <input class="Txt" type="text" name="surname" placeholder="* Фамилия">
                <input class="Txt" type="text" name="name" placeholder="* Имя">
                <input class="Txt" type="text" name="patronymic" placeholder="* Отчество">
                <input class="Txt" type="text" name="tel" placeholder="* Телефон">
                <input class="Txt" type="text" name="email" placeholder="* E-mail"></div>
                    <div class="osform2">
                        <textarea name="msg" id="" cols="30" rows="10" placeholder="Опишите подробно Ваш заказ и в скором времени мы перезвоним для уточнения данных..."></textarea><br>
                        <input class="SearchBtn" type="submit" value="ОФОРМИТЬ">
                    </div>
                
                
                </div>   
              
            </form>
        </div>
    </div>
    <img class="Bkg1" src="img/os-fm.jpg" alt="subscribe background">

</div>
<div class="FooterMenu Container">
    <div class="Col L1">
        <a class="Logo" href="index.php">
            <!--<img class="Logo__Image" src="img/logo.png" alt="logo">-->
            <span class="Logo__Text Logo__Text_color_black">М
                <span class="Logo__Text_color_pink_bold">онолит</span>
                
            </span>
        </a>
        <p>Наша компания является одной из крупных организаций по продаже строительного крепежа. <br>
Основными направлениями являются производство и реализация крепежных изделий. <br>
В наши задачи входит поддержание широкого ассортимента и обязательного наличия на складе. <br>

Гибкая система скидок и индивидуальный подход к каждому клиенту располагает к длительному совместному сотрудничеству. <br>

 
</p>
    </div>
    <nav class="Col L2">
        <div class="Head">
            Монолит
        </div>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="#">Магазин</a></li>
            <li><a href="#">О Нас</a></li>
            <li><a href="#">Как мы работаем</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
    <nav class="Col L3">
        <div class="Head">
            Информация
        </div>
        <ul>
            <li><a href="#">Provacy Policy</a></li>
            <li><a href="#">Как связаться?</a></li>
            <li><a href="#">Как купить?</a></li>
        </ul>
    </nav>
    <nav class="Col L4">
        <div class="Head">
            Категории
        </div>
        <ul>
            <li><a href="ugolki.php">Уголки</a></li>
            <li><a href="oporu.php">Опоры</a></li>
            <li><a href="plastinu.php">Пластины</a></li>
            <li><a href="products.php" style="text-decoration: underline;">Показать все</a></li>
            <li><a href="Monolit(price).xlsx" download="Monolit(price).xlsx" style="color: #2BBBAD; text-decoration: underline;">Скачать прайс</a></li>
        </ul>
            
            
    </nav>
</div>

<footer class="Footer">
    <div class="Container">
        <p>&copy; 2018 Monolit All Rights Reserved.</p>
        
    </div>
<footer class="Footer">
    <div class="Container">
        <p>&copy; 2018 Monolit All Rights Reserved.</p>
        
    </div>
</footer>

</body>

</html>