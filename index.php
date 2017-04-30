<?php

require_once 'Models/model.php';

    $viewAll = new Article();
    $rows = $viewAll->selectAll();

require_once './Views/IndexTemplate.php';
?>