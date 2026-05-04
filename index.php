<?php

class stores {
    
    private $id, $name, $created_at;
    
    public function _construct($id, $name, $created_at){
       
        $this->set_store_id($id);
        $this->name($name);
        $this->created_at($created_at);
    }
    public function set_store_id($id){
         $this->id = $id;
    }
    public function get_id() {
        return $this->id;
    }
    public function set_name($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }
    
    public function set_created_at($created_at){
        $this->created_at = $this->created_at;
    }
    public function get_created_at(){
        return $this->created_at;
}
function list_items(){
    global $data_source_name;
    
    $query = 'SELECT id, name, created_at FROM stores';
    
    $statement = $data_source_name->prepare($query);
    
    $statement->bindValue("id", $store->get_id());
    $statement->bindValue("name", $store->get_name());
    $statement->bindValue("created_at", $store->get_created_at());
    
    $statement->execute();
    
    $stores->$statement->fetchAll();
    
    $statement->closeCursor();
    $stores_array = array();
    
    function update_store($store){
        global $database;
        
        $query = "update store set name = :name,  created_at = :created_at" . " where id = :_id ";
        
    }
    
    foreach ($stores as $store){
        $items_array[] = new Stores($items['id'], $items['name'], $items['created_at'] );
    }
    return stores_array;
}
}


 


  
  
