<?php
class Employee
{
public $name; 
private $age;
public $salary;

public function __construct($name, $age, $salary)
{
$this->name = $name;
$this->age = $age;
$this->salary = $salary;
}

public function getName() { return $this->name; }

public function getAge() { return $this->age; }

public function setAge($age) { $this->age = $age; }

public function getSalary() { return $this->salary; }

public function getSalarySum($emps) 
{
$sum = 0;
foreach($emps as $emp) { $sum += $emp->getSalary(); }
return $sum;
}

}

$emp1 = new Employee("Detsel", 18, 100000);
$emp2 = new Employee("David", 17, 80000);

$emps = [$emp1, $emp2];

echo "name: " . $emp1->name . " age: " . $emp1->getAge() . " salary: " . $emp1->salary . "<br>";
print_r($emp2);
echo "<br>";

echo $emp1->getAge() + $emp2->getAge() . "<br>";
echo $emp1->salary + $emp2->salary . "<br>";

echo $emp1->getName() . "<br>";
echo $emp2->getAge() . "<br>";
echo $emp2->getSalary() . "<br>";

echo $emp1->getSalarySum($emps) . "<br>";

$emp2->setAge(18);
echo $emp2->getAge() . "<br>";

?>