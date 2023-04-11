<header>
        <nav class="navbar navbar-expand-xl navbar-light fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index_eng.php"><img src="../images/kit_zhel.svg" height="37px" class="d-inline-block align-top" alt=""> </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php
                               if(isset($index))
                                   echo 'active';
                               ?>
                               ">
                        <a class="nav-link" href="index.php">Main</a>
                    </li>
                    <li class="nav-item <?php
                               if(isset($genres))
                                   echo 'active';
                               ?>">
                        <a class="nav-link" href="genres.php">Genres</a>
                    </li>
                    <li class="nav-item <?php
                               if(isset($authors))
                                   echo 'active';
                               ?>">
                        <a class="nav-link" href="authors.php">Authors</a>
                    </li>
                    <li class="nav-item <?php
                               if(isset($about_us))
                                   echo 'active';
                               ?>">
                        <a class="nav-link" href="about_us.php">About us</a>
                    </li>
                    <?php
                    if(isset($login)){
                    if(isset($user_id))
                    {
                         echo '
                        <li class="nav-item active">
                        <a class="nav-link" href="cabinet.php?page=favourite">My office</a>
                        </li>';
                    }
                    else
                    {
                        echo '
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Sign in</a>
                    </li>';
                    }
                    }
                    else{
                    if(isset($user_id))
                    {
                         echo '
                        <li class="nav-item">
                        <a class="nav-link" href="cabinet.php?page=favourite">My office</a>
                        </li>';
                    }
                    else
                    {
                        echo '
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Sign in</a>
                    </li>';
                    }
                    }
                    ?>
                </ul>
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search..." aria-label="Поиск..." style="width: 13em;">
                    <button class="btn btn-outline-success my-sm-0" type="submit"><img class="srch" src="../images/search_icon.png" alt="" title="Bootstrap" height="80%"></button>
                </form>
                <ul class="languages">
                    <li class="tat">
                        <a href="index_tat.php"> <img src="../images/Flag_of_Tatarstana.png" height="28em" class="d-inline-block" alt=""> </a>
                    </li>
                    <li class="rus">
                        <a href="index.php"> <img src="../images/Flag_of_Russia.png" height="30em" class="d-inline-block" alt=""> </a>
                    </li>
                    <li class="eng_main">
                        <a href="index_eng.php"> <img src="../images/Flag_of_England.png" height="28em" class="d-inline-block" alt=""> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>