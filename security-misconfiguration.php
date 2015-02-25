<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 16:31
 */

require_once('include/layout.php');

renderHeader('Security Misconfiguration');

$pre = file_get_contents('db/.htaccess');

require_once('include/pages/security-misconfiguration.php');

renderFooter();