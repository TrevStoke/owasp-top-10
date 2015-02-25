<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 14:03
 */

$url = urldecode($_GET['url']);
?>

<h1>Warning <small>Destination is unaffiliated with this site.</small></h1>
<p><br><a class="btn btn-lg btn-info" href=<?php echo $url; ?>>Continue</a>
<a class="btn btn-lg btn-primary" href="/cross-site-scripting">No, thanks.</a></p>
<p>Sent:<br>
<code><?php echo htmlspecialchars($_GET['url']); ?></code></p>