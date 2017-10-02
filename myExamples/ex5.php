<?php
/**
 * Created by PhpStorm.
 * User: dmitriychengaev
 * Date: 29.09.17
 * Time: 9:46
 */

//Наследование
// Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.
//
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
//
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

class User {
    protected $name;
    protected $age;


    /**
     * Worker constructor.
     * @param $name
     * @param $salary
     */

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

}

Class Worker extends User {

    private $salary;

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
