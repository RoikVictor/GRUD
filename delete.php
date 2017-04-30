<?php
require_once './Models/model.php';

$viewAll = new Article();
$id = $viewAll->deleteById($_GET['id']);

require_once './Views/deleteTemlate.php';
?>