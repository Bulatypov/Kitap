<?php 
require_once('load_user.php'); 
require_once('settings.php'); 
$authors = true;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>КИТАП – первая онлайн-библиотека татарской литературы</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/authors.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once('header.php'); ?>
    

    <main>
        <div class="container" style="margin-top: 2em;">
            <div class="row">
                <div class="col-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                            <li data-target="#myCarousel" data-slide-to="7"></li>
                            <li data-target="#myCarousel" data-slide-to="8"></li>
                        </ol>
                        <div class="container">
                            <div class="row">
                                <div class="col-12" style="margin-top: 2%;">
                                    <h2 class="car_head">Авторы</h2>
                                    <h4 class="car_head_describe">Самые известные поэты и писатели татарской литературы</h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner" style="margin-bottom: 5%;">
                            <div class="carousel-item active">
                                <img class="first-slide" src="../images/white.png" alt="First slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/tukay.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                            <p>Габдулла Тукай - знаменитый татарский народный поэт и писатель, родился в 1886 г. Он рано осиротел, и его воспитанием занимались его многочисленные бедные родственники, которые считали его лишним в своих семьях.</p>
                                            <p>Габдулла был одаренным мальчиком и в возрасте 16 лет он написал свои первые стихи, потом начал переводить на татарский язык многочисленные произведения. В 1907 г. он переехал в Казань, чтобы начать карьеру писателя и поэта.</p> 
                                            <p>Габдулла Табай умер в 1913 г. в возрасте 26 лет. Но несмотря на короткую жизнь, он успел оставить немало работ.</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Габдулла Тукай</h4>
                                            <h5 class="years_author">(1886 - 1913)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=1">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <img class="second-slide" src="../images/white.png" alt="Second slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/jalil.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                            <p>Родился Муса Джалиль 2 февраля 1906 года в деревне Мустафино. Образование было получено в медресе. Джалиль с 1919 года является членом комсомола. Образование Муса продолжил в МГУ, где учился на литературном отделении.</p>
                                            <p>Впервые произведение Джалиля было напечатано в 1919 году, а первый его сборник опубликовали в 1925 («Мы идем»).</p>
                                            <p>В 1941 году ушел на фронт. В плену в биографии Мусы Джалиля все же находилось место для творчества. За работу в подпольной группе был казнен в Берлине 25 августа 1944 года. В 1956 году писателя и активиста назвали Героем Советского Союза.</p>
            
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Муса Джалиль</h4>
                                            <h5 class="years_author">(1906 - 1944)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=2">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="carousel-item">
                                <img class="third-slide" src="../images/white.png" alt="Third slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/alish.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                             <p>Абдулла Алишев родился 15 сентября 1908 года в деревне Каюки. В 1927 г. поступил в Казанский землеустроительный техникум. В 1933 г. перешёл на журналистскую работу, ответственный секретарь журнала «Пионер каляме».</p>
                                            <p>С 1939 г. — член Союза писателей СССР. В 1941 году, перед самой войной, был редактором татарского радиокомитета.</p>
                                            <p>С начала войны Абдулла Алиш — на фронте. В октябре 1941 под Брянском был взят в плен и брошен в концлагерь, где встретился с Мусой Джалилем; попал в легион «Идель-Урал». За участие в подпольной организации казнён на гильотине 25 августа 1944 в военной тюрьме Плётцензее в Берлине.</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Абдулла Алиш</h4>
                                            <h5 class="years_author">(1908 - 1944)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=3">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="carousel-item">
                                <img class="fourth-slide" src="../images/white.png" alt="Fourth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/Kol-Gali.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                            <p>Биографические сведения о Кул Гали немногочисленны и противоречивы.</p>
                                            <p>Согласно «История Булгарии», Кул Гали происходил из башкирского племени Айле.  Поэт окончил медресе в городе Хорезме и там обучал шакирдов, позже вернулся на родину. Его наиболее известное произведение — «Кыйсса-и Йосыф» (Сказание о Иусуфе). Согласно Мухаметову, Кул Гали умер в городе Буляр. Согласно «Таварих-и Болгария» поэт погиб во время похода Тамерлана на Золотую Орду в конце XIV века.</p>
                                            <p>Все сведения по биографии поэта отсылают к одному и тому же сочинению «Таварих-и Болгария» («История Булгарии») Таджедина Ялсыгулова.</p>
            
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Кул Гали</h4>
                                            <h5 class="years_author">(нач.XIV в. - кон.XIV в.)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=4">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="carousel-item">
                                <img class="fifth-slide" src="../images/white.png" alt="Fifth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/Galiev.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                            <p>Шаукат Галиев — известный татарский писатель, поэт. Является одним из ярчайших представителей татарской детской литературы второй половины двадцатого века. Родился 20 ноября 1928 года в деревне Большие Бакырче.</p>
                                            <p>Он отмечен множеством государственных премий. За книги «Шавали», «Удивительные и забавные происшествия», «Забава», «Вкусный дом», «Кутбутдин — меткий стрелок», «С папой в кабинете» в 1972 году был удостоен звания лауреата Государственной премии РТ им. Г.Тукая.</p>
                                            <p>Шаукат Галиев скончался 7 мая 2011 года на 83-м году жизни, похоронен на Татарском кладбище города Казани.</p>
            
            
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Шаукат Галиев</h4>
                                            <h5 class="years_author">(1928 - 2011)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=5">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <div class="carousel-item">
                                <img class="sixth-slide" src="../images/white.png" alt="Sixth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/Nasiri.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                            <p>Габделькаюм Габденнасырович Насыров (Каюм Насыйри) родился 2 февраля 1825 года в деревне Верхние Ширданы Свияжского. Всю свою жизнь Каюм Насыри посвятил литературной и научной деятельности. Вообще он был богато одаренным, всесторонне развитым человеком своего времени.</p>
                                            <p>Каюм Насыри внёс большой вклад в развитие татарской публицистики и критики. Изданные им календари, заметки, статьи на общественно-педагогические и литературно-критические темы явились для своего времени значительным событием в идеологической жизни татарского народа. Особое значение в его деятельности имело регулярное издание календарей - своего рода заменителя татарской периодической печати в условиях отсутствия татарской периодики.</p>
            
            
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Каюм Насыри</h4>
                                            <h5 class="years_author">(1825 - 1902)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=6">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                              <div class="carousel-item">
                                <img class="seventh-slide" src="../images/white.png" alt="Seventh slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/taktash.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                            <p>Мухамметхади Хайруллович Такташев родился 1 января 1901 года в деревне Сыркыды. Первоначальное образование получил в медресе родной деревни. Во время учёбы начал сочинять стихи в подражание Г. Тукаю.</p>
                                            <p>В 1918 году публикует первое стихотворение «Төркстан сахраларында» («В пустынях Туркестана»). Осенью того же года возвращается в родную деревню.</p>
                                            <p>Летом 1922 года — в Москве; поступает в Коммунистический университет трудящихся Востока; Вскоре переезжает в Казань. Его новые произведения издаются практически ежегодно.Умер от тифа 8 декабря 1931 года в Казани.</p>
            
            
            
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Хади Такташ</h4>
                                            <h5 class="years_author">(1901 - 1931)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=7">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="carousel-item">
                                <img class="eight-slide" src="../images/white.png" alt="Eigth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/karim.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                            <p>Родился Фатих 9 января 1909 года. Первое образование в биографии Фатиха Карима было получено в родном селе Аитово. Затем же стал учиться в педагогическом техникуме, а после – землеустроительном техникуме Казани. Первые свои произведения написал довольно рано.</p>
                                            <p>Одно из произведений писателя повлекло за собой обвинение в клевете, а Фатиха Карима арестовали и осудили на 10 леты. Но вскоре оправдали. Писатель почти сразу после оправдания добровольно ушел воевать. В жестких военных условиях в биографии Фатиха Карима возникло новое воодушевление. Его произведения тех времен наиболее ценны.</p>
                                            <p>9 февраля 1945 года Фатих Карим геройски погиб.</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Фатих Карим</h4>
                                            <h5 class="years_author">(1909 - 1945)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=8">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        <div class="carousel-item">
                                <img class="nineth-slide" src="../images/white.png" alt="Nineth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-4 order-md-1">
                                            <img class="featurette-image img-fluid author_car mx-auto" src="authors/authors_img/isanbet.jpg">
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h5 class="featurette-heading asd">Краткая биография</h5>
                                          <p>Наки Исанбет (настоящее имя Наки Сиразетдинович Закиров) родился 29 декабря 1899 года в деревне Малояз. Рос и воспитывался в семье муллы. Получил начальное образование в сельском медресе.</p>
                                          <p>Его самые первые публикации относятся к 1910 году. Поэмы «Бродяга», «Учительница», стихотворения «Против лицемерия» наполнены раздумьями о судьбах народа, месте поэта в современном обществе. В стихотворениях, вошедших в сборник «Набат» (1925), воспевается свободный коллективный труд.</p>
                                          <p>Наки Исанбет скончался 15 сентября 1992 года и похоронен в Казани. На доме, где он жил, установлена мемориальная доска. Одна из улиц в Советском районе города Казани носит имя выдающегося писателя.</p>
           
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-4">
                                            <h4 class="name_author">Наки Исанбет</h4>
                                            <h5 class="years_author">(1899 - 1992)</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <a href="author.php?author_id=9">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once('footer.php'); ?>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
</body>

</html>