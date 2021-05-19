<?php

class Set {
    
    private $elements;

    public function __construct(){
        $this->elements = array();
    }

    public function add($ele){
        if (!$this->isExist($ele)) { 
            $this->elements[] = $ele; // because the order is any so we can add to the e_nd or beginning
        }
    }

    public function get(){
        return $this->elements;
    }

    public function isExist($ele){
        return in_array($ele, $this->elements); // In php, in_array use to check an element is in array or not
    }
}

$a = [1, 2, 3, 4, 5, 2, -1, 5, 2, 7, 11, 11, -5];
$mySet = new Set();
foreach ($a as $elm) {
    $mySet->add($elm);
}

print_r($mySet->get());

?>