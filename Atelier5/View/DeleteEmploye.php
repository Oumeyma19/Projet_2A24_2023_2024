<?php

include '../Controlleur/EmployeeC.php';

/*$employeC = new EmployeC();
$list = $employeC->deleteEmployes();*/
$empl1 = new EmployeC();
$empl1->deleteEmploye($_GET['ID']);
header('Location:ListEmployes.php');



?>