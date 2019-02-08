<?php
// echo '<pre>';print_r(get_declared_classes());echo '</pre>';//permet de voir toute les classe predefini existante en PHP

//Ex stdClass()

$tab = array('Mario','Yoshi','Toad','Bowser');
$objet = (object) $tab ;//cast :transformation de $tab en objet sans l'instancié

echo '<pre>';var_dump($objet);echo '</pre>';

//un objet fait partir de la class STDCLASS (classe standart de php)lorque celui ci est orphelin et n'a pas été instanciée par un new ,l'objet n'est issu d'aucune class en particulier

echo $objet->{0};//permet d'afficher un elemnt de l'objet