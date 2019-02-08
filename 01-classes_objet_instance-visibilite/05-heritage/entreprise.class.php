<?php
class Electricien
{
    public function getSpecialiste()
    {
        return "pose de cables,disjoncteurs,tableaux ou armoirs électriques....<hr>";
    }

    public function getHoraires()
    {
        return "10h/18h";
    }
}

//--------------------------------------
class Plombier
{
    public function getSpecialiste()
    {
        return "tuyeau,robinets,chauffe-eau,compteurs...<hr>";
    }

    public function getHoraires()
    {
        return "8h/19h";
    }
}
//---------------------------------
class Entreprise
{
    public $numero=0;
    public function appelUnEmploye($employe)
    {
    $this->numero++;
    //$this->monEmploye1=new plomblier;
    $this->{"monEmploye".$this->numero}=new $employe;

    //création d'une variable dynamisque dans laquelle on stocke une instance


    return $this->{"monEmploye".$this->numero};
    //ici on retourne un objet

    }
}

//-------------------------
$entreprise =new Entreprise;

echo '<pre>';var_dump($entreprise);echo '</pre><hr>';

$entreprise->appelUnEmploye('plombier');

echo $entreprise->monEmploye1->getSpecialiste().'<hr>';

//exo faites la meme chose pour la class electricien

$entreprise->appelUnEmploye('electricien');
echo '<pre>';var_dump($entreprise);echo '</pre><hr>';

echo $entreprise->monEmploye2->getSpecialiste().'<hr>';

//ici on ne passe pas par l'heriage pour generer des objet mais on créée inclut une instance des autres dans des fonctions des un pour y avoir acces


