<?php
class Worker
{
    private $name, $age, $salary;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }


    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    private function checkAge($age)
    {
        if ($age >= 1 && $age <= 100) {
            return $age = true;
        } else {
            return $age = false;
        }
    }


    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function Card()
    {
        echo ('Имя: ' . $this->getName() . ', Возраст: ' . $this->getAge() . ', Зарплата: ' . $this->getSalary() . '<br>');
    }
}

$worker_first = new Worker;
$worker_first->setName('Иван');
$worker_first->setAge(25);
$worker_first->setSalary(1000);

$worker_first->Card();

$worker_second = new Worker;
$worker_second->setName('Вася');
$worker_second->setAge(26);
$worker_second->setSalary(2000);

$worker_second->Card();

?>

<br><br>

<?php

$sumAge = $worker_first->getAge() + $worker_second->getAge();
$sumSalary = $worker_first->getSalary() + $worker_second->getSalary();

echo 'Сумма зарплат Ивана и Васи: ' . $sumSalary . '<br>';
echo 'Сумма возрастов Ивана и Васи: ' . $sumAge . '<br>';
?>