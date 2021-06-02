<?php
class Queue {
    
    public $elements;

    public function __construct(){
        $this->elements = array(); 
    }

    public function enqueue($ele){
        array_unshift($this->elements, $ele);
    }

    public function dequeue(){
        if (!$this->isEmpty()) { 
            unset($this->elements[sizeof($this->elements) - 1]); 
        }
    }

    public function front(){
            if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1]; 
        }

        return null;
    }

    public function isEmpty(){
        return empty($this->elements);
    }
}

$queue = new Queue(); 
$queue->enqueue(2);  
$queue->enqueue(1); 
$queue->enqueue(3); 

$time = 0 ;
while(!$queue->isEmpty()) {

    if($queue->front() == min($queue->elements)){
        echo "done task".$queue->front(). " +2" . "\n";
        $queue->dequeue() ;
        $time = $time + 2 ;
    
    }else{
        echo "Postponed task".$queue->front()." +1" ."\n" ;
        $queue->enqueue($queue->front());
        $queue->dequeue() ;
        $time = $time + 1 ;

    }
}

echo $time ;
