<?php 

$nom=$_POST["FirstName"];
$prenom=$_POST["LastName"];
$phone=$_POST["telephone"];
$email=$_POST["email"];
$dob=$_POST["DateOfBirth"];
$pass1=$_POST["password1"];
$pass2=$_POST["password2"];

include "../Controlleur/EmployeeC.php";
include "../Model/Employee.php";

$employe=new Employee($nom,$prenom,$pass1,$phone,$email,$dob,);
$emplo=new EmployeC();
$emplo->showEmploye($employe);

?>