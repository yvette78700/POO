<?php 

class Maison
{
    private static $nbpiece=7;

    public static $espaceTerrain='500m';

    public $couleur ='blanc';

    const HAUTEUR ='10m';

    private $nbPorte =10;

    public static function getNbPiece()
    {
        return self::$nbpiece;
    }

    public function getNbPorte()
    {
        return $this->nbPorte;

    }

}

//1- afficher le nombre de piece de la maison

//2- Afficher l'espace terrain de la maison

//3-afficher la hauteur de la maison

//4-Afficher la couleur de la maison

// 5- afficher le nombre de porte de la maison 



$maison=new Maison;

echo "La maison a :<strong>". Maison::getNbPiece()."</strong> pieces<br>";

echo "l'espace terrain de la maison est de :<strong>".Maison::$espaceTerrain."</strong> de surface <br>";

echo "la maison a une hauteur de :<strong>".Maison::HAUTEUR."</strong><br>";//exemple fetch(PDO::FETCH_ASSOC)

//une constante se declare en majuscule sans dollar et appartient a la class et pas a un objet

echo "la couleur de la maison est <strong>".$maison->couleur."</strong><br>";

echo "la maison a <strong>:".$maison->getNbPorte()."</strong> portes <br>";

// echo $maison::$espaceTerrain; //devrait donner une erreur ,c'est du n'importe quoi

// echo $maison->espaceTerrain.'<br>';// /!\erreur !! je ne dois pas appeler une propriété static avec mon objet

echo $maison->getNbPiece().'<br>';//devrait generer une erreur car la methode est statique il faudrait l'appeler avec la classe


// echo Maison::$couleur;:!\erreur on ne doit pas appeler une pté public par la classe