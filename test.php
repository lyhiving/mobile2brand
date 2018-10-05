<?php

use lyhiving\Mobile\Mobile2Brand;

include './src/Mobile2Brand.php';

$mb = new Mobile2Brand();
$brand = $mb->find('LGE','Nexus 5X');
print_r($brand);

echo "<br />";
$logo = $mb->url('https://raw.githubusercontent.com/lyhiving/mobile2brand/master/src/icons/')->find('Xiaomi','MI MAX 2');
print_r($logo);
