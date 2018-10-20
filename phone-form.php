

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Монолит</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/stylemaket.css">
    
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,800,900" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/jquery.cookie/jquery.cookie.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
</script>
    <!--build:js js/main.js -->
    <script src="js/settings.js"></script>
    <script src="js/logon.js"></script>
    <script src="js/catalog.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/basket.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/upbutton.js"></script>
    <script src="js/jquery-2.2.3.min.js"></script>
    
    <!-- endbuild -->
    <script src="js/init.js"></script>
     <link rel="shortcut icon" href="../app/img/favicon.ico" type="image/x-icon">

</head>

<body>

<?
$to = "info@monolit-org.ru";
$tema = "Заявка на обратный звонок";
$message = "Имя: " . $_POST['name'] . "<br>";
$message .= "Телефон: " . $_POST['tel'] . '<br>';
$message .= "Сообщение заявки: " . $_POST['msg'] . "<br>" . "<hr>" . "<br>" . "(Заявка отправлена с сайта)";


$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>






<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3063002", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3063002;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->




<header class="Header">
    <div class="Container HeaderFlex">
        <div class="Left">
            <a class="Logo" href="index.php">
               <img class="Logo__Image" src="img/logogo.png" style="width: 240px; height: 60px; margin-left: -50px; margin-right: 25px; opacity: 0.8;" alt="logo">
                 <!--<span class="Logo__Text Logo__Text_color_black">М
                <span class="Logo__Text_color_pink_bold">онолит</span>-->
                
                    
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
                        <!---->
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
           
                </a>
                
</header>
<div id="upbutton"></div>
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
                        <li><a href="detail-ankeru/anker-regul-po-vusote.php">-Анкер регулировочный <br> по высоте</a></li>
                        
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
         <li><a href="fixators.php">Фиксаторы</a>
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
        <li><a href="samorezu.php">Саморезы</a>
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
       <label class="btn" for="top-box" title="Наше местоположение на карте"></label>
        <div class="top-panel">
             
            <div class="mapmap">
               <iframe src="https://yandex.ru/map-widget/v1/-/CBBmNOQAdA"  frameborder="1" allowfullscreen="true"></iframe>


                
            </div>
        </div>




<div id="phrase"> <br> <br>
	<div id="f-phrase" style="text-align: center; text-decoration: underline;"><h2>Заявка на обратный звонок принята</h2></div>
	<div id="s-phrase" style="text-align: center; text-decoration: underline;"><h3>В скором времени наши менеджеры свяжутся с вами</h3></div> <br> <br>
</div>








<br>
<div class="Container Product-header">
    <h4>Пока заявка обрабатывается обратите внимание на другие товары</h4>
    <p>Нажмите "Подробно" для детального просмотра основных категорий</p>
</div>
<div class="Products Container">
    <article class="Product">
        <a class="Product__Link" href="ugolki.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/u1.jpg" alt="product1">
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
                <h2 class="Product__Name">Уголки</h2>
                <span class="Product__Price Color_pink">11 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="oporu.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/o4.jpg" alt="product2">
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
                <h2 class="Product__Name">Опоры</h2>
                <span class="Product__Price Color_pink">9 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="plastinu.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/p1.jpg" alt="product3">
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
                <h2 class="Product__Name">Пластины</h2>
                <span class="Product__Price Color_pink">3 вида</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="lentu.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/l5.jpg" alt="product4">
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
                <h2 class="Product__Name">Ленты</h2>
                <span class="Product__Price Color_pink">6 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="ankeru.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/a1.jpg" alt="product5">
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
                <h2 class="Product__Name">Анкеры</h2>
                <span class="Product__Price Color_pink">1 вид</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="krepeju.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/k5.jpg" alt="product6">
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
                <h2 class="Product__Name">Крепежи</h2>
                <span class="Product__Price Color_pink">20 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="fixators.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/f5.jpeg" alt="product7">
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
                <h2 class="Product__Name">Фиксаторы</h2>
                <span class="Product__Price Color_pink">6 видов</span>
            </div>
        </a>
    </article>
    <article class="Product">
        <a class="Product__Link" href="samorezu.php">
            <div class="Product__Photo">
                <img class="Product__Image" src="img/details/s5.jpg" alt="product8">
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
                <h2 class="Product__Name">Саморезы</h2>
                <span class="Product__Price Color_pink">8 видов</span>
            </div>
        </a>
    </article>
</div>
<div class="Container Single-button">
    <a href="products.php">
        <div class="ArrowButton Button">Показать все товары
            <span class="Arrow1"></span>
            <span class="Arrow2"></span>
        </div>
    </a>
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

<!-- Rating@Mail.ru logo -->
<a href="https://top.mail.ru/jump?from=3063002">
<img src="//top-fwz1.mail.ru/counter?id=3063002;t=612;l=1" 
style="border:0;" height="40" width="88" alt="Рейтинг@Mail.ru" /></a>
<!-- //Rating@Mail.ru logo -->


<footer class="Footer">
    <div class="Container">
        <p>&copy; 2018 Monolit All Rights Reserved.</p>
        
    </div>

    <!-- Rating@Mail.ru counter -->

</footer>
</body>



</html>
