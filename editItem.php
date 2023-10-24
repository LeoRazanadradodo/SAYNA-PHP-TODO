<?php
include('fct/item.php');
include('fct/request.php');
include('config/app.php');

$items = getItems();
$id = post('editItem');

$items[$id]['tache'] = post('tache');

saveItems($items);

header('Location:index.php');