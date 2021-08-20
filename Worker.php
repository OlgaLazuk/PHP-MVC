<?php
include_once 'User.php';
//task_1
//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта)
//- имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
//class Worker
//{
//    public $name;
//    public $age;
//    public $salary;
//}

//task_2
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
// следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

//class Worker {
//    private $name;
//    private $age;
//    private $salary;
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function setAge($age)
//    {
//        if ($this->checkAge($age)) {
//            $this->age = $age;
//        }
//
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function setSalary($salary)
//    {
//        $this->salary = $salary;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//}

//task_3
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет).
//Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
//class Worker
//{
//    private $name;
//    private $age;
//    private $salary;
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function setAge($age)
//    {
//        if ($this->checkAge($age)) {
//            $this->age = $age;
//        }
//
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function setSalary($salary)
//    {
//        $this->salary = $salary;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//    private function checkAge($age)
//    {
//        if ($age > 0 && $age <= 100) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//}
// task_4
// Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
// Сделайте также public методы getName, getSalary.
////Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

//class Worker {
//    private $name;
//    private $age;
//    private $salary;
//
//   public function __construct($name, $age, $salary){
//       $this->name = $name;
//       $this->age = $age;
//       $this->salary = $salary;
//   }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//}

//task_5
//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них


class Worker extends User {
    private $salary;

    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}