<?php

class Stack {
    /** @var array stack element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize stack element
    }

    public function push(num)
{
    $this->elements[] = num; //In php, this assignment will add element to the end of an array
}

public function pop()
{

    if (!$this->isEmpty()) { //check if stack is not empty
        array_pop($this->elements); // delete last element https://www.w3schools.com/php/func_array_pop.asp
    }
}
public function top()
{
    if (!$this->isEmpty()) {
        return $this->elements[sizeof($this->elements) - 1];
    }

    return null;
}

public function isEmpty()
{
    return empty($this->elements);
}

public function size()
{
    return sizeof($this->elements);
}


}

function removeCoupleOfWords($worlds)
{
    $stack = new Stack();
  
    // Loop through the array
    for ($i = 0; $i < count($worlds); $i++) {
        // Push the current string if the stack is empty
        if ($stack->isEmpty())
            $stack->push($worlds[$i]);
        else
        {
            $str = $stack->top();
  
            // compare the current string with stack top if equal, pop the top
            if ($worlds[$i] == $str) {
                $stack->pop();
            } else { // otherwise push the current string
                $stack->push($worlds[$i]);
            }
        }
    }
  
    // Return stack size
    return $stack->size();
}

//try it
$worlds = ["ab", "aa", "aa", "bcd", "ab"];
echo removeCoupleOfWords($worlds);


