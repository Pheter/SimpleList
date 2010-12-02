<?php

namespace Seed\Resources;

class Index {
    
    public function __construct($plugins, $data) {
        
        $this->twig = $plugins->Twig;
        $this->simpleList = new \Seed\Models\SimpleList($plugins->ADOdb);
        $this->data = $data;
    }
    
    
    public function get() {
        
        return $this->twig->render('index.html', array('items' => $this->simpleList->get()));
    }
    
    
    public function post() {
        
        $this->simpleList->add($this->data['item']);
        
        return $this->twig->render('index.html', array('items' => $this->simpleList->get()));
    }
}
