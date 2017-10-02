<?php
/**
 * Created by PhpStorm.
 * User: dmitriychengaev
 * Date: 29.09.17
 * Time: 9:46
 */

//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker {
    private $name;
    private $age;
    private $salary;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }



}

$worker = new Worker();

$worker->setName('Иван');
$worker->setAge('25');
$worker->setSalary('1000');

$worker2 = new Worker();

$worker2->setName('Вася');
$worker2->setAge('23');
$worker2->setSalary('4000');


echo "Сумма зарплат ".($worker->getSalary() + $worker2->getSalary())."<br>";
echo "Сумма возрастов ".($worker->getAge() + $worker2->getAge())."<br>";
