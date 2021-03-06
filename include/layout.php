<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 10:41
 */

function renderHeader($title = 'OWASP Top 10 2013 Examples') {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo htmlspecialchars($title); ?></title>

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
            <p><a href="/"><img alt="Trevweb - Trevor Adams - Education, Training, Consultancy"
                                src="img/trevweb_transparent_background_web.png"
                                height="54" width="148"></a></p>
        </div>

<?php
}


function renderFooter() { ?>
    <footer class="footer">
        <p>&copy; Trevweb <?php echo htmlspecialchars(getdate()['year']); ?></p>
    </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
<?php
}