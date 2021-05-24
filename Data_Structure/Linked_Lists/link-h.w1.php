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

    public function deleteFirst($data) {
        if ($this->head == null) { 
            echo "List is empty.";
            return;
        }
        while ($this->head->getData() == $data) { 
            $this->head = $this->head->getNext();
        }

        $current = $this->head;

        while ($current->getNext() != null) {
            if ($current->getNext()->getData() == $data) {
                $current->setNext($current->getNext()->getNext());

            }else{
            $current = $current->getNext();
            }
        }

    }

}

$list = new LinkedList();
$list->insert(10); 
$list->insert(4); 
$list->insert(1);
$list->insert(2); 
$list->insert(5); 
$list->insert(2);
$list->insert(3);

$list->visit();

$list->deleteFirst(2);
$list->visit();

