<?php
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');

    $tache = post('tache'); 

    $items = getItems();
    $items[uniqid()] = [
        'checked'=>false,
        'tache'=>$tache
    ];
    saveItems($items);


    header('Location:index.php');