<?php
require_once 'reparti/settore-1.php';
require_once 'reparti/settore-2.php';

$basso = new StrumentiMusicali('verde','ibanez','120');
var_dump($basso);
$bassoLimited = new LimitedEdition('verde','ibanez','120','ultimate','100');
var_dump($bassoLimited);
