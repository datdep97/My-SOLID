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

/*class Triangular implements AreaInterface
{
    public $height;
    public $base;
    public function __construct($height, $base)
    {
        $this->height = $height;
        $this->base = $base;
    }
    public function calculateArea(){
        $area = $this->height * $this->base / 2;
        return $area;
    }
}*/
$triangular = new Triangular(5, 2);
$run = new AreaCalculate();
echo $run -> calculate($triangular);
?>