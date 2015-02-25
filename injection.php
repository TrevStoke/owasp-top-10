<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 24/02/15
 * Time: 23:31
 */

require_once('include/layout.php');

if(isset($_GET['cat'])) {
    $cat = $_GET['cat'];
} else {
    $cat = 1;
}

renderHeader('SQL Injection');

try

{
    //open the database
    $db = new PDO('sqlite:db/owasp2013.sqlite');
    $categories = $db->query('SELECT * FROM categories ORDER BY name ASC', PDO::FETCH_ASSOC);

    $statement = "SELECT name, price FROM products WHERE category_id = $cat";
    $result = $db->query($statement, PDO::FETCH_ASSOC);

    if(!$result) {
        require_once('include/pages/injection_nothing.php');
    } else {
        require_once('include/pages/injection.php');
    }

    $db = null;
}
catch (PDOException $e) {
    print 'Exception: ' . $e->getMessage();
}

renderFooter();