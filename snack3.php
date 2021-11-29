
<?php
$randomArray = [];
$loopCount = 0;
while (count($randomArray) < 15) {
    $newRand = rand(0, 100);
    if (!in_array($newRand, $randomArray)) {
        $randomArray[] = $newRand;
    }

    $loopCount++;
}

echo "<pre>";
echo "RANDOM ARRAY <br>";
echo var_dump($randomArray);
echo "<br><br>COUNT OF LOOPS <br>";
echo var_dump($loopCount);
echo "</pre>";
