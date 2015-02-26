<?php
/**
 * Created by PhpStorm.
 * User: trevor
 * Date: 25/02/15
 * Time: 21:58
 */

?>
<h1 class="page-header">Unvalidated Redirect
    <small>Checking is just too sensible.</small></h1>
<form method="get">
    <div class="form-group">
        <label for="exampleInputEmail1">URL</label>
        <input required="true" type="text" class="form-control" id="url" name="url" placeholder="http://somedomain.tld">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<h2>Notes</h2>
<p>It should go without saying (but it won&apos;t,
    that no validation is performed on the URL entered.</p>