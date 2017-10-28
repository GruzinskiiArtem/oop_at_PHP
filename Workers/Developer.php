<?php

declare(strict_types=1);

require_once('Worker.php');

class Developer extends Worker
{

    public function __construct(string $name, iSalary $salary)
	{
	    parent::__construct($name, $salary);
	}

}