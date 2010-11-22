<?php

namespace Seed\Models;

class Cake {
    
    private $ADOdb;
    private $slices = null;
    
    public function __construct($ADOdb) {
        
        $this->ADOdb = $ADOdb;
    }
    
    
    public function slice($slices) {
        
        $this->ADOdb->Execute("INSERT INTO cakes(slices) VALUES($slices)");
    }
    
    
    public function eatSlice() {
        
        $this->slices -= 1;
    }
    
    
    public function numOfSlices($id) {
        
        $row = ($this->ADOdb->Execute("SELECT slices FROM cakes WHERE id = $id")->FetchRow());
        return $row['slices'];
    }
}
