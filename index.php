<?php
$wallet = ""; // Номер вашего QIWI Кошелька

$name = "Imax-cinema"; // имя вашего антикинотеатра
$site = ""; //адрес для описания

$price = "1999"; //отображающаяся цена за фильм
$oldprice = "2684"; //отображающаяся цена без скидок

/* название фильмов */
$film1 = "Счастья! Здоровья!";
$film2= "Хищник";
$film3= "Гоголь. Страшная месть";

$film4= "Багровая мята";
$film5= "Темные отражения";
$film6 = "Бельканто";

$film7 = "Альфа";
$film8 = "22 мили";
$film9 = "Отель «Артемида»";

$film10 = "Моё поколение";
$film11 = "Миссия невыполнима: Последствия";
$film12 = "Мег: Монстр глубины";

/* адреса антикинотеатра */
$city1= "Москва"; //название города
$adress1 = 'ТЦ "Moscow Plaza" - Сокольническая площадь, метро "Сокольники"'; //адрес кинотеатра в городе

$city2 = "Санкт-Петербург"; //название города
$adress2 = 'ТЦ "Пассаж" - Невский проспект, д.48, метро "Невский проспект"'; //адрес кинотеатра в городе

$city3 = "Екатеринбург"; //название города
$adress3 = 'ТЦ "Гринвич" - ул. 8 марта, д.46, метро "Геологическая"'; //адрес кинотеатра в городе

$city4 = "Новосибирск"; //название города
$adress4 = 'ТРЦ "Аура", ул. Военная, д.5, метро "Площадь Ленина"'; //адрес кинотеатра в городе

$city5 = "Ростов"; //название города
$adress5 = 'Молл "Горизонт", Пр. М.Нагибина, 32/2'; //адрес кинотеатра в городе

$city6 ="Казань"; //название города
$adress6 = '"Suvar Plaza" - ул. Спартаковская, 6, метро "Аметьево"'; //адрес кинотеатра в городе
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $name?> - Сеть антикинотеатров по всей России</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/datepicker.min.css" rel="stylesheet" type="text/css"> 
     <script src="jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
     <script language=JavaScript>
      <!--
var message="*";
///////////////////////////////////
      function clickIE4(){
      if (event.button==2){
      alert(message);
      return false;
      }
      }
function clickNS4(e){
      if (document.layers||document.getElementById&&!document.all){
      if (e.which==2||e.which==3){
      alert(message);
      return false;
      }
      }
      }
if (document.layers){
      document.captureEvents(Event.MOUSEDOWN);
      document.onmousedown=clickNS4;
      }
      else if (document.all&&!document.getElementById){
      document.onmousedown=clickIE4;
      }
document.oncontextmenu=new Function("alert(message);return false")
// --> 
      </script>
     <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicons.png">
    <style>
    .filmbox { 
border: 3px solid #333333;;
}
.room { 
margin-top: 32px;
border: 4px double #333333; 
}
</style>
</head>
<body>
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/slider/1.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Антикинотеатр <span><?php echo $name ?></span></h1>
                    <p class="animated fadeInRightBig">Всё для Вас и Вашей второй половинки</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Заказать онлайн <br> со скидкой 15%</a>
                </div>
            </div>
            <div class="item" style="background-image: url(images/slider/3.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Антикинотеатр <span><?php echo $name ?></span></h1>
                    <p class="animated fadeInRightBig">Приватность, комфортный отдых, большой выбор фильмов</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Заказать онлайн <br> со скидкой 15%</a>
                </div>
            </div>
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div>
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1><b><?php echo $name ?></b></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="scroll"><a href="#services">Сейчас в кино</a></li>
                    <li class="scroll"><a href="#rooms">Залы</a></li>
                    <li class="scroll"><a href="#pricing">Услуги</a></li>
                      <li class="scroll"><a href="#menus">Меню</a></li>
                    <li class="scroll"><a href="#about-us0">О нас</a></li>
                    <li class="scroll"><a href="#portfolio">Галерея</a></li>
                    <li class="scroll"><a href="#contact">Контакты</a></li>
                </ul>
            </div>
            <div id="menuu">
                <div id="blockajax" class="advert"><!-- <a onclick="openbox('Wrapp');return false;" --> <a class="btn btn-primary btn-lg btn-block" href="#services">Есть вопрос? Пиши нам в онлайн чат!</a></div>
            </div>
            </div>
    </header>
    <div id="Wrapp" style="display:none">
    <div id='tt'><div class="close" onclick="openbox('Wrapp')">x</div>
         <span>Ваш заказа принят! <br><div class="glyphicon glyphicon-envelope" style="color:#028fcc"></div>
           <hr><br>Спасибо что вы с нами!</span><br>
           <a class="navbar-brand" href="index-2.html">
               <h1><img class="img-responsive" src="images/logo2.png" alt="logo"></h1>
           </a>
         </div>

    </div>
  
<section id="services">
    <div id="zakaz" class="container">
        <div  class="heading wow fadeInUp">
            <div  class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2><b>Сейчас в кино</b></h2>
                </div>
            </div>
        </div>
        <div class="text-center our-services">
            <div class="row">
                <div class="col-sm-4 wow fadeInUp">
                    <div class=""><a href="formpay.html"><img class="filmbox"  src="../images/film/1.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film1 ?></h3>
                        <span>Аренда зала - <strike><?php echo $oldprice?></strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px"><b>Заказать ОНЛАЙН</b></button>
                    </div>
                </div>
               <div class="col-sm-4 wow fadeInUp">
                    <div class=""><a href="formpay.html"><img class="filmbox" " src="images/film/2.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film2 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px"><b>Заказать ОНЛАЙН</b></button>
                    </div>
                </div>
                 <div class="col-sm-4 wow fadeInUp">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/3.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film3 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px"><b>Заказать ОНЛАЙН</b></button>
                    </div>
                </div>
                 <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/4.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film4 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                 <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/5.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film5 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                 <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/6.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film6 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/7.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film7 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img  class="filmbox"  src="images/film/8.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film8 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/9.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film9 ?></h3>
                        <span>Аренда зала - <strike><?php echo $oldprice?></strike><br><?php echo $price?></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="1" href="formpay.html" style="margin-top:20px">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/10.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film10 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="2" href="formpay.html">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/11.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film11 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="3" href="formpay.html">Заказать ОНЛАЙН</button>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInDown">
                    <div class=""><a href="formpay.html"><img class="filmbox" src="images/film/12.jpg" width="240" heght="360"></a>
                        <i class=""></i>
                    </div>
                    <div class="">
                        <h3 style="font-weight: bold;"><?php echo $film12 ?></h3>
                        <span>Аренда зала - <strike> <?php echo $oldprice?> </strike><br><span style='font-size: 16px'><b><?php echo $price ?></b></span></span><br>
                        <span>От 1 до 8 человек</span><br>
                        <button class="zakaz" data-zal="4" href="formpay.html">Заказать ОНЛАЙН</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
                <section id="rooms" style="margin-bottom: 5px;">
    <div class="container">
        <div class="row" style="text-align: center;">
                    <h1 style="margin-bottom: 30px;"><b>Наши залы</b><br> <span style="font-size: 18px;">Выберите один из доступных залов,<br>прежде чем оформить заказ.</span> </h1>
                         <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img class="room" height="240" width="240" src="images/chicago.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>«Голливуд»</b></h3>
                         <h4>на двоих</h4>
                      
                                           <div >    <span class="folio-expand"><a class="scroll" href="images/portfolio/rooms/1.jpg"
                                    
                                                                  data-lightbox="portfolio"><b>посмотреть фото</b></a> </span> </div>
                                                                        <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/2.jpg">ref</a></span>
                                                                              <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/3.jpg">ref</a></span>
                                                                        <button class="dop_zakaz v20" style="margin-top: 20px;"onclick="var a = $('.pricesss').html(); var b = Number(a) + 0; $('.pricesss').html(b);$('.zala').html('«Голливуд»');$('.dop_zakaz.v20').html('Выбрано');$('.dop_zakaz.v20').attr('disabled'); $('.dop_zakaz.v21').html('Выбрать'); $('.dop_zakaz.v22').html('Выбрать'); $('.dop_zakaz.v23').html('Выбрать'); $('.dop_zakaz.v24').html('Выбрать'); $('.dop_zakaz.v25').html('Выбрать');"
                    >Выбрать</button>
                </div>
            </div>
                                                 <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img class="room" height="240" width="240" src="images/pandora.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>«Пандора»</b></h3>
                         <h4>до 16 человек</h4>
                      
                                           <div >    <span class="folio-expand"><a class="scroll" href="images/portfolio/rooms/51.jpg"
                                    
                                                                  data-lightbox="portfolio"><b>посмотреть фото</b></a> </span> </div>
                                                                        <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/52.jpg">ref</a></span>
                                                                              <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/53.jpg">ref</a></span>
                                                                        <button class="dop_zakaz v25" style="margin-top: 20px;"onclick="var a = $('.pricesss').html(); var b = Number(a) + 0; $('.pricesss').html(b);$('.zala').html('«Пандора»');$('.dop_zakaz.v20').html('Выбрать');$('.dop_zakaz.v20').attr('disabled'); $('.dop_zakaz.v21').html('Выбрать'); $('.dop_zakaz.v22').html('Выбрать'); $('.dop_zakaz.v23').html('Выбрать'); $('.dop_zakaz.v24').html('Выбрать'); $('.dop_zakaz.v25').html('Выбрано');
"
                    >Выбрать</button>
                </div>
            </div>
            

               <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img class="room" height="240" width="240" src="images/cosmos.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>«Космос»</b></h3>
                      <h4>до 8 человек</h4>
                                           <div >    <span class="folio-expand"><a class="scroll" href="images/portfolio/rooms/21.jpg"
                                                                  data-lightbox="portfolio"><b>посмотреть фото</b></a> </span> </div>
                                                                                                                                          <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/22.jpg">ref</a></span>
                                                                              <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/23.jpg">ref</a></span>
                                                                        <button class="dop_zakaz v22" style="margin-top: 20px;"onclick="var a = $('.pricesss').html(); var b = Number(a) + 0; $('.pricesss').html(b);$('.zala').html('«Космос»');$('.dop_zakaz.v22').html('Выбрано');$('.dop_zakaz.v22').attr('disabled'); $('.dop_zakaz.v21').html('Выбрать'); $('.dop_zakaz.v20').html('Выбрать'); $('.dop_zakaz.v23').html('Выбрать'); $('.dop_zakaz.v24').html('Выбрать'); $('.dop_zakaz.v25').html('Выбрать');"
                    >Выбрать</button>
                </div>
            </div>
                       <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img class="room" height="240" width="240" src="images/etno.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>«Этно»</b></h3>
                      <h4>до 16 человек</h4>
                                           <div >    <span class="folio-expand"><a class="scroll" href="images/portfolio/rooms/31.jpg"
                                                                  data-lightbox="portfolio"><b>посмотреть фото</b></a> </span> </div>
                                                                                                                                          <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/32.jpg">ref</a></span>
                                                                              <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/33.jpg">ref</a></span>
                                                                        <button class="dop_zakaz v23" style="margin-top: 20px;"onclick="var a = $('.pricesss').html(); var b = Number(a) + 0; $('.pricesss').html(b);$('.zala').html('«Этно»');$('.dop_zakaz.v23').html('Выбрано');$('.dop_zakaz.v23').attr('disabled'); $('.dop_zakaz.v21').html('Выбрать'); $('.dop_zakaz.v22').html('Выбрать'); $('.dop_zakaz.v20').html('Выбрать'); $('.dop_zakaz.v24').html('Выбрать'); $('.dop_zakaz.v25').html('Выбрать');"
                    >Выбрать</button>
                </div>
            </div>
                                   <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img class="room" height="240" width="240" src="images/nero.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>«Неро»</b></h3>
                      <h4>до 8 человек</h4>
                                           <div >    <span class="folio-expand"><a class="scroll" href="images/portfolio/rooms/41.jpg"
                                                                  data-lightbox="portfolio"><b>посмотреть фото</b></a> </span> </div>
                                                                                                                                          <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/42.jpg">ref</a></span>
                                                                              <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/43.jpg">ref</a></span>
                                                                        <button class="dop_zakaz v24" style="margin-top: 20px;"onclick="var a = $('.pricesss').html(); var b = Number(a) + 0; $('.pricesss').html(b);$('.zala').html('«Неро»');$('.dop_zakaz.v24').html('Выбрано');$('.dop_zakaz.v24').attr('disabled'); $('.dop_zakaz.v21').html('Выбрать'); $('.dop_zakaz.v22').html('Выбрать'); $('.dop_zakaz.v23').html('Выбрать'); $('.dop_zakaz.v20').html('Выбрать'); $('.dop_zakaz.v25').html('Выбрать');"
                    >Выбрать</button>
                </div>
            </div>
                                                  <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img class="room" height="240" width="240" src="images/luxe.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>«Люкс»</b></h3>
                      <h4>на двоих</h4>
                                           <div >    <span class="folio-expand"><a class="scroll" href="images/portfolio/rooms/11.jpg"
                                                                  data-lightbox="portfolio"><b>посмотреть фото</b></a> </span> </div>

                                                                                                                                          <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/rooms/12.jpg">ref</a></span>
                                                                              <span class="folio-expand" style="display: none";><a data-lightbox="portfolioя" class="scrool"  href="images/portfolio/rooms/13.jpg">ref</a></span>
                                                                        <button class="dop_zakaz v21" style="margin-top: 20px;"onclick="var a = $('.pricesss').html(); var b = Number(a) + 0; $('.pricesss').html(b);$('.zala').html('«Люкс»');$('.dop_zakaz.v21').html('Выбрано');$('.dop_zakaz.v21').attr('disabled'); $('.dop_zakaz.v20').html('Выбрать'); $('.dop_zakaz.v22').html('Выбрать'); $('.dop_zakaz.v23').html('Выбрать'); $('.dop_zakaz.v24').html('Выбрать'); $('.dop_zakaz.v25').html('Выбрать');"
                    >Выбрать</button>
                </div>
            </div>

            </div>
           
            </div>
            </section>
<section id="vips">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2><b>Наши услуги и цены</b></h2>
                    <p>В нашем антикинотеатре, кроме посещения стадартного киносеанса, Вы имеете возможность устроить вечеринку со своими друзьями, либо же расслабиться со второй половинкой
                        и провести время в очень уютной и романтической обстановке.</p>
                    <h4>Чем же специальные услуги отличаются от обычного сеанса?</h4>
                    <p>В стоимость обычного сеанса входит только просмотр фильмов, фрукты и напитки, а например специальном пакете "свидание", помимо большого экрана и уютного дивана, присутствует
                        красиво оформленный "столик на двоих", который представляет из себя включенные в стоимость оформление свечами и лепестками роз, нарезку фруктов, бутылочку вина на выбор, 'Lite' сет роллов, напитки (на выбор), просмотр фильма, игровая консоль Xbox One + Kinect с широким выбором новинок и самое главное - в стоимость уже включена фотосессия от профессиналов, а время сеанса увеличено на целых два часа! </p>
                        <p>                          <span class="folio-expand"><a class="scroll" href="images/portfolio/dating/1.PNG"
                                                                  data-lightbox="portfolio"><b>ПРОСМОТРЕТЬ ГАЛЕРЕЮ</b></a> </span>  </p>

  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/2.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/3.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/4.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/5.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/6.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/7.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/8.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/9.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/10.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/11.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/12.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/13.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/14.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/15.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/16.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/17.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/18.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/19.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/20.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/21.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/22.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/23.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/24.PNG">ref</a></span>
  <span class="folio-expand" style="display: none";><a data-lightbox="portfolio" class="scrool"  href="images/portfolio/dating/25.PNG">ref</a></span>
                              
                    <h4><b>Стоимость - 4290 RUB</b><br><span style="font-size: 14px;">(самый популярный выбор наших клиентов)</span></h4>
                    <h3 style="display: none">VIP-зал, любой фильм на выбор</h3>
                    <button class="svidanie" data-zal="1" href="formpay.html" style="margin-top:20px">Забронировать свидание</button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="vip"><a><img src="images/vip.jpg" width="300" heght="220"></a>
                    <i class=""></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Цены и услуги</h2>
          <p>Не знаете, что выбрать? Тогда мы организуем мероприятие для вас! Выберите пакет услуг и сногшибательно проведите время со своими друзьями или второй половинкой. </p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3 style="font-weight: bold">Обычный сеанс</h3>
            <ul>
                   <li><span style="font-size:32px; color:#00aff0; font-weight: bold;">1490 RUB</span></li>
                <li style="font-weight: bold;">2 часа</li>
                <li>Включено: фрукты, фильм на выбор, караоке, xbox kinect. Любое количество человек, в зависимости от зала. </li>
                <li style="font-weight: bold;">от 375RUB/час на человека </li>
                
              </ul>
              <a href="#services" class="seans">ПЕРЕЙТИ</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3 style="font-weight: bold">«Свидание»</h3>
              <ul>
                   <li><span style="font-size:32px; color: white; font-weight: bold;">4290 RUB</span></li>
                <li style="font-weight: bold;">4 часа/на двоих</li>
                <li>Включено: любой фильм на выбор, вино, роллы и фрукты, украшение зала лепестками роз и свечами, фотосессия. </li>
                <li style="font-weight: bold;">Абсолютная приватность.</li>
              </ul>                     <a href="#" class="svidanie">ЗАКАЗАТЬ</a>
               </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3 style="font-weight: bold">«VIP Свидание»</h3>
            
                          <ul>
                   <li><span style="font-size:32px; color: #00aff0; font-weight: bold;">6490 RUB</span></li>
                <li style="font-weight: bold;">на всю ночь/на двоих</li>
                <li>Включено: любой фильм на выбор, мартини асти, роллы и фрукты, украшение зала лепестками роз и свечами, фотосессия.</li>
                <li style="font-weight: bold;">Абсолютная приватность.</li>
                
              </ul>
                      <a href="#" class="vipsvidanie">ЗАКАЗАТЬ</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3 style="font-weight: bold">«Компания»</h3>
          <ul>
                   <li><span style="font-size:32px; color: #00aff0; font-weight: bold;">7990 RUB</span></li>
                <li style="font-weight: bold;">4 часа/до 8 человек</li>
                <li>Включено: любое кино, караоке, xbox kinect, настольные игры, фреш (3 литра), 2 большие пиццы, маффины (8шт.), фотосессия.</li>
                <li style="font-weight: bold;">Доп. человек: 1000 RUB.</li>
                
              </ul>
              <a href="#" class="compania">ЗАКАЗАТЬ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="menus" style="margin-bottom: 40px;">
    <div class="container">
        <div class="row" style="text-align: center;">
		
		<!--МЕНЮ-->
		
            <h1 style="margin-bottom: 50px;"><b>Наше меню</b></h1>
              <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/nachos.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Начосы</b><br>120гр</h3>
                    <span><strike>229</strike><br><b>190 RUB</b></span><br>
                    <button class="dop_zakaz v34" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 190; $('.pricesss').html(b);$('.qwe').append('<div>Начосы - 190RUB</div>');$('.dop_zakaz.v34').html('Добавлено!');$('.dop_zakaz.v34').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>          

                        <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img width="240" height="360" src="images/popcorn.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Большой попкорн</b><br>соленый или сладкий</h3>
                    
                    <span><strike>290</strike><br><b>249 RUB</b></span><br>
                    <button class="dop_zakaz v13" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 249; $('.pricesss').html(b);$('.qwe').append('<div>Большой попкорн - 249RUB</div>');$('.dop_zakaz.v13').html('Добавлено!');"
                    >Добавить к заказу</button>
                </div>
            </div>

              <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/cakes.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                <h3><b>Маффины</b><br>6 штук</h3>
                    <span><strike>639</strike><br><b>549 RUB</b></span><br>
                    <button class="dop_zakaz v31" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 549; $('.pricesss').html(b);$('.qwe').append('<div>Маффины (6шт.) - 549RUB</div>');$('.dop_zakaz.v31').html('Добавлено!');$('.dop_zakaz.v31').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>   
                  <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img width="240" height="360" src="images/juice.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Фреш-сок (500мл)</b></h3>
                    <h4>вкус на выбор</h4>
                    <span><strike>229</strike><br><b>199 RUB</b></span><br>
                    <button class="dop_zakaz v7" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 290; $('.pricesss').html(b);$('.qwe').append('<div>Фреш (0.5) - 290RUB</div>');$('.dop_zakaz.v7').html('Добавлено!');$('.dop_zakaz.v7').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>
               <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/pizza.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Пицца - средняя (32cм)</b></h3>
                    <h4>на выбор</h4>
                    <span><strike>539</strike><br><b>449 RUB</b></span><br>
                    <button class="dop_zakaz v8" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 449; $('.pricesss').html(b);$('.qwe').append('<div>Средняя пицца - 499RUB</div>');$('.dop_zakaz.v8').html('Добавлено!');$('.dop_zakaz.v8').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>
               <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/pizza.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Пицца - большая (40см)</b></h3>
                    <h4>вкус на выбор</h4>
                    <span><strike>690</strike><br><b>590 RUB</b></span><br>
                    <button class="dop_zakaz v9" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 590; $('.pricesss').html(b);$('.qwe').append('<div>Большая пицца - 590RUB</div>');$('.dop_zakaz.v9').html('Добавлено!');$('.dop_zakaz.v9').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>
                          
              <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img src="images/kal.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Кальян</b></h3>
                    <h4>вкус на выбор</h4>
                    <span><strike>1400</strike><br><b>1090 RUB</b></span><br>
                    <button class="dop_zakaz v1" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 1090; $('.pricesss').html(b);$('.qwe').append('<div>Кальян - 1090RUB</div>');$('.dop_zakaz.v1').html('Добавлено!');$('.dop_zakaz.v1').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img src="images/liteset.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Сет "Lite"</b></h3>
                    <h4>на 2-4 персоны</h4>
                    <span><strike>949</strike><br><b>749 RUB</b></span><br>
                    <button class="dop_zakaz v2" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 749; $('.pricesss').html(b);$('.qwe').append('<div>Сет Lite - 749RUB</div>');$('.dop_zakaz.v2').html('Добавлено!');"
                    >Добавить к заказу</button>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img src="images/middleset.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Сет "Middle"</b></h3>
                    <h4>на 2-4 персоны</h4>
                    <span><strike>1549</strike><br><b>1349 RUB</b></span><br>
                    <button class="dop_zakaz v3" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 1349; $('.pricesss').html(b);$('.qwe').append('<div>Сет Middle - 1349RUB</div>');$('.dop_zakaz.v3').html('Добавлено!');"
                    >Добавить к заказу</button>
                </div>
            </div>
     
                                        <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/martini.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Martini Asti</b><br>белое, сладкое</h3>
                    <span><strike>1990</strike><br><b>1690 RUB</b></span><br>
                    <button class="dop_zakaz v32" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 1690; $('.pricesss').html(b);$('.qwe').append('<div>Martini Asti - белое,сладкое - 1690RUB</div>');$('.dop_zakaz.v32').html('Добавлено!');$('.dop_zakaz.v32').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>          
                                        <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/bosca.jpg"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Шампанское Bosca</b><br>белое, сладкое</h3>
                    <span><strike>690</strike><br><b>590 RUB</b></span><br>
                    <button class="dop_zakaz v33" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 590; $('.pricesss').html(b);$('.qwe').append('<div>Шампанское Bosca - 590RUB</div>');$('.dop_zakaz.v33').html('Добавлено!');$('.dop_zakaz.v33').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>    
                    <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img width="240" height="360" src="images/crucillon.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Crucillon Rosado</b><br>розовое, сухое</h3>
                    
                    <span><strike>890</strike><br><b>729 RUB</b></span><br>
                    <button class="dop_zakaz v6" style="margin-top: 20px;"
                        onclick="var a = $('.pricesss').html(); var b = Number(a) + 729; $('.pricesss').html(b);$('.qwe').append('<div>Crucillon Rosado - розовое, сухое - 729 RUB</div>');$('.dop_zakaz.v6').html('Добавлено!');"
                    >Добавить к заказу</button>
                </div>
            </div> 
                <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/mayu.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Mayu Sauvignon Blanc</b><br>белое, сухое</h3>
                    <span><strike>1090</strike><br><b>919 RUB</b></span><br>
                    <button class="dop_zakaz v10" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 919; $('.pricesss').html(b);$('.qwe').append('<div>Mayu Sauvignon Blanc - белое, сухое - 919RUB</div>');$('.dop_zakaz.v10').html('Добавлено!');$('.dop_zakaz.v10').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>
                     <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img src="images/donq.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Don Quixote Red</b><br>красное, полусладкое</h3>
                    
                    <span><strike>519</strike><br><b>449 RUB</b></span><br>
                    <button class="dop_zakaz v5" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 449; $('.pricesss').html(b);$('.qwe').append('<div>Don Quixote -  красное, полусладкое - 449RUB</div>');$('.dop_zakaz.v5').html('Добавлено!');"
                    >Добавить к заказу</button>
                </div>
            </div>
                   
                            <div class="col-sm-4 wow fadeInUp">
                <div class=""><a><img height="360" width="240" src="images/vinareal.png"></a>
                    <i class=""></i>
                </div>
                <div class="">
                    <h3><b>Vina Real</b><br>красное, сухое</h3>
                    <span><strike>1449</strike><br><b>1290 RUB</b></span><br>
                    <button class="dop_zakaz v12" style="margin-top: 20px;"
                            onclick="var a = $('.pricesss').html(); var b = Number(a) + 1290; $('.pricesss').html(b);$('.qwe').append('<div>Vina Real - красное, сухое - 1290RUB</div>');$('.dop_zakaz.v12').html('Добавлено!');$('.dop_zakaz.v12').attr('disabled');"
                    >Добавить к заказу</button>
                </div>
            </div>
                 </div>
    </div>
</section>

<section style="background: #00aff0;" id="about-us0">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2 style="font-weight: bold; color: white;">О нашем антикинотеатре</h2>
            <p><span style="color: white; font-size: 18px; font-weight: bold;">«<?php echo $name ?>» - лучшее место для отдыха!</span></p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
                 <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-thumbs-up"></i>
            </div>
            <div class="service-info">
              <h3 style="font-weight: bold; color: white;">Уникальные  залы</h3>
              <p style="color: white;"> К Вашим услугам 6 просторных зала с уникальным дизайном. Интерьер залов вас приятно удивит. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="service-info">
              <h3 style="font-weight: bold; color: white;">Смотри кино</h3>
              <p style="color: white;"> Смотри со своими друзьями любимое кино на FHD экране с диагональю пять метров. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-birthday-cake"></i>
            </div>
            <div class="service-info">
              <h3 style="font-weight: bold; color: white;">Устрой вечеринку</h3>
              <p style="color: white;">Организуй вечеринку или девичник, отметь День Рождения в кругу друзей и знакомых.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-heart"></i>
            </div>
            <div class="service-info">
              <h3 style="font-weight: bold; color: white;">Устрой свидание</h3>
              <p style="color: white;">Устрой свидание для своей второй половинки в романтически оформленном лепестками роз и свечами зале </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="service-info">
              <h3 style="font-weight: bold; color: white;">Пой в караоке</h3>
              <p style="color: white;">Слушай музыку и пой в караоке!<br><br></p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gamepad"></i>
            </div>
            <div class="service-info">
              <h3 style="font-weight: bold; color: white;">Играй на приставке</h3>
              <p style="color: white;">Соревнуйся с друзьями в любых играх на приставке Xbox One Kinect.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section style="background: #00aff0;"  id="about-us" class="parallax">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2><b>О нас</b></h2>
                    <p><b><?php echo $name ?> является сетью лучших антикинотеатров в России. Наше заведение предназчено как для молодых пар, так и небольших компаний друзей. Мы занимаемся организацией свиданий и праздников под ключ. 
                    <p>Делая заказ у нас, вы сможете посмотреть фильм на большом экране без посторонних в комфортном и приватном, атмосферно оформленном зале и устроить
                       романтическое свидание для своей второй половинки. К Вашим услугам шесть личных залов с уникальным
                        интерьером. В помещениях создана неповторимая уютная и теплая атмосфера. В стоимость всех залов включено оформление, мягкие игрушки и прочее!</b> </p> <b>Технические аспекты наших залов: большой пятиметровый FHD экран, караоке, Xbox One Kinect.</b></p>
                    <p><b>Сервис: приветливые администраторы, которые готовы ответить на все вопросы и помочь в любой ситуации.
                        Разнообразные дополнительные услуги на ваш выбор:присутствут бар и широкий выбор яств, которые вы имеете возможность заказывать из обилия соседних ресторанов, возможность заказать профессиональную фотосессию и организацию мероприятий под любой вкус!</p><p><a style="color: white;" class="scroll" href="#portfolio">ПЕРЕЙТИ К ГАЛЕРЕЕ</a></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="lead"><b>Приватность</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                 aria-valuetransitiongoal="99"> <b>Оценка клиентов: </b>99%
                            </div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <p class="lead"><b>Экран</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                 aria-valuetransitiongoal="89"><b>Оценка клиентов: </b>89%
                            </div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p class="lead"><b>Обслуживание</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                 aria-valuetransitiongoal="97"> <b>Оценка клиентов: </b>97%
                            </div>
                        </div>
                    </div>
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <p class="lead"><b>Звук</b></p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                 aria-valuetransitiongoal="90"> <b>Оценка клиентов: </b>90%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms"
                 data-wow-delay="300ms">
                <h2><b>Наша галерея</b></h2>
                <p>Наши услуги в фотогалерее!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/1PKRcGVye5Y.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name?></h3>
                                    <p>Кинотеатр для двоих</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/kN1rn83ClKM.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/2_OqQl-uFlo.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name?></h3>
                                    <p>Приватные свидания</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/o38Pithnr5M.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/c6JEk5fAtuE.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name ?></h3>
                                    <p>Фильмы в лучшем качестве</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/-USSimGiPm0.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/375oUCQjBYU.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name ?></h3>
                                    <p>Приватность</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/wQgG3HmanTo.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/c86RG4UK13k.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name ?></h3>
                                    <p>Любые праздники</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/Rowedw6ZZgM.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/mKcN-9HWwos.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name ?></h3>
                                    <p>Большой бар</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/phlvOOJC3co.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/Q1lkujoR6wA.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name ?></h3>
                                    <p>Уютный отдых</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/VXhJVtytwj8.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="folio-image">
                        <img class="img-responsive" src="images/portfolio/X5cF_-goB_M.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <div class="overlay-content">
                            <div class="overlay-text">
                                <div class="folio-info">
                                    <h3><?php echo $name ?></h3>
                                    <p>Фильмы на ваш выбор</p>
                                </div>
                                <div class="folio-overview">
                                    <span class="folio-expand"><a href="images/portfolio/1/c38NurYg600.jpg"
                                                                  data-lightbox="portfolio"><i
                                            class="fa fa-search-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
    </div>
</section>
</div>
    </div>
</section>
<div id="yandex-map">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A232f97551bb8c36b2dbf891fd9a45e61a16e5cbbfee0236c697be6597a131cd4&amp;width=100%25&amp;height=600&amp;lang=ru_UA&amp;scroll=true"></script>
</div>
<section>

    <div id="contact-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms"
                     data-wow-delay="300ms">
                    <h2>Наши контакты</h2>
                 <p>Для нас очень важен Ваш голос! Оставьте внизу отзыв о нас или задайте вопрос. Мы обязательно
                        свяжемся с Вами в ближайшее время.</p>
                </div>
            </div>
            <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-sm-6">
                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Имя"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Адрес Вашей почты" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Тема"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4"
                                          placeholder="Введите Ваше сообщение" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                    <div id="contact" class="col-sm-6">
                        <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <ul class="address">
							    <p>     <li><i class="fa fa-globe"></i> <span><b>Наш сайт:</b></span> <a style="color: #dd0b35;"
                              href="index.php"><?php echo $site ?></a></p>
                               <p>     <li><i class="fa fa-phone"></i> <span> <b>По поводу вопросов </b></span> писать в онлайн чат</p>
							  <li><i class="fa fa-map-marker"></i> <span> <b><?php echo $city1 ?></b> </span>: <?php echo $adress1 ?></li>
								<li><i class="fa fa-map-marker"></i> <span><b><?php echo $city2 ?></b></span>: <?php echo $adress2 ?></li>
                                <li><i class="fa fa-map-marker"></i> <span><b><?php echo $city3 ?></b></span>: <?php echo $adress3 ?></li>
                                <li><i class="fa fa-map-marker"></i> <span><b><?php echo $city4 ?></b></span>: <?php echo $adress4 ?></li>
                                <li><i class="fa fa-map-marker"></i> <span><b><?php echo $city5 ?></b></span>: <?php echo $adress5 ?></li>
                                <li><i class="fa fa-map-marker"></i> <span><b><?php echo $city6 ?></b></span>: <?php echo $adress6 ?><br></li>     
                      
                                <p><li><span><p><a style="font-size: 24px;"><b><br><br>Внимание!</b></a></p><a><b>В сети появилось огромное количество мошенников, использующие дизайн нашего сайта и представляющихся от нашего лица. Наш единственный на данный момент адрес сайта - </a><a href="index.php" style="color: #dd0b35;"><?php echo $site ?></a>! Отличить мошеннические версии сайта вы можете по неграмотно составленному описанию услуг и плохо отображающимся элементам интерфейса страницы. Так-же администрация антикинотеатра спешит предупредить, что при пропуске оплаченного вами сеанса - средства не будут возвращены на вашу карту/кошелёк.</b></span></li></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="formBlock" id="popup" >
    <div class="pricesss" style="display: none;"></div>
    <div class="overlay"></div>
    <div class="formBlock-content">
        <a href="#" class="close"></a>
        
        <div class="chosen_film">
            <h3>Вы бронируете:</h3>
                  <div id="zal" class="zal"></div>
            <img id="filmImg" class="filmImg">
            <div id="filmTitle" class="filmTitle"></div>
            <input type="hidden" id="zal" name="zal">
            <input type="hidden" id="film" name="film">
           

            <div class="dop">
                                        <div class="ttt"><br>Зал: <span class="zala">не выбрано</span></div>
                            
                <div class="ttt"><br>Дополнительно (еда, напитки, алкоголь):</div>
                <div class="qwe">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="input-box">
            <h3>Выберите дату:</h3>
                 <div class="datepicker-here"></div>
            <h3>Выберите сеанс:</h3>
            <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time1" name="times" required value="09:00">
                <label for="time1">09:00</label>
            </div>
            <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time2" name="times" required value="11:00">
                <label for="time2">11:00</label>
            </div>
            <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time3" name="times" required value="13:00">
                <label for="time3">13:00</label>
            </div>
            <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time4" name="times" required value="15:00">
                <label for="time4">15:00</label>
            </div>
            <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time5" name="times" required value="17:00">
                <label for="time5">17:00</label>
            </div>
            <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time6" name="times" required value="19:00">
                <label for="time6">19:00</label>
            </div>
          <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time7" name="times" required value="21:00">
                <label for="time7">21:00</label>
            </div>
			<div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time8" name="times" required value="23:00">
                <label for="time8">23:00</label>
            </div>
          <div class="checkbox">
                <input class="acb" onclick="deRequire('acb')" type="checkbox" id="time9" name="times" required value="01:00">
                <label for="time9">01:00</label>			
        </div>
		<div class="form_field" data-type="select" data-is-required="">
            <h3>Выберите город посещения:</h3>
<div class="form_field_select">
<select class="custom-select" name="city" placeholder="">
<option selected="selected"><?php echo $city1 ?></option>
<option><?php echo $city2 ?></option>
<option><?php echo $city3 ?></option>
<option><?php echo $city4 ?></option>
<option><?php echo $city5 ?></option>
<option><?php echo $city6 ?></option>
</select>
</div>	
<span><br></span>
            <div class="input-box">
                <label>Ф.И.О.</label>
                <input type="text" id="fio" name="firstname" required="required">
            </div>
            <div class="input-box">
                <label>Email</label>
                <input id="email" type="email" name="email">
            </div>
            <div class="input-box">
                <label>Телефон</label>
                <input type="tel" id="phone" name="phone" required="required">
            </div>
			
			
			
             <input type="hidden" name="receiver" value="<?php echo $wallet ?>">
            <input type="hidden" name="formcomment" value="Антикинотеатр: <?php echo $name ?>">
            <input type="hidden" name="short-dest" value="Оплачивает:">
            <input type="hidden" name="label" value="">
            <input type="hidden" name="quickpay-form" value="donate">
            <input type="hidden" name="targets" value="Аренда зала">
            <input type="hidden" name="sum" value="2000" data-type="number">
            <input type="hidden" name="comment" value="">
            
            <div class="input-submit">
                <div class="price"><span class="total">0</span><span class="currency"> RUB (с учётом ндс) </span></div>
                <input type="submit" class="btn btn-primary" id="order-button" value="Заказать">
            </div>
    

    </div>
</div>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="maps/api/js/script1.html"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/mousescroll.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.html"></script>
<script src="js/datepicker.min.js"></script>

<script type="text/javascript">
	$("#order-button").click(function() {
		var amount = $(".total").text();
		var name = $("#fio").val();
		var mail = $("#email").val();
		var phone = $("#phone").val();

		if (name !== "" && mail !== "" && phone !== "") {
		    location.href = "https://qiwi.com/payment/form/99?amountFraction=0&currency=RUB&extra['account']=<?php echo $wallet; ?>&extra['comment']=&amountInteger=" + amount;
		} else {
			alert("Вы заполнили не все поля.");
		}
	});
</script>

<script type="text/javascript">
  function openbox(id,tt) {
    var div = document.getElementById(id);
    var tt_div = document.getElementById(tt);
    if(div.style.display == 'block') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
  }
</script>
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '4rKovaGZGn';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>