<?php

class  Animal
{
    protected function deplacement()
    {
        return "Je me deplace";

    }

    public function manger()
    {
        return "Je mange chaque jour";
    }
}

//-----------------------------------------------------------


class Elephant extends Animal //extends permet d'heriter d'une classe
{

    public function quiSuisJe(){

        return 'je suis un élephant et'.$this->deplacement();//j'utilise la methode deplacement() qui est protected dont j'herite (executable uniquement dans la class
        //mere ou dans la class fille)
    }
       
}
//-------------------------------
class Chat extends Animal{

    public function quiSuisJe()
    {
        return "je suis un chat ";
    }

    public function manger()
    {
        return "Je me goinfre comme un gros chat";
    }
}

//il n'est pas possible d'heriter de plusieurs classes en meme temps
//-------------------------------------
$elephant =new Elephant;
echo '<pre>';var_dump(get_class_methods($elephant)); 
echo '</pre><hr>';

echo $elephant->quiSuisJe().'<hr>';
echo $elephant->manger().'<hr>';

//---------------------------------

$chat =new Chat;

echo '<pre>';var_dump(get_class_methods($elephant)); 
echo '</pre><hr>';

echo $chat->quiSuisJe().'<hr>';

echo $chat->manger().'<hr>';//affiche le manger de class heritiere car quand on redefini une methode € a la class mere l'interpreteur charche si la methode 
// dans la class heritiere et seulement si la methode n'est pas trouvée ,il irai cherché dans la class mere