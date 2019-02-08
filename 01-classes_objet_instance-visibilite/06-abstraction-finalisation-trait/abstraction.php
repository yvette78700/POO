<?php 


abstract class Joueur
{
    public function seConnecter()
    {
            return $this->EtreMajeur();
    }

    abstract public function EtreMajeur();
    abstract public function Devise();
}//------------------

class JoueurFr extends Joueur
{
    
    public function EtreMajeur()
    {
        return 18;
    }
    public function Devise()
    {
        return "€";
    }
}
//---------------------------

//permet de declarer toute les methodes que je vais avoir besoin sans contenu et c'est au developpeur qui va l'utilser de se chager de definir son contenu
// $joueur =new Joueur;/!\ erreur n'est pas possible d'instancié une class abstraite
//pour declarer des methodes abstraite il faut que ma classe soit abstraite

$j=new JoueurFr;

echo '<pre>'; var_dump($j);echo '</pre>';

echo "il faut avoir ".$j->EtreMajeur()."pour jouer en ".$j->Devise()."<hr>";
echo "il faut avoir ".$j->seConnecter()."pour jouer en ".$j->Devise()."<hr>";

//----------------------
class JoueurUs extends Joueur 
{
    public function EtreMajeur()
    {
        return 18;
    }
    public function Devise()
    {
        return "€";
    }
}

$joueur=new JoueurUs ;

echo '<pre>'; var_dump( $joueur);echo '</pre>';

echo "il faut avoir ". $joueur->EtreMajeur()."pour jouer en ". $joueur->Devise()."<hr>";
echo "il faut avoir ". $joueur->seConnecter()."pour jouer en ". $joueur->Devise()."<hr>";

/*
--Une clase abstraite n'est aps instanciable
-les methoides abstraites n'ont pas de contenu
-lorsque l'on herite des methodes abstraites ,nous sommes obligés de les redefinir
-Pour definir des methoesd abstraites ,il est neccessaire que la classe qui les contient soit abstraite

le developpeur qui ecrit la classe Joueur est au coeur de l'application noyau et va obliger les autres developpeur à redefinir la methode Etremejeur et Devise()
c'est une bonne methode de travail .on impose de bonne contrainte.

*/