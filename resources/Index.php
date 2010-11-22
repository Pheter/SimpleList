<?php

namespace Seed\Resources;

class Index {
    
    private $Twig;
    private $Cake;
    
    public function __construct($plugins) {
        
        $this->Twig = $plugins->Twig;
        $this->Cake = new \Seed\Models\Cake($plugins->ADOdb);
    }
    
    
    public function get($id = false) {
        
        if (!$id) {
            return $this->Twig->render('index.html');
        }
        
        return $this->Twig->render('cakeInfo.html', array(
                                        'id' => $id,
                                        'slices' => $this->Cake->numOfSlices($id)));
    }
    
    
    public function post() {
        
        $slices = $_POST['slices'];
        $this->Cake->slice($slices);
        
        return "Created a cake with '$slices' slices.";
    }
}
