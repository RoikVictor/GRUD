<?php

require_once 'Models/model.php';


/*if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {*/
if (!empty($_POST["name"]) && !empty($_POST["description"]))
{
    echo $_POST['name'];

    $insert = new Article();
    $id = $insert->insert($_POST['name'], $_POST['description'], $_POST['created_at']);
}

require_once 'Views/IndexTemplate.php';