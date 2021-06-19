<?php
include_once 'autoload.php';

$farm = new Farm();

for ($i = 0; $i < 20; ++$i) {
    $farm->addAnimal(new Chicken());
}

for ($i = 0; $i < 10; ++$i) {
    $farm->addAnimal(new Cow());
}

/*
 * add Duck example
for ($i = 0; $i < 10; ++$i) {
    $farm->addAnimal(new Duck());
}
*/

$farm->collectProducts(7);

$isCli = php_sapi_name() == 'cli';

$lineBreak = fn(bool $isCli) => $isCli ? "\n" : "<br />";

echo "Собранной продукции за 7 дней:" . $lineBreak($isCli) . $farm->totalAmountProductions($isCli);

for ($i = 0; $i < 5; ++$i) {
    $farm->addAnimal(new Chicken());
}

echo "Собранной продукции еще за 7 дней после покупки 5 кур:" . $lineBreak($isCli) . $farm->collectProducts(7)->getInfo($isCli);

echo "Суммарно продукции в хранилище:" . $lineBreak($isCli) . $farm->totalAmountProductions($isCli);