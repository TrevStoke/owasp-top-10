<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 21:54
 */

require_once('include/layout.php');

renderHeader('Unvalidated Forwards and Redirects');

require_once('include/pages/unvalidated-forwards-and-redirects.php');

require_once('include/pages/unvalidated-forwards-discussion.php');

renderFooter();
