<?php

namespace Seed\Resources;

class Todo {
    
    public function __construct($plugins, $data) {
        
        $this->twig = $plugins->Twig;
        $this->simpleList = new \Seed\Models\SimpleList($plugins->ADOdb);
        $this->data = $data;
    }
    
    
    public function delete($id) {
        
        $this->simpleList->delete($id);
        
        return $this->twig->render('index.html', array('items' => $this->simpleList->get()));
    }
}
