<?php
/**
 * Created by PhpStorm.
 * User: roik
 * Date: 29.04.17
 * Time: 15:57
 */
echo "HELLO WORLD";

//$dt = new DateTime('Wed, 21 Jul 2017 00:28:50 GMT');
//echo $dt->format('U'); // 1279672130
//echo $dt->getTimestamp();
?>
<form method="post" action="index.php">
    <input type="text" placeholder="name" name "name">
    <br>
    <input type="text" placeholder="description" name "description">
    <br>
<!--    <input type="text" placeholder="created_at" name "created_at">-->
    <br>
    <input type="submit">
</form>

<?php
$pdo_conn = new PDO("pgsql:host=127.0.0.1;dbname=grud", 'postgres', 'qwerty');

 /* var_dump($pdo_conn::getAvailableDrivers());*/
if (isset($_POST['name']) && isset($_POST['description']))
{
    $sql = 'INSERT INTO article (name, description) VALUES (:name, :description)';
    $statement = $pdo_conn->prepare($sql);
    $statement->bindValue(':name', $_POST['name']);
    $statement->bindValue(':description', $_POST['description']);
    /*$statement->bindValue(':created_at', $_POST['created_at']);
    */
    var_dump($statement->execute());
}

?>

