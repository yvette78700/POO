<?php

class Vehicule
{
    private static $marque = 'BMW';
    private $couleur = 'noir';

    public static function setMarque($marque){

        self::$marque=$marque;
    }
    public static function getMarque()
    {
        return self::$marque;
    }


    public function setCouleur($couleur)
    {
        $this->couleur=$couleur;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }
}



//static € a la classe et pas static € a l'objet



$vehicule1= new Vehicule ;

echo "vehicule1 de marque <strong>".Vehicule::getMarque()."</strong> et de couleur <strong>".$vehicule1->getCouleur()."</strong><br>";


$vehicule2 =new Vehicule;

$vehicule2->setCouleur('rouge');

echo "vehicule2 de marque <strong>".Vehicule::getMarque()."</strong> et de couleur <strong>".$vehicule2->getCouleur()."</strong><br>";


$vehicule3 =new Vehicule;



echo "vehicule3 de marque <strong>".Vehicule::getMarque()."</strong> et de couleur <strong>".$vehicule3->getCouleur()."</strong><br>";


$vehicule4 =new Vehicule;

$vehicule2::setMarque('mercedes');

echo "vehicule4 de marque <strong>".Vehicule::getMarque()."</strong> et de couleur <strong>".$vehicule4->getCouleur()."</strong><br>";


$vehicule5 =new Vehicule;



echo "vehicule de marque <strong>".Vehicule::getMarque()."</strong> et de couleur <strong>".$vehicule5->getCouleur()."</strong><br>";

/* Un element declaré comme static appartient a la classe et non à l'objet 
si je modifie un element static ,je modifie la classe elle meme 
$objet->élement d'un objet à l'exterieur de la classe

$this-> element d'un objet à l'interieur de la classe

class:: element de la classe à l'exterieur de la classe
self:: element d'une classe à l'interieur de la classe
*/