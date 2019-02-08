<?php
//comment cloner un objet et cmt transmetre les donnes d'une class a une autre

class Ecole
{
    public $nom="WF3";
    public $cp=78;
    public function __clone()
    {
        $this->cp=92;
    }
}

//-------------------------------
$ecole1=new Ecole;

$ecole1->cp=75;
echo '<pre>';var_dump($ecole1);echo '</pre>';

$ecole2=new Ecole;
echo '<pre>';var_dump($ecole2);echo '</pre>';

$ecole3=$ecole1;
echo '<pre>';var_dump($ecole3);echo '</pre>';

//lorsque je modifie ecole1 cela affecte ecole3 et vis versa
//ecole1 et ecole3 sont des references qui pointe vers le meme objet #1 ils represente le meme objet

$ecole3->cp=91;

echo 'Ecole1:'.$ecole1->cp.'</pre><hr>';
echo 'Ecole3:'.$ecole3->cp.'</pre><hr>';
//a ce momment la methode magisue clone() s'execute
//clone crée un objet et recupere les info $ecole et le code entre les accolades s'execute,on change donc la valeur pour $cp
$ecole4= clone $ecole2;
echo '<pre>';var_dump($ecole4);echo '</pre>';





