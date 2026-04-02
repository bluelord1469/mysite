<?php
class Employee
{
public $name; 
public $age;
public $salary;

public function __construct($name, $age, $salary)
{
$this->name = $name;
$this->age = $age;
$this->salary = $age;
}

}

$emp1 = new Employee("Detsel", 18, 100000);
$emp2 = new Employee("David", 17, 80000);

echo "name: " . $emp1->name . " age: " . $emp1->age . " salary: " . $emp1->salary . "<br>";
print_r($emp2);

?>