<?php
class AreaCalculate
{
    public function calculate(AreaInterface $shape)
    {
        $costPerUnit = 1.5;
        $totalCost = $costPerUnit * $shape->calculateArea();
        return $totalCost;
    }
}

interface AreaInterface {
    public function calculateArea();
}

class Rectangle implements AreaInterface
{
    public $width;
    public $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        $area = $this->height * $this->width;
        return $area;
    }
}
  
class Circle implements AreaInterface
{
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function calculateArea(){
        $area = $this->radius * $this->radius * pi();
        return $area;
    }
}
$circle = new Circle(5);
$run = new AreaCalculate();
echo $run -> calculate($circle);
?>