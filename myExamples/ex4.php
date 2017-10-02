<?php
/**
 * Created by PhpStorm.
 * User: dmitriychengaev
 * Date: 29.09.17
 * Time: 9:46
 */

//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.

//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.


class Worker {
    private $name;
    private $age;
    private $salary;

    /**
     * Worker constructor.
     * @param $name
     * @param $salary
     */
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }



}

$worker = new Worker("Дима","25","1000");



echo "Произведение зарплаты и возраста ".($worker->getAge() * $worker->getSalary());
