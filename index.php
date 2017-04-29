<?php
/**
 * Created by PhpStorm.
 * User: roik
 * Date: 29.04.17
 * Time: 15:57
 */
echo "HELLO WORLD";

?>
<form method="post" action="index.php">
    <input type="text" placeholder="name" name "name">
    <br>
    <input type="text" placeholder="description" name "description">
    <br>
   <input type="text" placeholder="created_at" name "created_at">
    <br>
    <input type="submit">
</form>

<?php

$dsn = 'mysql:dbname=CRUD;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
     $dbh = new PDO($dsn, $user, $password);
    }
    catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
}
        $sql = 'INSERT INTO article (name,description,created_at) VALUES (:name,:description,:created_at)';
        $statement =$dbh->prepare($sql);

        if (!empty($statement))

            {
                echo 'Вставили запись ';
               /* $statement->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
                $statement->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
                $statement->bindParam(':created_at', $_POST['created_at'], PDO::PARAM_STR);*/
                $statement->bindValue(':name', $_POST['name']);
                $statement->bindValue(':description', $_POST['description']);
                $statement->bindValue(':created_at', $_POST['created_at']);

                var_dump($statement->execute());
            }
            else
            {
                echo 'Banana!';

            }
?>

