<?php

declare(strict_types=1);

require_once('iSalary.php');

class FixedSalary implements iSalary
{
    private $money;
    private $salary;

    function __construct(int $money)
    {
        $this->money = $money;
    }

    function calcSalary() : int
    {
        $this->salary = $this->money;
        return $this->salary;
    }

}