<?php 
 
 abstract class Vehicule
{

    
 final public function demarrer()
    {
        return "Je demarre";
    }

   abstract public function carburant();
  

    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}

//$vehicule = new Vehicule;reponse1
class Peugeot extends Vehicule{

    public function carburant()
    {
        return 'Essence';
    }

    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire()+70;
    }
    
}
    
class Renault extends Vehicule{



    public function carburant()
    {
        return 'diesel';
    }

    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire()+30;
    }

}

$peugeot =new Peugeot;

echo "Peugeot >".$peugeot->demarrer().'<br>';
echo "Peugeot >".$peugeot->carburant().'<br>';
echo "Peugeot >".$peugeot->nombreDeTestObligatoire().'<hr>';

$renault =new Renault;

echo "Peugeot >".$renault->demarrer().'<br>';
echo "Peugeot >".$renault->carburant().'<br>';
echo "Peugeot >".$$renault->nombreDeTestObligatoire().'<hr>';


//

/* 1- faire en sorte de ne pas avoir d'objet Vehicule
2- Obligation pour la renault et la peugeot de posseder demarrer() qu'un vehicule de base
3- Obligation pour la renault de declarer un carburant diesel et pour la peugeot de declarer un carburant essence
4-La renault doit effectuer 30 tests de plus qu'un vehicule de base
5-La peugeot doit effectuer 70 tests de plus qu'un vehicule de base
6-effectuer les affichages neccessaire*/

