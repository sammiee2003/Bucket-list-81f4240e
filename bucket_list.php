<?php

$aantal = readline("hoeveel activiteiten wil je toevoegen?");
$bucket = array();
if(is_numeric($aantal)) {
    for($i=1; $i <= $aantal; $i++) {
  echo "welke activiteiten wil je toevoegen?";
  $activiteit = readline();
    array_push($bucket , $activiteit);
    }
echo 'In uw bucketlist staat:' ."\n";
    for($j = 0; $j < $aantal; $j++) {
        echo $bucket[$j] . "\n";
    }
}else{
    echo "dit is geen getal.";
}
?>


