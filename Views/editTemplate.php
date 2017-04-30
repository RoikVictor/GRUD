<form method="post" action="../edit.php?id=<?php echo $id ?>">
    <input type="hidden"  name="id" value="<?php echo $_GET['id'] ?>" >
    <input type="text"  name="name" value="<?php echo $_POST ['name']; ?>" required/>
    </br>
    <input type="text"  name="description" value="<?php echo $_POST ['description']; ?>" required/>
    </br>
    <input type="date" placeholder="created_at" name="created_at" value="<?php echo date('Y-m-d') ?>">
    </br>
    <input type="submit">
</form>