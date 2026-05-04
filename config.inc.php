<?php

require_once 'models/database.php';
require_once 'models/store.php';



$action = htmlspecialchars(filter_input(INPUT_POST, "action"));

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_FLOAT);
$name = htmlspecialchars(filter_input(INPUT_POST, "name"));
$created_at = filter_input(INPUT_POST, "created_at", FILTER_VALIDATE_FLOAT);


if(action == "insert or update" && $id != "" && $name != "" &&  $created_at != 0){
    $insert_or_update = filter_input(INPUT_POST, 'insert_or_update');
}
    
    $stores = new Store($id, $name, $created_at);
    
    if($insert_or_update == "insert"){
        insert_store($store);
    }else if($insert_or_update == "update"){
        update_store($store);
    } else if($action == "delete" && $store_id != ""){
        
    }

