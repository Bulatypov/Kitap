<?php 
require_once('load_user.php'); 
$about_us = true;
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
    <link href="../css/about_us.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <style>
.q{
    border: 5px solid #feb386;
    border-style: double;
    border-radius: 8px;
    color: #363636;
    padding: 0.4em;
}
    </style>
    <?php require_once('header.php'); ?>
    <main>
        <div class="container" style="margin-top: 3em; background-color: white; border-radius: 12px; padding-left: 3em; padding-right:3em; padding-top: 1em; padding-bottom:1em; border: 8px solid #feb386;
    border-radius: 18px;
    border-style: double;">
            <span id="add_book"></span>
            <div class="row" style="text-align: center; justify-content: center;">
                <h1>Правила и подсказки</h1>
            </div>
            
            <div class="row" style="margin-top: 1em; text-align: center; justify-content: center;">
                <h3 class="text-muted">Для писателей</h3>
            </div>
            <div class="row" style="margin-top: 1em;">
                <h5>1) КАК ДОБАВИТЬ КНИГУ</h5>
                <p>Добавить свою книгу или произведение, которого ещё нет в нашей библиотеке, можно <a href="add_book.php" style="color: orange;">перейдя по ссылке</a> или через личный кабинет:</p>
                <img src="images/screen-1.jpg" style="max-width: 100%;">
            </div>
            <span id="verification"></span>
             <div class="row" style="margin-top: 6em;">
                <h5>2) КАК ПОЛУЧИТЬ ПОДТВЕРЖДЕНИЕ</h5>
                 <p>После заполнения и отправления формы о добавлении книги, вы получите уведомление о том, что ваше произведение находится на стадии проверки. Мы добавим его в скором времени, а потом вы и другие читатели сможете насладиться чудесной книгой!</p>
                <img src="images/screen-2.jpg" style="max-width: 100%;"> 
            </div>
            
            
             <span id="comments"></span>
             <div class="row" style="margin-top: 7em; text-align: center; justify-content: center;">
                <h3 class="text-muted">Для читателей</h3>
            </div>
             <div class="row" style="margin-top: 1em;">
                <h5>1) КАК ОСТАВИТЬ ОТЗЫВ</h5>
                <p>Наша команда думает о том, чтобы добавить функцию комментирования произведений. Но мы не знаем, насколько она важна и нужна пользователям. Если эта функция действительно необходима, свяжитесь с нами. Количество ваших рецензий будет отображаться в личном кабинете:</p>
                <img src="images/screen-3.jpg" style="max-width: 100%;">
            </div>
             <span id="read_download"></span>
            <div class="row" style="margin-top: 6em;">
                <h5>2) КАК ЧИТАТЬ И СКАЧИВАТЬ КНИГИ</h5>
                <p>Вы можете читать книги онлайн или скачивать их в любом из 4 форматов (.pdf, .epub, .fb2, .txt) на личной странице каждой книги:</p>
                <img src="images/screen-4.jpg" style="max-width: 100%;">
            </div>
             <span id="enter"></span>
            <div class="row" style="margin-top: 6em;">
                <h5>3) КАК АВТОРИЗОВАТЬСЯ</h5>
                <p>Вы можете читать книги и скачивать их, не имея аккаунта. Но для комментирования произведений и добавления их в "Избранное" он необходим. Если у вас нет аккаунта, его можно с лёгкостью создать через удобную форму:</p>
                <img src="images/screen-5.jpg" style="max-width: 100%;">
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