<?php

namespace Seed\Resources;

class Index {
    
    private $cake;
    
    public function __construct($plugins) {
        
        $this->cake = new \Seed\Models\Cake;
    }
    

    public function get($slices = 5) {
        
        $this->cake->slice($slices);
        
        $startingNumOfSlices = $this->cake->numOfSlices();
        
        $this->cake->eatSlice();
        $this->cake->eatSlice();
        
        return new \Seed\Views\Index($start = $startingNumOfSlices, $current = $this->cake->numOfSlices());
    }
}
