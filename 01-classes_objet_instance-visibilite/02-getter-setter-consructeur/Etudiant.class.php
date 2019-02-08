<?php 

class Etudiant
{
    private $prenom;
    //construct a deux underscore
    // le constructeur s'execut automatiquement
    public function __construct($arg)
    {
        echo "Instanciation,nous avons reçu l'information suivante: $arg <br>";

        //$this est l'objet a l'interieur de la classe

        //return $etudiant->setPrenom($arg);
        return $this->setPrenom($arg);
    }
    public function getPrenom()

    {
        return $this->prenom;
        // return $etudiant->prenom;
    }

    public function setPrenom($arg)
    {

        //tout les controles sur les données sont ici
        $this->prenom=$arg;

    }
    

}

//---------------------------------------------------

$etudiant =new Etudiant('Yvette');

//__construct est appelé automatiquement - nous mettons un arg qui atterit directement dans le constructeur
//ex $bdd= new PDO('identifaintBDD..');

echo '<pre>';var_dump($etudiant);echo '</pre>';

echo "Prenom:".$etudiant->getPrenom().'<hr>';

//les données sont envoye dans le construct qui se charge d'envoyé dans le setter
//le constructeur peut tout de meme etre appelé comme une methode classique
$etudiant->__construct('Julie');

echo "Prenom:".$etudiant->getPrenom().'<hr>';

//on envoie directement donnée dans le setter
$etudiant->setPrenom('Assa');

echo "Prenom:".$etudiant->getPrenom().'<hr>';


/*  
//exemple d'insertion :c'est le getteur qui permet d'exploiter la donnée finale et de l'inserer dans la BDD
$bdd->exec(INSERT INTO (prenom) VALUES($etudiant->getPrenom()));

__construct est une methode magique qui s'execute automatiquement ;elle sera equivalent du init.php avec session_start,connexion a la BDD;autoload etc ....

setteur :permet de controler les données 
getteur :permet de voir /exploiter les données finales

private $prenom :la propriété est privé afin que l'on ne puisse pas la remplir à l'exterieur de la classe sans avoir a faire des conroles au pealable ,
c'est a dire sans être passé par les getteur /setteur


dans notre cas lorsqu'on instancie la classe les données vont directement au setteur, cest une securité on sit que les données ne vont pas n'importe ou


si nous avons un formulaire avec 2 champs ,nous aurons autant de getter et setter q'il y a de champs

ex:class->__contruct(arg1,arg2);
on aura class->set(arg1) et class->set(arg2) pour controle donnée
*/