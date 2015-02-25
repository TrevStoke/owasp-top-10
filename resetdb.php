<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 10:30
 */

require_once('include/layout.php');

try {
    $db = new PDO('sqlite:db/owasp2013.sqlite');

    $sql = file_get_contents('db/owasp2013.sql');

    $db->exec($sql);

    renderHeader('SQL Reset Successful');
    ?>
    <h1 class="page-header">SQL Reset <small>Don&apos;t drop the tables!</small></h1>
    <p>Go <a href="/">Home</a>.</p>
    <?php
    renderFooter();
}
catch (PDOException $e) {
    renderHeader('SQL Error');
    $errorMessage = $e->getMessage();
    require_once('include/pages/sql_error.php');
    renderFooter();
}
