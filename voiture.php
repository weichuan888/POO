<?php
class Voiture {
  public $marque;
  public $poids;
  public $immatriculation;
  public $kilometrage;
  public $mise_en_circulation;
  public $modele;
  public $couleur;


public function __construct($marque, $poids, $immatriculation, $kilometrage, $mise_en_circulation) {
  $this->reserved($marque);
  $this->utilitaire($poids);
  $this->plaque($immatriculation);
  $this->parcouru($kilometrage);
  $this->annee_circulation($mise_en_circulation);
}
public function reserved($marque) {
  if ($marque == "Audi") {
    echo "cette voiture est reservé";
    echo "<hr/>";
  } else {
    echo "cette voiture est disponible";
    echo "<hr/>";
  }
}

public function  utilitaire($poids) {
  if ($poids > 3.5) {
    echo "cette voiture est un utilitaire, car elle pèse " .$poids. " tonnes.";
    echo "<hr/>";
  } else {
    echo "cette voiture est une commerciale, car elle pèse " .$poids. " tonnes.";
    echo "<hr/>";
  }
}

public function plaque($immatriculation) {
    if (stristr($immatriculation, "BE") == True) {
      echo "La voiture vient de Belgique";
      echo "<hr/>";
    } else if (stristr($immatriculation, "FR") == True) {
      echo "La voiture vient de France";
      echo "<hr/>";
    } else if (stristr($immatriculation, "DE") == True) {
      echo "La voiture vient d'Allemagne";
      echo "<hr/>";
    } else {
      echo "La voiture est introuvable";
    }
}

public function parcouru($kilometrage) {
  if ($kilometrage < 100000) {
    echo "La voiture a peu servi, elle n'a roulé que " .$kilometrage. " KM.";
  } else if ($kilometrage > 100000 && $kilometrage < 200000) {
    echo "La voiture a moyennement servi";
  } else if ($kilometrage > 200000) {
    echo "La voiture a beaucoup servi";
  }
}

public function annee_circulation($mise_en_circulation) {
 $annee = date"Y";

}



}



 ?>
