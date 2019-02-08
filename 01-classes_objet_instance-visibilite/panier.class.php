
<?php 

class Panier
{
    public $nbProduits;
    public function ajouterArticle()
    {
        return "L'article a été ajouté";
    }
    protected function retirerArticle()
    {
        return "L'article a été retiré";
    }

    private function affichageArticle()
    {
        return "Voici les articles";
    }

    // public function test(){
    //     return $this->retirerArticle();
    // }
}

$panier1 = new Panier;

//on observe un objet issu de la class Panier à l'identifiant '1' (référence de l'objet)
echo '<pre>';var_dump($panier1);echo '</pre>';

//fontion predefini nous permettant d'observer les methodes issues d'une class
//on ne voit que la 1ere car les autre ne sont pas visible

echo '<pre>';var_dump(get_class_methods($panier1));echo '</pre>';

//pas de signe dolar $ car la proprité appartient a la class

$panier1->nbProduits=5;
echo '<pre>';print_r($panier1);echo '</pre>';


//on pioche une proprité de la class a travers l'objet

echo "Nombre de produit dans le panier 1 :".$panier1->nbProduits.'<br>';

//on pioche une methode de la class à travers l'objet
echo "panier >".$panier1->ajouterArticle().'<br>';


// echo "panier >".$panier->retirerArticle().'<br>';
//!\erreur car methode protected et accessible que dans la class ou cela a été declaré ainsi que dans les class heritières

// echo "panier >".$panier->affichageArticle().'<br>';
//!\erreur car methode private et accessible que dans la class ou cela a été declaré 

$panier2=new Panier;
echo '<pre>';var_dump($panier2);echo '</pre>';

$panier2->nbProduits =3;
echo "Nombre de produit dans le panier 2 :".$panier2->nbProduits.'<br>';

//la propriété € a  l'objet et non a la class

/* niveau de visibilité
    -public :accesible partout peut etre utiliser partout
    -protected :accessible dans la class mere et heritière
    -private :accessible dans la class mere

    'new' est le mot clé permettant d'effectuer une instanciation 
    une  classe peut produire pls objets.Nous pouvons effectuer pls instanciations 'new'
    $panier1 represente l'objet issu de la classe 'Panier'

    La class est le plan de construction / $panier 1 represente un exemplaire de la classe
*/

