<?php

namespace Seed\Resources;

class Index {
    
    private $view;
    private $Cake;
    
    public function __construct($plugins) {
        
        $this->view = $plugins->Twig;
        $this->Cake = new \Seed\Models\Cake;
    }
    

    public function get($slices = 5) {
        
        $this->Cake->slice($slices);
        
        $startingNumOfSlices = $this->Cake->numOfSlices();
        
        $this->Cake->eatSlice();
        $this->Cake->eatSlice();
        
        return $this->view->render('index.html', array(
                                'start' => $startingNumOfSlices,
                                'current' => $this->Cake->numOfSlices(),
                            ));
    }
}
