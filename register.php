<?php 
$login = true;
?>
<?php require_once('load_user.php') ?>
<?php
    if(isset($user_id)){
        header("Location: /index.php");
        die();
    }
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
    <link href="../css/register.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('header.php') ?>

    <main>
        <div class="container" style="margin-top: 5em;">
            <div class="row" style="justify-content: center;">
                <div class="form-wrap">
                    <div class="profile"><img src="../images/Person_with_book.svg">
                        <h1>Регистрация</h1>
                    </div>
                    <form method="post" action="register_form.php">
                        <div>
                            <label for="name">Имя Фамилия</label>
                            <input type="text" name="name" required>
                        </div>
                        <div>
                            <label for="login">Логин (Псевдоним)</label>
                            <input type="text" name="login" required>
                        </div>
                        <div class="radio">
                            <span>Пол</span>
                            <label>
                                <input type="radio" name="sex" value="0">мужской
                                <div class="radio-control male"></div>
                            </label>
                            <label>
                                <input type="radio" name="sex" value="1">женский
                                <div class="radio-control female"></div>
                            </label>
                        </div>
                        <div>
                            <label for="date">Дата Рождения</label>
                            <input type="date" name="date" required>
                        </div>
                         <div>
                            <label for="city">Город</label>
                            <input type="text" name="city" required>
                        </div>
                        <div>
                            <label for="email">E-mail</label>
                            <input type="email" name="email" required>
                        </div>
                         <div>
                            <label for="password">Пароль</label>
                            <input type="password" name="password" required>
                        </div>
                            <button type="submit" class="button_enter">Отправить</button>
                    </form>
                    </div>

                </div>
            </div>
    </main>

    <?php require_once('footer.php') ?>

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