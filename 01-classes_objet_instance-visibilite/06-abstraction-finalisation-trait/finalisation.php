<?php 
final class Application
{
    public function lancementApplication()
    {
        return "l'application se lance comme cela !!";
    }
}

//-----------------------------------------
$app=new Application;

echo '<pre>';var_dump($app);echo '</pre>';

// class Test extends Application{}//on ne peut pas herité d'une class finale

//------------------------------------


class Application2
{
    final public function lancementApplication()
    {
        return "l'application se lance comme cela !!";
    }
}

class Extension extends Application2
{
    // public function lancementApplication(){}//erreur je ne peut pas surcharger ou redefinir une methode final
}

//par contre je peut l'utiliser

$ext= new Extension;

echo $ext->lancementApplication();

/* -une class finale ne peut pas etre herité
-une class finale reste instanciable
-une methode finale peut etre presente dans une classe normale
-une methode finale permet d'eviter qu'elle soit redefini ou surcharger
-l'interet de mettre le mot clé final sur une methode est de verouillé afin d'empecher tout souds class de la redefinir (quand nous voulons que le comporte,net
d'une methode soit preservé durant l'heritage)

*/








