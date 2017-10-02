<?php
/**
 * Created by PhpStorm.
 * User: dmitriychengaev
 * Date: 29.09.17
 * Time: 9:46
 */

//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).


class Worker {
    private $name;
    private $age = 1;
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
        if($this->checkAge($age)) {
        $this->age = $age;
        }
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

    private function checkAge($age)
    {
        if($age > 1 && 100 > $age) {
         return true;
        }
        else {
        return false;
        }
    }


}

$worker = new Worker();

$worker->setName('Иван');
$worker->setAge('3');
$worker->setSalary('1000');

$worker2 = new Worker();

$worker2->setName('Вася');
$worker2->setAge('4');
$worker2->setSalary('4000');


echo "Сумма зарплат ".($worker->getSalary() + $worker2->getSalary())."<br>";
echo "Сумма возрастов ".($worker->getAge() + $worker2->getAge())."<br>";
