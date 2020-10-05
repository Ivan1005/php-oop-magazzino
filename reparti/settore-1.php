<?php
class StrumentiMusicali{
  public $corde;
  public $alimentazione;
  public $colore;
  public $marca;
  public $prezzo;

  public function __construct($colore, $marca, $prezzo ){
    $this->colore = $colore;
    $this->marca = $marca;
    $this->prezzo = $prezzo;
  }
    public function getCorde($corde){
      if(empty($this->corde)){
        die("Il numero non l'hai inserito");
      }
      return $this->corde;
    }
  }
