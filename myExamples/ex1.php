<?php
/**
 * Created by PhpStorm.
 * User: dmitriychengaev
 * Date: 29.09.17
 * Time: 9:46
 */

//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker {
    public $name;
    public $age;
    public $salary;


}

$worker = new Worker();

$worker->name = "Иван";
$worker->age = "25";
$worker->salary = "1000";

$worker2 = new Worker();

$worker2->name = "Вася";
$worker2->age = "26";
$worker2->salary = "2000";

echo "Сумма зарплат ".($worker->salary + $worker2->salary)."<br>";
echo "Сумма возрастов ".($worker->age + $worker2->age)."<br>";
