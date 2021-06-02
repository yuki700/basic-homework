<?php

class Node {
    
    private $data;
    private $left;
    private $right;

    public function __construct($data, $left = null, $right = null) {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getLeft() {
        return $this->left;
    }

    public function setLeft($left){
        $this->left = $left;
    }

    public function getRight(){
        return $this->right;
    }

    public function setRight($right){
        $this->right = $right;
    }
}

class BinaryTree {
     
    protected $root;

    public function __construct($root = null){
        $this->root = $root;
    }

	public function isEmpty() {
        return $this->root === null;
    }

    public function getRoot(){
        return $this->root;
    }

    public function setRoot($root){
        $this->root = $root;
    }

    public function addNodeToTree($newNode){
        $array = array($this->getRoot());

        while($array[0]->getdata()){

            if($array[0]->getLeft() != null){
                array_push($array, $array[0]->getLeft());

                       
            } else {
                $array[0]->setLeft($newNode);
                break;
            }

            if($array[0]->getRight()!= null){
                array_push($array, $array[0]->getRight());

            } else {
                $array[0]->setRight($newNode);
                break;
            } 
            array_shift($array);
        }
        print_r($this->getRoot());
    }
}

$left1 = new Node(7);
$left2 = new Node(15);
$left3 = new Node(8);

$parent1 = new Node(11, $left1); 
$parent2 = new Node(9, $left2, $left3); 

$root = new Node(10, $parent1, $parent2); 

$binaryTree = new BinaryTree($root);
$binaryTree->addNodeToTree(new Node(12));