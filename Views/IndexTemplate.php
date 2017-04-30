<?php

foreach ($rows as $sel)
    {
        echo $sel['name']," | ",$sel['description']," | ";
        echo $el['name']. '' .$el['id']. ' <a href="../edit.php?id='.$sel['id'].'">Edit</a>';
        echo $el['name']. '' .$el['id']. ' <a href="../delete.php?id='.$sel['id'].'">Del</a> <br>';
    }
?>