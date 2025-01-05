<?php
/**
 * Student Class
 */

 class Student {
    public $name = "Gouranga Roy";
    public $age = 26;
    public $skill = "Laravel Dev";

    public function info($name, $age) {
        return "My name is {$name} and I am {$age} years old";
    }

    public function ageCal() {
        echo $this->info("Korim", 10);
        echo $this->skill;
    }
    public function isMarried() {}
 }

 $student  = new Student;

 $student->ageCal();




?>