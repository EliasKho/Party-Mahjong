<?php
declare (strict_types=1);

use mahjong\classes\Pioche;

require_once 'vendor/autoload.php';

$p = new Pioche();
$p->melanger();
echo $p->toString();












