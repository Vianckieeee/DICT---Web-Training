<?php

class Student {
    public $Name;
    public $Age;
    public $Course;

    public function __construct($paramName, $paramAge, $paramCourse) {
        $this->Name = $paramName;
        $this->Age = $paramAge;
        $this->Course = $paramCourse;
    }

    public function message() {
        return $this->Name . " is " . $this->Age . " years old taking " . $this->Course . ".";
    }
}

$student0 = new Student("Jose", 35, "MIT");
$student1 = new Student("Leo", 12, "Elem");
$student2 = new Student("Mike", 45, "BSCS");

$students = array();
$students[] = $student0;
$students[] = $student1;
$students[] = $student2;


require 'activity5.view.php';
?>
