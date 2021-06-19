<?php
include_once 'autoload.php';

$farm = new Farm();

$farm->addAnimals(Chicken::class, 10);
$farm->addAnimals(Cow::class, 10);

$farm->collectProducts();

$isCli = php_sapi_name() == 'cli';

echo $farm->totalAmountProductions($isCli);