<?php

declare(strict_types=1);

require_once('Workers\Developer.php');
require_once('Workers\Designer.php');
require_once('Workers\Pagemaker.php');
require_once('Salary\FixedSalary.php');
require_once('Salary\HourSalary.php');
require_once('Salary\iSalary.php');

class Team
{
    private $salaryTeam = 0;
	private $team = array();


    public function addWorker(Worker $worker) : void
	{
		$this->team[] = $worker;
	}

	public function salaryTeam() : int
	{
		for($i=0; $i<count($this->team); $i++)
        {
            $this->salaryTeam += $this->team[$i]->getSalary();
        }
		return $this->salaryTeam;
	}
}