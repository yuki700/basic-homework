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

    public function merge($h1, $h2) {

        if ($h1->head == null)
            return $h2;
        if ($h2->head == null)
            return $h1;
        if ($h1->head->getData() < $h2->head->getData())
            return $this->mergeUtil($h1, $h2);
        else
            return $this->mergeUtil($h2, $h1);
    }

    public function mergeUtil($h1, $h2) {
        
        if ($h1->head->getNext() == null) {
            $h1->head->setNext($h2);
            return $h1;
        }
       
        $curr1 = $h1->head;
        $next1 = $h1->head->getNext();
        $curr2 = $h2->head;
        $next2 = $h2->head->getNext();

        while ($next1 != null && $curr2 != null) {
            
            if (($curr2->getData()) >= ($curr1->getData()) && ($curr2->getData()) <= ($next1->getData())) {
                $next2 = $curr2->getNext();
                $curr1->setNext($curr2);
                $curr2->setNext($next1);               
                $curr1 = $curr2;
                $curr2 = $next2;
            } else {
                
                if ($next1->getNext() != null) {
                    $next1 = $next1->getNext();
                    $curr1 = $curr1->getNext();
                } else {
                    $next1->setNext($curr2);
                    return $h1;
                }
            }
            return $h1;
        }
    }
}

$list = new LinkedList(); 
$list->insert(1); 
$list->insert(3); 
$list->insert(10); 

$list1 = new LinkedList(); 
$list1->insert(2); 
$list1->insert(4); 
$list1->insert(5); 

$list2 = $list->merge($list, $list1);
$list2->visit();
