<?php

namespace Seed\Views;

class Index {
    
    public function __construct($start, $current) {
        
        $this->render($start, $current);
    }
    
    
    private function render($start, $current) {
        
        echo "<p>I have a cake with <strong>$start</strong> slices.</p>\n";
        echo "<p>After eating 2 of the slices, there are <strong>$current</strong> slices left!</p>";
    }
}
