<?php
header("content-type: text/html; charset=utf-8");

$one=["&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","＊","＊","&nbsp;&nbsp;&nbsp;&nbsp;"];
$six=["&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
      "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;"];
$eight=["&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;",
        "&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;","＊","&nbsp;&nbsp;&nbsp;&nbsp;","&nbsp;&nbsp;&nbsp;&nbsp;"];      

for($i=0 ; $i<=7 ; $i++){
    for($j=0 ; $j<=4 ; $j++){
    echo $one[$i*5+$j];
    }
    for($j=0 ; $j<=4 ; $j++){
    echo $six[$i*5+$j];
    }
    for($j=0 ; $j<=4 ; $j++){
    echo $eight[$i*5+$j];    
    }
    echo "<br>";
}
?>