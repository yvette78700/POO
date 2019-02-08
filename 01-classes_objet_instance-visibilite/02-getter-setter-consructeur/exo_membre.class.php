
<?php

/*
Au vue de cette classe vous allez renseigner les propriétés :pseudo et mdp (getteurs et setteurs) et faites les affichages necessaires

*/
class Membre
{
    private $pseudo;
    private $mdp;


    public function setPseudo($pseudo);
    {
        $this->pseudo= $pseudo;
    }


    public function getPseudo()
    {
        return $this->pseudo;
    }


    public function setMdp($mdp);
    {
        $this->mdp= $mdp;
    }


    public function getMdp()
    {
        return $this->mdp;
    }

    
    
}//..............................




//     public function __contruct($arg1,$arg2){

//         return $this->setPseudo($arg1);
//         return $this->setMdp($arg2);

//     }

//     public function setPseudo($arg1){

//        if(!is_tring($arg1) || !preg_match('#^[a-zA-Z0-9._-]+$#', $arg1) || strlen($arg1)>8 )
//        {

//         echo 'le pseudo doit contenir des lettres et chiffres et commencer par une lettre et tre moins de 8 caracteres';
//        }
//        else
//        {
//             return $this->pseudo=$arg1;
//        }
      
//     }

//     public function setMdp($arg2){

//         return $this->mdp=$arg2;
//     }

//     public function getPseudo(){

//         return $this->pseudo;
//     }


//     public function getMdp(){

//         return $this->mdp;
//     }

   
// }

// $membre1= new Membre("charlie",2000);

// echo '<pre>';var_dump($membre1);echo '</pre>';