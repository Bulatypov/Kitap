<?php 
require_once('load_user.php'); 
require_once('settings.php');
$index = true;

if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    echo "Ошибка: Не удалась создать соединение с базой MySQL и вот почему: \n";
    echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    exit;
}

$query = "SELECT * FROM books";
$result = $mysqli->query($query);
$books_kol = mysqli_num_rows($result);
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
    <link rel="shortcut icon" href="images/logo_icon_brauser.png" type="image/png">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    
    <?php require_once('header.php'); ?>
    
    <main>
        <div class="second_header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 ml-2">
                        <div class="row" style="margin-top: 8%;">
                            <img src="../images/kit_sin.svg" class="dark_logo">
                        </div>
                        <div class="row" style="margin-top: 2%;">
                            <h1>электронная библиотека<br>татарской литературы</h1>
                        </div>
                        <div class="row" style="margin-top: 7%;"> </div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="achives">
                                <div class="item_achives"><img src="../images/book-stack.svg" alt="" class="item_achives_img"><b><?php echo $books_kol;
                                    if($books_kol %10 >=5 || $books_kol %10 == 0){
                                        echo ' книг';
                                    }
                                    else if($books_kol %10 == 1){
                                        echo ' книга';
                                    }
                                    else{
                                        echo ' книги';
                                    }
                                    ?> добавлена</b></div>
                                <div class="item_achives"><img src="../images/earpods.svg" alt="" class="item_achives_img"><b>Разработка аудиокниг</b></div>
                                <div class="item_achives"><img src="../images/star.svg" alt="" class="item_achives_img"><b>Доступность редких&nbspкниг</b></div>
                                <div class="item_achives"><img src="../images/design.svg" alt="" class="item_achives_img"><b>Удобный интерфейс</b></div>
                                <div class="item_achives"><img src="../images/wifi..svg" alt="" class="item_achives_img"><b>Онлайн и офлайн</b></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <img class="monument_img" src="../images/monument_jalil.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
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
                        </ol>
                        <div class="container">
                            <div class="row">
                                <div class="col-12" style="margin-top: 2%;">
                                    <h2 class="car_head">Популярное</h2>
                                    <h4 class="car_head_describe">Самые популярные произведения татарской литературы</h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner" style="margin-bottom: 5%;">
                            <div class="carousel-item active">
                                <img class="first-slide" src="../images/white.png" alt="First slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=127">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/Һарри Поттер һәм Фәлсәфәче ташы.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h5 class="featurette-heading asd">О книге:</h5>
                                            <p>Книга Гарри Поттер и философский камень – это удивительная история мальчика-сироты, который узнал о своей принадлежности к тайному волшебному миру, который существует внутри реального мира. Гарри с рождения записан в школу чародейства Хогвартс, куда в одиннадцатилетнем возрасте и отправляется.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:3%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанр:</h5>
                                            <div class="q">Зарубежная литература</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                        <a href="book.php?book_id=127"><img class="read_more" src="../images/button-RU.png"></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="second-slide" src="../images/white.png" alt="Second slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=131">
                                                 <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%9C%D0%BE%D0%B0%D0%B1%D0%B8%D1%82%D1%81%D0%BA%D0%B0%D1%8F%20%D1%82%D0%B5%D1%82%D1%80%D0%B0%D0%B4%D1%8C.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                            <p>«Моабитская тетрадь» — цикл стихотворений татарского поэта Мусы Джалиля, написанный им в Моабитской тюрьме. В 1946 бывший военнопленный Нигмат Терегулов принес в Союз писателей Татарии блокнот с шестью десятками стихов Джалиля. Через год из советского консульства в Брюсселе пришла вторая тетрадь. Из Моабитской тюрьмы ее вынес бельгийский патриот Андре Тиммерманс и, выполняя последнюю волю поэта, отправил стихи на родину.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанр:</h5>
                                            <div class="q">Военная литература</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=131"><img class="read_more" src="../images/button-RU.png"></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                           <div class="carousel-item">
                                <img class="third-slide" src="../images/white.png" alt="Third slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=129">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%A8%D1%83%D1%80%D0%B0%D0%BB%D0%B5.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                            <p>Сказка татарского поэта Габдуллы Тукая "Шурале" повествует о смекалке молодого парня, который не только избавился от Шурале, но и оставил его в дураках. Шурале - это мифическое существо, дух леса. Он изображается как длинное нагое существо, похожее на человека, с длинными пальцами, которыми он щекочет людей до смерти, с рогом на лбу, уродливое и страшное. Он живет в лесу, нападает на людей и лошадей.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                             <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=129">
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
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=5">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/Мой друг Мансур.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Роман "Мой друг Мансур" представляет писателя, уже получившего признание в Татарии. Книга эта о вчерашних крестьянах, строителях первой пятилетии. О времени, когда все создавалось заново: и города, и заводы, и люди... Через судьбы героев видим мы, как утверждались новые взгляды на жизнь, новые принципы, продиктованные социальным опытом советского строя. Каждый характер нарисован писателем во всем его национальном своеобразии и человеческой неповторимости. </p>

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Роман    </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                             <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=5">
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
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=19">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%9C%D0%BE%D1%81%D1%82%D0%B0%D1%84%D0%B0.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                      <p>Классик татарской литературы Фатих Амирхан оставил нам в своих произведениях яркие реалистические картины жизни татар в дореволюционной России. Его проза впитала в себя живые богатства народного языка. В книгу включены повести и рассказы «Хаят», «Фатхулла хазрет», «Счастливый день», «Любовь Габдельбасыра» и др. В них с присущей писателю глубиной изображается душевная красота и нелегкая участь татарской женщины до Октября, разоблачается невежество, нравственное убожество и фанатизм служителей религии.</p>

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Классическая проза</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                             <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=19">
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
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=24">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%98%D0%BA%D0%B5%D0%BD%D1%87%D0%B5%20%D0%B3%D0%BE%D0%BC%D0%B5%D1%80.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Этот роман — один из первых образцов романтизма европейского типа в татарской литературе. На фоне масштабной картины жизни всех слоев татарского общества рубежа веков писатель воссоздает историю стремления молодого поколения татар к другой жизни. «Молодые сердца» — люди, желающие изменить действительность к лучшему, освободиться от предопределенности, победить ее.</p>

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Роман</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=24">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="eighth-slide" src="../images/white.png" alt="Eighth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=27">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/Тел турында кайбер фикерләр.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Роман известного татарского писателя Гумера Баширова «Честь», принадлежит к лучшим произведениям советской литературы о колхозной деревне в годы Великой Отечественной войны. Герои Г. Баширова — это те рядовые труженики, без повседневной работы которых ни одно великое дело не совершается в стране. Психологически правдивое изображение людей, проникновенный лиризм, картины природы, народные песни придают роману задушевную поэтичность.</p>

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Исторические приключения, Роман</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                             <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=27">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="ninth-slide" src="../images/white.png" alt="Ninth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=107">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%90%D1%82%D0%B8%D0%BB%D0%BB%D0%B0.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                           <p>Книга знакомит читателя с выдающимся старейшим писателем Татарии. О чем бы ни писал он - о сегодняшнем дне или о недавнем прошлом своего народа - в центре внимания проблемы этические, раскрывающие духовный мир героев, обретение ими своего жизненного пути. Интерес к нравственному началу в человеке движет пером писателя, которого отличают художественное мастерство, искренность, психологическая достоверность. </p>
       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Современная проза</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                             <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=107">
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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                            <li data-target="#myCarousel1" data-slide-to="3"></li>
                            <li data-target="#myCarousel1" data-slide-to="4"></li>
                            <li data-target="#myCarousel1" data-slide-to="5"></li>
                            <li data-target="#myCarousel1" data-slide-to="6"></li>
                            <li data-target="#myCarousel1" data-slide-to="7"></li>
                            <li data-target="#myCarousel1" data-slide-to="8"></li>
                        </ol>
                        <div class="container">
                            <div class="row">
                                <div class="col-12" style="margin-top: 2%;">
                                    <h2 class="car_head">Детям</h2>
                                    <h4 class="car_head_describe">Книжки для самых маленьких</h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner" style="margin-bottom: 5%;">
                            
                            <div class="carousel-item active">
                                <img class="first-slide" src="../images/white.png" alt="First slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=77">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%90%D1%8E%D0%BD%D1%8B%20%D0%BD%D0%B8%D1%87%D0%B5%D0%BA%20%D0%B8%D1%82%D0%B5%D0%BF%20%D0%B8%D0%BA%D0%B5%D0%BD%D1%87%D0%B5%20%D1%8F%D0%B3%D1%8B%D0%BD%D0%B0%20%D3%99%D0%B9%D0%BB%D3%99%D0%BD%D0%B4%D0%B5%D1%80%D0%B3%D3%99%D0%BD%D0%BD%D3%99%D1%80.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                            <p>Аюны ничек итеп икенче ягына әйләндергәннәр</p>
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=77">
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
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=5">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%9A%D1%83%D1%8F%D0%BD%20%D0%BA%D1%8B%D0%B7%D1%8B.png">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                            <p>В сказке "Куян кызы" рассказывается о зайке, которая не слушалась маму-зайчиху, из-за чего и заболела. Хоть Айболит вылечил зайчишку, маму стоило послушаться - она обладает большим жизненным опытом и всегда готова помочь.</p>
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=5">
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
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=12">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%A1%D0%B5%D1%80%D1%82%D0%BE%D1%82%D0%BC%D0%B0%D1%81%20%D2%AF%D1%80%D0%B4%D3%99%D0%BA.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                           <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=12">
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
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=130">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%A1%D1%83%20%D0%90%D0%BD%D0%B0%D1%81%D1%8B.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Легенды о "Су анасы" (водяной) возникли у татар очень давно. Считалось, что у водоёмов есть свои духи, так же, как и например у лесов или домов. Татарский классик Габдулла Тукай изложил свою версию легенды в виде детской сказки, вложив в неё поучительный мотив.</p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                          <h5 class="asd">Язык:</h5>
                                            <div class="q">Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=130">
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
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=9">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%9A%D0%B0%D0%BF%D0%BA%D0%BE%D1%80%D1%81%D0%B0%D0%BA%20%D0%BF%D0%B0%D1%82%D1%88%D0%B0.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p></p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                           <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=9">
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
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=13">
                                                 <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%90%D0%B1%D0%B4%D1%83%D0%BB%D0%BB%D0%B0%20%D0%90%D0%BB%D0%B8%D1%88%20%D3%99%D0%BA%D0%B8%D1%8F%D1%82%D0%BB%D3%99%D1%80%D0%B5.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                      <p></p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                          <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=13">
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
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=69">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%A7%D0%B8%D0%BA%D0%B5%D1%80%D1%82%D0%BA%D3%99.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p></p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                           <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=69">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="eighth-slide" src="../images/white.png" alt="Eighth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=4">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%A7%D1%83%D0%BA%D0%BC%D0%B0%D1%80%20%D0%B1%D0%B5%D0%BB%D3%99%D0%BD%20%D0%A2%D1%83%D0%BA%D0%BC%D0%B0%D1%80.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p></p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                           <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=4">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="ninth-slide" src="../images/white.png" alt="Ninth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=11">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/%D0%9D%D0%B5%D1%87%D0%BA%D3%99%D0%B1%D0%B8%D0%BB.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                           <p></p>
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                           <h5 class="asd">Жанр:</h5>
                                            <div class="q">Сказки</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                          <h5 class="asd">Язык:</h5>
                                            <div class="q">Татарский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=11">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next">
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