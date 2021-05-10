<?php

// Define class Shape following hint 1
abstract class Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

// Define Rectangle class following hint 2
class Rectangle extends Shape {
    public function area() {
        return ($this->width * $this->height);
    }
}

// Define Triangle class following hint 2
class Triangle extends Shape {
    public function area() {
        return ($this->width * ($this->height/2));
    }
}

// Try to calculate area of a Rectangle
$rectangle = new Rectangle(1,2);
echo $rectangle->area();

// Try to calculate area of a Triangle
$triangle = new Triangle(1,2);
echo $triangle->area();

?>
