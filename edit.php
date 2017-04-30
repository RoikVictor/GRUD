<?php
require_once './Models/model.php';

    $viewAll = new Article();
    $id = $viewAll->findById($_GET['id']);

    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']))
    {
        $viewAll->update($_POST['id'],$_POST['name'],$_POST['description'],$_POST['created_at']);

    }
require_once './Views/editTemplate.php';
?>