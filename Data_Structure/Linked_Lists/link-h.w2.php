<?php

class Node {
    
    private $data; 
    private $next; 

    public function __construct($data = 0, $next = null) {
        $this->data = $data; 
        $this->next = $next;  
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getNext() {
        return $this->next;
    }

    public function setNext($next) {
        $this->next = $next;
    }
    
}

class LinkedList { 
    
    private $head;

    public function insert($data) {
        $newNode = new Node($data); 
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $last = $this->head; 
            while ($last->getNext() != null) { 
                $last = $last->getNext();
            }
            $last->setNext($newNode);
        }
    }

    public function visit() {
        $currNode = $this->head; 

        echo "Linked List: ";

        while ($currNode != null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getNext();
        }
    }

    public function reverse() {
		$preNode = null;
        $currNode = $this->head;
		$nextNode = null;

        echo "Linked List: ";

        while ($currNode != null) { //stop when node is NULL
            $nextNode = $currNode->getNext(); 
            $currNode->setNext($preNode);
            $preNode = $currNode;
            $currNode = $nextNode;
        }
		$this->head =$preNode;
    }
}

$list = new LinkedList();
$list->insert(1); 
$list->insert(2); 
$list->insert(3);
$list->insert(4); 
$list->insert(5); 

$list->reverse();
$list->visit();