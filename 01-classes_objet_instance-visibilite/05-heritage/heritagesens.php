<?php

class A
{
    public function test1()
    {
        return "test1";
    }

    protected function test4()
    {
        return "methode protected de la class A";
    }
}

//-----------------------------

class B extends A
{
    public function test2()
    {
        return "test2";
    }

 
}

//---------------

class C extends B
{
    public function test3()
    {
        return "test3";
    }


   
}

//Exo creer un objet issu de la class C et afficher les methodes issu de cette classe


$objet=new C;
$objet1=new B;

 echo '<pre>';var_dump(get_class_methods($objet)); echo '</pre><hr>';

 // si C herite de B alors C herite de  A


