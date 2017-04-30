<?php
require_once '../Models/model.php';
$selected = new Article();
$sel = $selected->posts();
require_once '../Views/IndexTemplate.php';
