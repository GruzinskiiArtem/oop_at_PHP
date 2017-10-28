<?php

require_once('Team.php');
require_once('Workers\Developer.php');
require_once('Workers\Designer.php');
require_once('Workers\Pagemaker.php');
require_once('Salary\FixedSalary.php');
require_once('Salary\HourSalary.php');
require_once('Salary\iSalary.php');

$designer = new Designer('Грузинский Артем Евгеньевич', new FixedSalary(3000));
$developer1 = new Developer('Николаев Никита Игоревич', new HourSalary(10, 60));
$developer2 = new Developer('Шурыгин Диан Дионисович', new FixedSalary(1000));
$developer3 = new Developer('Алёшкин Алексей Васильевич', new FixedSalary(1000));
$pagemaker = new Pagemaker('Сашко Артур Викторович', new HourSalary(5, 120));

$team = new Team();

$team->addWorker($designer);
$team->addWorker($developer1);
$team->addWorker($developer2);
$team->addWorker($developer3);
$team->addWorker($pagemaker);

echo $team->salaryTeam();