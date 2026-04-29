<?php

class student{
    public $name;
    public $age;
    public $grade;
    public $newGrade;

    function display($name, $age, $grade){
       echo "Name : " . $this->name = $name . "<br>";
       echo "Age : " . $this->age = $age . "<br> ";
       echo "Grade : " . $this->grade = $grade . "<br> <br>";
    }
    function UpdateGrade($newGrade){
       echo "Updated Grade : " . $this->grade = $newGrade . "<br> <br>" ; 
    }
}

$student1 = new student();
$student1 -> display( "Ali", 22, "A");
$student1 -> UpdateGrade ("A+");


$student2 = new student();
$student2 -> display( "Hassan", 24, "B");
$student2 -> UpdateGrade ("B+");

$student3 = new student();
$student3 -> display( "Bilal", 21, "C");
$student3 ->UpdateGrade("C+");





?>