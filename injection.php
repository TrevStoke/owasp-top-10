<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 24/02/15
 * Time: 23:31
 */

try

{
    //open the database
    $db = new PDO('sqlite:db/owasp2013.sqlite');
    $result = $db->query('SELECT * FROM products');
    foreach($result as $row) {
        print($row['name']) . "<br>";
    }

    $db = null;
}
catch (PDOException $e) {
    print 'Exception: ' . $e->getMessage();
}