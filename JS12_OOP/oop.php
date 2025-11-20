<?php
// ==========================
// bagian 1
// ==========================
class Car
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!<br>";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand;

echo "<br><br>";

// ==========================
// bagian 2
// ==========================
class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }

    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " says meow!<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();

echo "<br><br>";

// ==========================
// bagain 3
// ==========================
interface Shape
{
    public function calculateArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);
printArea($rectangle);

echo "<br>";

// ==========================
// bagain 4
// ==========================
class Car1 {
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$car = new Car1("Toyota", "Blue");

echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

$car->setColor("Red");

echo "Updated Color: " . $car->getColor() . "<br>";

echo "<br>";

// ==========================
// bagian 5
// ==========================
abstract class Shape1
{
    abstract public function calculateArea1();
}

class Circle1 extends Shape1
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea1()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle1 extends Shape1
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea1()
    {
        return $this->width * $this->height;
    }
}

$circle1 = new Circle1(5);
$rectangle1 = new Rectangle1(4, 6);

echo "Area of circle: " . $circle1->calculateArea1() . "<br>";
echo "Area of rectangle: " . $rectangle1->calculateArea1() . "<br>";

echo "<br>";
//bagian 6
interface Shape2
{
    public function calculateArea2();
}

interface Color2
{
    public function getColor2();
}

class Circle2 implements Shape2, Color2
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea2()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getColor2()
    {
        return $this->color;
    }
}

$circle = new Circle2(5, "Blue");

echo "Area of Circle: " . $circle->calculateArea2() . "<br>";
echo "Color of Circle: " . $circle->getColor2() . "<br>";

echo "<br>";
//bagian 7
class Car3
{
    private $brand;

    public function __construct($brand)
    {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}

$car4 = new Car3("Toyota");

echo "Brand: " . $car4->getBrand() . "<br>";

echo "<br>";
 // bagian 8
class Animal5
{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$animal6 = new Animal5("Dog", 3, "Brown");

echo "Name: " . $animal6->getName() . "<br>";
echo "Age: " . $animal6->getAge() . "<br>";
echo "Color: " . $animal6->getColor() . "<br>";

?>
