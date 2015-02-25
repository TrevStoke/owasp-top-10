<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 14:03
 */

$links = array(
    'http://trevweb.me.uk',
    'http://trevweb.co.uk',
    'http://agilestaffordshire.org',
)

?>

<h1 class="page-header">Visit Sites <small>Not related to this web site.</small></h1>
<form method="get">
    <div class="form-group">
        <label for="exampleInputEmail1">URL</label>
        <input required="true" type="text" class="form-control" id="url" name="url" placeholder="http://somedomain.tld">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<h2>Favourites</h2>
<ul>
    <?php
    foreach($links as $link) {
        echo '<li>';
        echo '<a href="?url='. urlencode($link) .'">';
        echo htmlspecialchars($link) . '</a></li>';
    }
?>
</ul>