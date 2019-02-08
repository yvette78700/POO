<?php
//pattern design singleton
class  singleton
{
    public $numero =20;

    private static $instance = null;//objet issu de la classe singleton
    private function __construct(){//la class n est pas instaciable car le constructur d'objet qui s'execute automatiquemnt est private

    }

    private function __clone(){}//l'objet ne sera pas clonable car private 
    public static function getInstance()
    {
        if(is_null(self::$instance))//si instance est null ,la 1ere fois c'est null toute les autres fois je ne rentre pas ici car il ya un objet $instance
        {
            self::$instance =new Singleton;//on stocke un objet de class singleton dans $instance
        }
        return self::$instance;//dans tous les cas je retoune un objet instance
    }
}

//---------------------------
// $s=new Singleton;//erreur car le consructeur est private

$objet1=Singleton::getInstance();

echo '<pre>';var_dump($objet1);echo '</pre>';//objet1 est à la reference#1

$objet2=Singleton::getInstance();

echo '<pre>';var_dump($objet2);echo '</pre>';//objet 2 est à la reference #1 il s'agit du meme objet

echo $objet1->numero.'<br>';
echo $objet2->numero.'<br>';
$objet2->numero=21;
echo $objet2->numero.'<br>';
echo $objet1->numero.'<br>';