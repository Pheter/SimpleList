<?php

namespace Seed\Resources;

class Index {
    
    private $Twig;
    private $Cake;
    
    public function __construct($plugins) {
        
        $this->Twig = $plugins->Twig;
        $this->Cake = new \Seed\Models\Cake;
    }
    

    public function get($slices = 5) {
        
        $this->Cake->slice($slices);
        
        $startingNumOfSlices = $this->Cake->numOfSlices();
        
        $this->Cake->eatSlice();
        $this->Cake->eatSlice();
        
        $template = $this->Twig->loadTemplate('index.html');
        $template->display(array('start' => $startingNumOfSlices,
                                 'current' => $this->Cake->numOfSlices()));
    }
}
