<?php $recordCount = $result->rowCount(); ?>
<h1 xmlns="http://www.w3.org/1999/html">Results by Category</h1>

<?php if($statement): ?>
    <p class="well">Executed:<br>
    <code><?php echo htmlspecialchars($statement); ?></code>
    </p>
<?php endif; ?>
<form class="form-inline" method="get">
    <div class="form-group">
        <label for="cat">Name</label>
        <select class="form-control" id="cat" name="cat">
            <?php
            foreach($categories as $category) {
                echo '<option ';
                if($cat == $category['id']) {
                    echo ' selected="selected" ';
                }
                echo ' value="' . htmlspecialchars($category['id']) . '">';
                echo htmlspecialchars($category['name']);
                echo '</option>';
            }
            ?>
        </select>
    </div>
    <button class="btn btn-info" type="submit">Select Category</button>
</form>

<?php

    $first = true;
    foreach ($result as $row) {
        if ($first) {
            echo '<table class="table table-striped">';
            echo '<thead><tr>';
            foreach ($row as $key => $value) {
                echo '<th>' . htmlspecialchars($key) . '</th>';
            }
            echo '</tr></thead><tbody>';
            $first = false;
        }
        echo '<tr>';
        foreach ($row as $key => $value) {
            echo '<td>' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody></table>';

?>
<?php
$server = $_SERVER['SERVER_NAME'];
if($_SERVER['SERVER_PORT'] !== "80") {
    $server .= ":" . $_SERVER['SERVER_PORT'];
}
?>
<h2>Discussion</h2>
<p>The start of the problem occurs when we bleed database information through the query string.</p>
<p><code>http://<?php echo (htmlspecialchars($server)) ?>/injection?cat=1</code></p>
<p>This sort of leak prompts would-be attackers to perhaps try something simple.</p>
<p><code>http://<?php echo (htmlspecialchars($server)) ?>/injection?cat=1 OR 1=1</code></p>
<p>The result yields useful information. It demonstrates that the SQL to be executed is expanded in place.
It also confirms the input can be provided via the URL query string.</p>
<p>So far, this is not invasive or damaging. However, the public site is now providing information about the internal schema.
The next step is to try something useful. If an attacker guesses a field name correctly, records will still be returned.</p>
<p><code>http://<?php echo (htmlspecialchars($server)) ?>/injection?cat=1 OR offer=1</code></p>
<p><code>http://<?php echo (htmlspecialchars($server)) ?>/injection?cat=1 OR name=''</code></p>
<p>The first attempt yields an error or no records as the field 'offer' does not exist. However, the second result returns rows as normal. This indicates to an attacker that the field exists.
    Now an attacker can construct their own custom queries. E.g. </p>
<p><code>http://<?php echo (htmlspecialchars($server)) ?>/injection?cat=2 OR name LIKE '%mega%'</code></p>
<p>This is great information, because it allows an attacker to fish for table names E.g.</p>
<p><code>http://<?php echo (htmlspecialchars($server)) ?>/injection?cat=2 OR 1<=(SELECT count(*) FROM customers)</code></p>
<p>The web site has now confirmed the presence of the 'customers' table.</p>

