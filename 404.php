<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 16:40
 */

require_once('include/layout.php');

renderHeader('Not Found');

?>

<h1>Document Not Found <small>Where could it be?</small></h1>
<p>You arrived here because the URL entered does not point to a document. Go to the <a href="/">homepage</a> and select something from the menu.</p>

<?php
renderFooter();
?>