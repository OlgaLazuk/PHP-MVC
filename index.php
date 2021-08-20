<?php

include_once 'Worker.php';
include_once 'User.php';
include_once 'Student.php';
include_once 'Driver.php';
//task_1
//$worker1 = new Worker();
//$worker1->name = 'Иван';
//$worker1->age = 25;
//$worker1->salary = 1000;
//
//$worker2 = new Worker();
//$worker2->name = 'Вася';
//$worker2->age = 26;
//$worker2->salary = 2000;

//echo $worker1->salary + $worker2->salary;
//echo ' <br/>';
//echo $worker1->age +$worker2->age;


//task_2
//$worker1 = new Worker();
//$worker1->setName('Иван');
//$worker1->setAge(25);
//$worker1->setSalary(1000);
//
//$worker2 = new Worker();
//$worker2->setName('Вася');
//$worker2->setAge(26);
//$worker2->setSalary(2000);
//
//echo $worker1->getSalary() + $worker2->getSalary();
//echo ' <br/>';
//echo $worker1->getAge() + $worker2->getAge();

//task_3
//$worker1 = new Worker();
//$worker1->setName('Иван');
//$worker1->setAge(125);
//$worker1->setSalary(1000);
//
//$worker2 = new Worker();
//$worker2->setName('Вася');
//$worker2->setAge(126);
//$worker2->setSalary(2000);
//
//echo $worker1->getSalary() + $worker2->getSalary();
//echo ' <br/>';
//echo $worker1->getAge() + $worker2->getAge();

//task_4
//$worker = new Worker('Дима', 25, 1000);
//echo $worker->getSalary() * $worker->getAge();

//task_5
 $worker1 = new Worker();
 $worker1->setName('Иван');
 $worker1->setAge(25);
 $worker1->setSalary(1000);

 $worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);


 $user = new User();
 $student = new Student();
 echo $worker1->getSalary() + $worker2->getSalary();

//task_6
$driver = new Driver();
