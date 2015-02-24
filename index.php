<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trevor Adams - Computing, IT, Software, Education</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="header">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li><a href="http://trevweb.me.uk">Blog</a></li>
                <li><a href="http://trevweb.co.uk">Business</a></li>
                <li><a href="http://trevweb.co.uk/contact">Contact</a></li>
            </ul>
        </nav>
        <p><img alt="Trevweb - Trevor Adams - Education, Training, Consultancy"
                src="img/trevweb_transparent_background_web.png"
                height="54" width="148"></p>
    </div>
    <div class="jumbotron">
        <h1>Trevor Adams</h1>
        <p class="lead">Teacher, developer, director and parent. What shall I do after breakfast?</p>
        <p>
            <a title="Personal Blog"
               href="http://trevweb.me.uk" class="btn btn-lg btn-info">.me.uk</a>
            <a title="Business Site"
               href="http://trevweb.co.uk" class="btn btn-lg btn-info">.co.uk</a>
            <a title="LinkedIn Profile"
               href="http://uk.linkedin.com/in/trevorjadams/"
               class="btn btn-lg btn-info">LinkedIn</a>
        </p>
    </div>
    <footer class="footer">
        <p>&copy; Trevweb <?php echo htmlspecialchars(getdate()['year']); ?></p>
    </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<?php include_once 'ga.php'; ?>
</body>
</html>