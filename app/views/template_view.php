<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Наш сайт</title>
    <link rel="stylesheet" href="assets/template/css/bootstrap.css">
    <link rel="stylesheet" href="assets/template/css/bootstrap-theme.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Учим MVC</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Главная</a></li>
                <li><a href="/">О сайте</a></li>
                <li><a href="/">Портфолио</a></li>
                <li><a href="/">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="jumbotron">
    <div class="container">
        <?php include 'app/views/' . $content_view; ?>
    </div>
</div>

<div class="container">
    <hr/>
    <footer><p>&copy; 2016 lll</footer>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="/assets/template/js/bootstrap.min.js"></script>
</body>
</html>