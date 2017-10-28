<?php

declare(strict_types=1);

require_once('iSalary.php');

class HourSalary implements iSalary
{
    private $money;
    private $hour;
    private $salary;

    function __construct(int $money, int $hour)
    {
        $this->money=$money;
        $this->hour=$hour;
    }

    function calcSalary(): int
    {
        $this->salary=$this->money*$this->hour;
        return $this->salary;
    }

}