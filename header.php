 <div class="book_div">
<div class="book">
  <div class="inner">
    <div class="left"></div>
    <div class="middle"></div>
    <div class="right"></div>
  </div>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
</div>

<header>
        <nav class="navbar navbar-expand-xl navbar-light fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="../images/kit_zhel.svg" height="37px" class="d-inline-block align-top" alt=""> </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php
                               if(isset($index))
                                   echo 'active';
                               ?>
                               ">
                        <a class="nav-link" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item <?php
                               if(isset($genres))
                                   echo 'active';
                               ?>">
                        <a class="nav-link" href="genres.php">Жанры</a>
                    </li>
                    <li class="nav-item <?php
                               if(isset($authors))
                                   echo 'active';
                               ?>">
                        <a class="nav-link" href="authors.php">Авторы</a>
                    </li>
                    <li class="nav-item <?php
                               if(isset($about_us))
                                   echo 'active';
                               ?>">
                        <a class="nav-link" href="about_us.php">О нас</a>
                    </li>
                    <?php
                    if(isset($login)){
                    if(isset($user_id))
                    {
                         echo '
                        <li class="nav-item active">
                        <a class="nav-link" href="cabinet.php?page=favourite">Мой кабинет</a>
                        </li>';
                    }
                    else
                    {
                        echo '
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Войти</a>
                    </li>';
                    }
                    }
                    else{
                    if(isset($user_id))
                    {
                         echo '
                        <li class="nav-item">
                        <a class="nav-link" href="cabinet.php?page=favourite">Мой кабинет</a>
                        </li>';
                    }
                    else
                    {
                        echo '
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Войти</a>
                    </li>';
                    }
                    }
                    ?>
                </ul>
                <form class="form-inline" type="search"  method="post" action="search.php">
                    <input class="form-control" type="search" name="search_q" placeholder="Найти книгу..." aria-label="Поиск..." style="width: 13em; color: #feb386;">
                    <button class="btn" type="submit"><img class="srch" src="../images/search_icon.png" alt="" title="Bootstrap" height="80%"></button>
                </form>
                <ul class="languages">
                    <li class="tat">
                        <a href="index_tat.php"> <img src="../images/Flag_of_Tatarstana.png" height="28em" class="d-inline-block" alt=""> </a>
                    </li>
                    <li class="rus_main">
                        <a href="index.php"> <img src="../images/Flag_of_Russia.png" height="30em" class="d-inline-block" alt=""> </a>
                    </li>
                    <li class="eng">
                        <a href="index_eng.php"> <img src="../images/Flag_of_England.png" height="28em" class="d-inline-block" alt=""> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>