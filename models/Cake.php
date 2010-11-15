<?php

namespace Seed\Models;

class Cake {
    
    private $slices = null;
    
    public function slice($slices) {
        
        $this->slices = $slices;
    }
    
    
    public function eatSlice() {
        
        $this->slices -= 1;
    }
    
    
    public function numOfSlices() {
        
        return $this->slices;
    }
}
