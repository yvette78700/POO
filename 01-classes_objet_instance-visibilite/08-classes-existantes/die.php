<?php

function recherche($tab,$elem)
{
        if(!is_array($tab))
        die('Vous devez envoyer un ARRAY');

        $position = array_search($elem,$tab);

        return $position;
}

//-------------
$liste = array('Mario','Yoshi','Toad','Bowser');

echo "Position de l'element dans le tableau: ".recherche($liste,'Mario').'<hr>';
echo "Position de l'element dans le tableau: ".recherche($liste,'Toad').'<hr>';
echo "Position de l'element dans le tableau: ".recherche('qrdyt','Toad').'<hr>';

echo "traitements....";

