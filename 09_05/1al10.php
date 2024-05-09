<?php
echo "Manera 1:" . PHP_EOL;
echo "1" . PHP_EOL;
echo "2" . PHP_EOL;
echo "3" . PHP_EOL;
echo "4" . PHP_EOL;
echo "5" . PHP_EOL;
echo "6" . PHP_EOL;
echo "7" . PHP_EOL;
echo "8" . PHP_EOL;
echo "9" . PHP_EOL;
echo "10" . PHP_EOL;

echo "Manera 2:" . PHP_EOL;

for ($i = 1; $i <= 10; ++$i) {
    echo $i . PHP_EOL;
}

echo " Manera 3" . PHP_EOL;

$num = 1;

while ($num <= 10) {
    echo $num . PHP_EOL;
    $num++;
}

echo " Manera 4" . PHP_EOL;
$num4 = 0;

while ($num4 != 10){
    ++$num4;
    echo $num4.PHP_EOL;
}
?>