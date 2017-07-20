<?php

abstract class Persona{
    protected $Name;
    protected $age;
    protected $Phone;
    
    
    public function __construct($Name,$age)
    {
        $this->Name=$Name;
        $this->age=$age;
    }
    
    public function getName()
    {
        return $this->Name;
    }
    
    public function setAge($age)
    {
        $this->age=$age;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    abstract public function Saludar(Persona $usuario);
    
    
    public function EdadPermitida($anioNacimiento)
    {
        $edad=$anioNacimiento;
        $acceso="acceso denegado {$edad}";
        if($edad > 18) {
            $acceso="acceso permitido {$edad}";
        }
        echo "<p>$acceso</p>";
    }
    
}


class User extends Persona{
    
    public function Saludar(Persona $user)
    {
        echo "<p>{$this->Name} dice hola a {$user->getName()}</p>";
        //var_dump($user);
    }
    
     public function EdadPermitida($anioNacimiento)
     {
        return parent::EdadPermitida(2017-$anioNacimiento);
     }
    
}

class Contact extends Persona{
     public function Saludar(Persona $user)
    {
         echo "<p>{$this->Name} dice hola a {$user->getName()}</p>";
         //var_dump($user);
    }
    
    
     public function EdadPermitida($anioNacimiento)
     {
        return parent::EdadPermitida(2017-$anioNacimiento);
     }
}


$user = new User('Julio',29);

$concat = new Contact('Cesar',24);

$user->Saludar($concat);
//$user->EdadPermitida(1988);

$concat->Saludar($user);
//$concat->EdadPermitida(1993);