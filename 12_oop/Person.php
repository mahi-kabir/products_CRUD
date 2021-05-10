<?php
class Person{
    public $name; public $age; private ?int $salary;
    public static $counter = 0;

public function __construct($aName, $aAge){
    $this->name = $aName;
    $this->age = $aAge;
    self :: $counter++;
    $this->salary = null;
}
 public function setSalary($salary){
     $this->salary = $salary;
 }

 public function getSalary(){
     return $this->salary;
 }

 public static function getCounter(){
     return self :: $counter;
 }
}
?>