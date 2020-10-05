<?php
require_once 'settore-1.php';
 class LimitedEdition extends StrumentiMusicali {
   public $addPrice ;
   public $limitedEditionVersion;
   public function __construct($colore, $marca, $prezzo,$limitedEditionVersion,$addPrice ){
     parent::__construct($colore, $marca, $prezzo );
     $this->limitedEditionVersion = $limitedEditionVersion;
     $this->addPrice = $addPrice;
     $this->prezzo = $prezzo + $addPrice;

   }

 }
