<?php
for($hundred=1 ; $hundred<=9 ; $hundred++){
    for($ten=0 ; $ten<=9 ; $ten++){
        for($one=0 ; $one<=9 ; $one++){
            $number = $hundred*100 + $ten*10 + $one;
            $hundreds = $hundred*$hundred*$hundred ;
            $tens = $ten*$ten*$ten ;
            $ones = $one*$one*$one ;
            $sum = $hundreds + $tens + $ones;
            if($number == $sum){
                echo $number."<br>";
            }
        }
    }
}
?>