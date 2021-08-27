<?php

# Open Close Principle
// A Class should be open for extension and closed for modifications
// When you have a Class or Method you want to extend without modifying it, Separate the extensible behavior behind an interface and then flip the dependencies ~uncle bob

# incorrect implementation 

class Square
{
    public $length;
}

class Circle
{
    public $radius;
}

class Triangle
{
    public $base;
    public $height;
}

class AreaCalculator
{
    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            if (is_a($shape, 'Square')) {
                $area[] = $shape->length * $shape->length;
            } else if (is_a($shape, 'Circle')) {
                $area[] = pi() * ($shape->radius * $shape->radius);
            }
        }

        return array_sum($area);
    }
}

// As we can see when our requirement is increased, we have to modify calculate function which is violation of this principle.


# Right Way
interface Shape
{
    public function area();
}

class Square implements Shape
{
    public $length;
    public function area()
    {
        return $this->length * $this->length;
    }
}

class Circle implements Shape
{
    public $radius;
    public function area()
    {
        return pi() * ($this->radius * $this->radius);
    }
}

class Triangle implements Shape
{
    public $base;
    public $height;
    public function area()
    {
    }
}

class AreaCalculator
{
    public function calculate(Shape $shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}
