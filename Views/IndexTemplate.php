<form method="post" action="../index.php">
    <input type="text"  name="name">
    </br>
    <input type="text"   name="description">
    </br>
    <input type="date" placeholder="created_at" name="created_at" value="<?php echo date('Y-m-d') ?>">
    </br>
    <input type="submit">
</form>

