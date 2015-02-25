<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 13:58
 */
header("X-XSS-Protection: 0");
require_once('include/layout.php');

renderHeader('Cross Site Scripting');

if(isset($_GET['url'])) {
    require_once('include/pages/xss-leaving.php');
} else {
    require_once('include/pages/xss.php');
}

require_once('include/pages/xss-discussion.php');

renderFooter();