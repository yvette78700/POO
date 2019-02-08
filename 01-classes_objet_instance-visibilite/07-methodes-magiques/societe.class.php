
<?php 

class Societe 
{
    public $adresse;

    public $ville;
    public $cp;            //ville Paris
    public function __set($nom,$valeur)
    {
        echo "la propriété $nom n'existe pas,la valeur <strong>$valeur</strong> n'a pas été affecté !<br>";
    }
    //__set est une methode magique qui se declenche uniquement en cas de tentative d'affectatiion sur une propriété qu n'existe pas


                    //titre
    public function __get($nom)
    {
        echo "la propriété $nom n'existe pas,on ne peut donc pas l'afficher <hr>";
    }

    //__get est une methode magique qui s'execute automatiquement en cas de tentative d'une prorieété qui nexiste pas donc que nous n 'avons pas declarés


    public function __call($method,$argument)
    {
        echo  " la methode $method'existe pas,les argument etait<strong>".implode("-",$argument)."</strong> <hr>";
    }

    //__call est une methode magique qui s"xecute uniquement en cas de tentative d'execution d'une methode qui n'existe pas,donc qui n'a pas été declarés
}

$societe =new Societe;
$societe->villes ="Paris";

echo $societe->titre.'<br>';

echo $societe->gggg(1,2,3).'<br>';

echo '<pre>';var_dump($societe);echo '</pre>';


/* 
il y a trop d'erreur "sale" en php ,les methodes magiques permettent d'afficher des erreurs propres en francais

*/

