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
    <button class="btn btn-info" type="submit" class="btn btn-default">Select Category</button>
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

