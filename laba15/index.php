<?php
interface AreaCalculator
{
public function getArea();
}

abstract class Figure
{
protected float $area;
protected string $color;
protected int $sideCount;

public function __construct(string $color, int $sideCount)
{
$this->color = $color;
$this->sideCount = $sideCount;
$this->area = 0;
}

abstract public function infoAbout();
}

class Rectangle extends Figure implements AreaCalculator
{
private const sideCount = 4;
private float $a;
private float $b;

public function __construct(float $a, float $b, string $color)
{
parent::__construct($color, self::sideCount);
$this->a = $a;
$this->b = $b;
}

public function getArea()
{
$this->area = $this->a * $this->b;
return round($this->area, 3);
}

public function infoAbout()
{
echo "Это класс прямоугольника. У него {$this->sideCount} стороны";
}

}

class Square extends Figure implements AreaCalculator
{
private const sideCount = 4;
private float $a;

public function __construct(float $a, string $color)
{
parent::__construct($color, self::sideCount);
$this->a = $a;
}

public function getArea()
{
$this->area = $this->a * $this->a;
return round($this->area, 3);
}

public function infoAbout()
{
echo "Это класс квадрата. У него {$this->sideCount} стороны";
}

}

class Triangle extends Figure implements AreaCalculator
{
private const sideCount = 3;
private float $a;
private float $b;
private float $c;

public function __construct(float $a, float $b, float $c, string $color)
{
parent::__construct($color, self::sideCount);
$this->a = $a;
$this->b = $b;
$this->c = $c;
}

public function getArea()
{
$p = ($this->a + $this->b + $this->c) / 2;
$this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
return round($this->area, 3);
}

public function infoAbout()
{
echo "Это класс треугольника. У него {$this->sideCount} стороны";
}

}


$s1 = new Square(5, "Синий");
$s2 = new Square(13, "Красный");

$r1 = new Rectangle(6, 7, "Зеленый");
$r2 = new Rectangle(1, 2, "Розовый");

$t1 = new Triangle(2, 3, 4, "Желтый");
$t2 = new Triangle(5, 6, 10, "Оранжевый");

$arr = [$s1, $s2, $r1, $r2, $t1, $t2];

foreach ($arr as $item)
{
echo $item->infoAbout() . "<br>";
echo "Площадь фигуры: " . $item->getArea() . "<br>";
}

?>