<?php
class AreaCalculate
{
    public function calculate(AreaInterface $shape)
    {
        $shapenumber = 10;
        $totalArea = $shapenumber * $shape->calculateArea();
        return $totalArea;
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
$rectangle = new Rectangle(5, 2);
$run = new AreaCalculate();
echo $run -> calculate($rectangle);
?>