<?php

class Employee{

    private $firstName;

    private $lastName;

    private $password;

    private $phone;

    private $email;

    private $dOB;  //date_de_naissance

    /*public function__construct()
    {
        $this->firstName="";
        $this->lastName="";
        $this->password="";
        $this->phone="";
        $this->email="";
        $this->dOB="";
    }*/

    public function __construct($a,$b,$c,$d,$e,$f)
    {
        $this->firstName=$a;
        $this->lastName=$b;
        $this->password=$c;
        $this->phone=$d;
        $this->email=$e;
        $this->dOB=$f;
    }

    public function Afficher()
    {
        echo "Nom :".$this->firstName;
        echo "Prenom :".$this->lastName;
        echo "Password :".$this->password;
        echo "Phone :".$this->phone;
        echo "Email :".$this->email;
        echo "Date de Naissance :".$this->dOB;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($a)
    {
        $this->lastName=$a;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($a)
    {
        $this->firstName=$a;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($a)
    {
        $this->password=$a;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($a)
    {
        $this->phone=$a;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($a)
    {
        $this->email=$a;
    }

    public function getDate()
    {
        return $this->dOB;
    }

    public function setDate($a)
    {
        $this->dOB=$a;
    }


}

$personne1=new Employee("Jane","Doe","123456789","29923207","Jane.Doe@gmail.com","1/1/2000");
$personne1->Afficher();

