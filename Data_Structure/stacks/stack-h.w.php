<?php

class Stack {
    
    private $elements;

    public function __construct(){
        $this->elements = array(); 
    }

    public function push($num){

        $this->elements[] = $num;

    }

    public function pop(){

        if (!$this->isEmpty()){ 
            array_pop($this->elements);
        }
    
    }

    public function top(){

        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];    
        }  

        return null; 
        
    }

    public function isEmpty(){

        return empty($this->elements);

    }

    public function size(){

        return sizeof($this->elements);
    }

}

function removeCoupleOfWords($worlds){
    $stack = new Stack();
  
    for ($i = 0; $i < count($worlds); $i++) {
        
        if ($stack->isEmpty())
            $stack->push($worlds[$i]);
        else
        {
            // echo "aaa";
            $str = $stack->top();
            // echo "afa";
  
            if ($worlds[$i] == $str) {
                $stack->pop();
            } else { 
                $stack->push($worlds[$i]);
            }
        }
    }
  
    return $stack->size();
}

$worlds = ["ab", "aa", "aa", "bcd", "ab"];
echo removeCoupleOfWords($worlds);

