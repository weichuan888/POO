<?php
// require 'form.php';
//
// $form = new Form;
// $form->create('index.php');
// $form->text('text');
// $form->select('select');
// $form->button('radio', 'oui');
// $form->textarea();
// $form->checkbox('Gloup');
// $form->button('submit', 'valider');

require 'voiture.php';

$marque = "BMW";
$poids = 2;
$immatriculation = "BE-2354";
$kilometrage = 50000;

$vehicule = new Voiture($marque, $poids, $immatriculation, $kilometrage);


 ?>
