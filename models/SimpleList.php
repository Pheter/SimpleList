<?php

class Models_SimpleList {
    
    private $ADOdb;
    
    public function __construct($ADOdb) {
        
        $this->ADOdb = $ADOdb;
    }
    
    
    public function get() {
        
        return $this->ADOdb->Execute("SELECT * FROM simple_todo ORDER BY id")->GetAssoc();
    }
    
    
    public function add($msg) {
        
        $this->ADOdb->Execute("INSERT INTO simple_todo(message) VALUES('$msg')");
    }
    
    
    public function delete($id) {
        
        $this->ADOdb->Execute("DELETE FROM simple_todo WHERE id=$id");
    }
}
