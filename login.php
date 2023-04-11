<?php 
$login = true;
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
    <link href="../css/enter.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('header.php') ?>
    <main>
        <div class="container" style="margin-top: 10em; margin-bottom: 7em;">
            <div class="row" style="justify-content: center;">
                <div class="form-wrap">
                    <div class="profile"><img src="../images/Person_with_book.svg">
                        <h1>Вход</h1>
                    </div>
                    <form method="post" action="login_form.php">
                        <div>
                            <label for="login">Логин</label>
                            <input type="text" name="login" required>
                        </div>
                         <div>
                            <label for="password">Пароль</label>
                            <input type="password" name="password" required>
                        </div>
                        <?php if(isset($_GET['error'])){
                        echo '<p style="color: red;">Неверные данные</p>';
                        }
                        ?>
                        <div> <a class="second_way_reg"  href="register.php">Регистрация</a> </div>
                        <button type="submit" class="button_enter">Войти</button>
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