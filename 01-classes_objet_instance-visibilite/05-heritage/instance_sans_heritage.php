<?php

class A
{
   public function direBonjour()
    {
        return "Bonjour";
    }
}

//-------------------------

class B//la class B n'herite pas de la class A
{
    public $mavariable;
    public function __construct()
    {
        $this->mavariable = new A;//je créé un objet A que je place dans la proriété de mon objet B

        echo '<pre>';var_dump($this->mavariable);echo '</pre>';
    }


    public function uneMethode()
    {
        return $this->mavariable->direBonjour();//dans mon objet b je peux appélé des methodes sur mon objet A 
        //en mettant une autre fleche apres la prorité qui pointe sur la methode de A
    }
    

}

//---------------------------

$b=new B;

echo $b->uneMethode().'<hr>';
echo $b->mavariable->direBonjour();