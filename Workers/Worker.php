<?php

declare(strict_types=1);

abstract class Worker
{
	private $name;
	private $salary;

    public function __construct(string $name,  iSalary $salary)
    {
        $this->name=$name;
        $this->salary=$salary;
    }

    public function getSalary() : int
    {
        return $this->salary->calcSalary();
    }

}