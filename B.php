<?php
$number;
$numberS;
$set=["1","2","3","4"];
$setBackUpH=[""];
$setBackUpT=[""];
$hundreds;
$tens;
$ones;

for($i=0 ; $i<=3 ; $i++){
    $hundreds=$set[$i];
    $setBackUpH=$set;
    unset($setBackUpH[$i]);
    for($j=0 ; $j<=6 ; $j++){
        $tens=$setBackUpH[$j];
        $setBackUpT=$setBackUpH;
        unset($setBackUpT[$j]);
            for($k=0 ; $k<=3 ; $k++){
            $ones = $setBackUpT[$k];
            if($hundreds!="" && $tens!="" && $ones!="")
            {$number = $hundreds.$tens.$ones;
            echo $number."<br>";
            }
            }
    }
}


$numberS=1;
for($i=4 ; $i>=2 ; $i--){
    $numberS *= $i;
}
    echo $numberS." sets<br>";
?>