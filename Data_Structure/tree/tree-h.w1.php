<?php

class Node {
    
    private $data;
    private $left;
    private $right;

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function setLeft($left)
    {
        $this->left = $left;
    }

    public function getRight()
    {
        return $this->right;
    }

    public function setRight($right)
    {
        $this->right = $right;
    }
}


class BinaryTree {


    protected $root;

    public function __construct($root = null)
    {
        $this->root = $root;
    }

    public function isEmpty() {
        return $this->root === null;
    }

    public function getRoot()
    {
        return $this->root;
    }

    public function setRoot($root)
    {
        $this->root = $root;
    }
 
        
    public function find($which) {
        switch($which) {
    
            case 'max':
            $this->_maxfind($this->root);
            break;
    
            case 'minmum':
            $this->_minmumfind($this->root);
            break;
        } 
    
    } 
    
    private function _minmumfind($node) {
        $current = $node ;

        while(!$current->getLeft() == null) {
            $current = $current->getLeft();            
        } 
        echo "minmum number is ". $current->getData(). "\n";
    }

    private function _maxfind($node) {
        $current = $node ;

        while(!$current->getright() == null) {
            $current = $current->getright();            
        } 
        echo "max number is ". $current->getData(). "\n";
    }
}


class SearchBinaryTree extends BinaryTree {
	public function insert($data) {
              
		if($this->root == NULL) {

		$this->root = new Node($data);

		} else {

			$current = $this->root;

			while($current->getData()) {

                if($data < $current->getData()) {
                
                    if($current->getLeft()) {
                        $current = $current->getLeft();
                    } else {
                        $current->setLeft(new Node($data));
                        break; 
                    }

                } else if($data > $current->getData()){

                    if($current->getRight()) {
                        $current = $current->getRight();
                    } else {
                        $current->setRight(new Node($data));
                        break; 
                    }
                } 
			} 
		}
	}
}

$arr = array(10, 5, 19, 1, 6, 17);

$tree = new SearchBinaryTree();
for($i=0,$n=count($arr);$i<$n;$i++) {
   $tree->insert($arr[$i]);
}
$tree->find('minmum'); 
$tree->find('max');