<?php
/*

---------------------------------
|class Vehicule
----------------------------
|$litresEssence
------------------------
|setLitresEssence()
|getLitresEssence()



-------------
|class Pompe
----------------
|$litresEssence
---------------
|setLitresEssence()
|getLitresEssence()
|donnerEssence()


Enoncé:1- création d'un vehicule1 
       2-  attribuer un nombre de litres d'essence au vehicule1:5
       3-afficher le nombre de litres d'essence du vehicule1
       4-creation d'une pompe
       5- attribuer le nombre de litre à la pompe:800 
       6- Afficher le nbre de litres d'essence de la pompe
       7-la pompe donne de l'essence en faisant le plein(50l) a la voiture1
       8-afficher le nombre de litres d'essence de la voiture apres ravitaillement
       9-Afficher le nombre de litrerestant à la pompe

       public function donnerEssence(vehicule)

*/

class Vehicule
{
    private $litresEssence;

    public function setLitresEssence($litres)
    {

        return $this->litresEssence=$litres;
    }


    public function getLitresEssence()
    {

        return $this->litresEssence;
    }
}

$vehicule1 =new Vehicule;

$vehicule1->setLitresEssence(5);

echo "la voiture possede <strong>".$vehicule1->getLitresEssence().'</strong> litres d\'essence<br><hr>';

class Pompe

{
    private $litresEssence;

    public function setLitresEssence($litresEssence)
    {

        return $this->litresEssence=$litresEssence;
    }


    public function getLitresEssence()
    {

        return $this->litresEssence;
    }


    //$v represente un objet de type vehicule
    public function donnerEssence(Vehicule $v)
    {
        $this->setLitresEssence($this->getLitresEssence()-(50-$v->getLitresEssence()));
        //800                                               //-50+5

        $v->setLitresEssence($v->getLitresEssence()+(50-$v->getLitresEssence()));
    }

  
}

$pompe=new Pompe;

$pompe->setLitresEssence(800);

echo  "la pompe possede <strong>".$pompe->getLitresEssence().'</strong> litres d\'essence<br><hr>';


$pompe->donnerEssence($vehicule1);

echo "Apres ravitaillement le vehicule 1 possede <strong>".
$vehicule1->getLitresEssence()."</strong> litres d'essence<br>";

echo "Apres ravitaillement la pompe possede <strong>".
$pompe->getLitresEssence()."</strong> litres d'essence<br>";








