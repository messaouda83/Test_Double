<?php
namespace App;

use Ramsey\Uuid\Uuid;
use Exception;

class Personne
{
protected $id;
protected $nom;
protected $prenom;
protected $age;
protected $datenaissance;

public function __construct(DateNaissanceInterface $datenaissance) 
{
    
    $this->id = (string)Uuid::uuid4();
    /* $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age; */
    $this->datenaissance = $datenaissance;
}
public function getId(){
    return $this->id;
}
public function getDateNaissance()
    {
        return $this->datenaissance->getJour()." ".$this->datenaissance->getMois()." ".$this->datenaissance->getAnnee();
    }
}