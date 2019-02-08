
<?php 

class A 
{
    public function calcul()
    {
        return 10;
    }
}

//la surchage permet d'ameliorer une fonction deja declarée

class B extends A 
{
    public function calcul()
    {
        $nb = parent::calcul();
        //parent fonctionne pour appeler une methode d'1 class parente lors d'1 surcharge (afin d'eviter qu'elle ne s'appelle elle-meme 
        //$this->calcul car elle est redefini)

        if($nb <= 100) return "$nb est inferieur ou égal à 100";
        else            return "$nb est superieur à 100";
    }


    public function autreCalcul()//il est possible d'atteindre une methode de mon parent meme s'il n'ya pas de redefinition
    {
        $nb= parent::calcul();
        return $nb;

    }
}
//----------------------
//surchage - override: une redefinition + surchage me permet de prendre en compte le comportement de ma fonction et d'y ajouter un traitement complementaire
//contexte =>pour une surchege ,si on faisait pas ça dans wordpress,on ne pourrais pas mettre à jour le CMS ,on modifierai les fonctions du coeur
$b=new B;

echo $b->calcul().'<hr>';
echo $b->autreCalcul().'<hr>';