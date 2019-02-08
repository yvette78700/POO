
<?php 

class Homme
{
    private $error;
    private $prenom;
    private $nom;

    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->prenom=$prenom;
        }
        else
        {
            $this->error= trigger_error("ce n'est pas un string",E_USER_WARNING);
            return  $this->error;
        }
    }


    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom($nom)
    {
        if(is_string($nom))
        $this->nom=$nom;
    }

    public function getNom()
    {
        return $this->nom;
    }
}

//---------------------------------------------

$homme = new Homme;

$homme->setPrenom("Yvette");
//erreur car chiffre
// $homme->setPrenom(25);
echo $homme->getPrenom().'<hr>';

$homme->setNom("Toukam");

echo $homme->getNom().'<hr>';

//-----------------------------


//ce ligne ne donne aucun prenom car en ayant reinstancié l'objet preuve qu'on modifie bien l'objet et nom la class
//ou encore les données sont propre a l'objet et nom la class
$homme2= new Homme;
echo $homme2->getPrenom().'<hr>';

//$this represente l'objet à l'interieur de la class

