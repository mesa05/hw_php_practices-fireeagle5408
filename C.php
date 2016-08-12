<html>
    <head>
    </head>
    <body>
        <form method="post">
        Year(>0):<input type="text" name="textYear">
        Month(1-12):<input type="text" name="textMonth">
        Day(0-31):<input type="text" name="textDay">
        <input type="submit" name="bntOK" value="OK">
        </form>
    </body>
</html>

<?php
$Year=$_POST["textYear"];
$Month=$_POST["textMonth"];
$Day=$_POST["textDay"];
$daysBig=31;
$daysSmall=30;
$daysFEB;
$daysSum;
$surplus;
$Error;

if($Year=="" && $Month=="" && $Day=="")
    $Error=2;
else if($Year<0 || $Month<0 || $Month>13 || $Day<0 || $Day>31 || ($Year%4==0 && $Month==2 && $Day>=30) || ($Year%4!=0 && $Month==2 && $Day>=29) || $Year=="" || $Month=="" || $Day=="")
    $Error=1;


if($_POST=["bntOK"]) {
    if($Year%4==0)$daysFEB=29;
    else $daysFEB=28;
    if($Month<=7 && $Month>=0){ 
        if($Month%2==0){
            $daysSum += ($Month/2)*$daysBig;
            if($Month>2)
            $daysSum += (($Month/2)-2)*$daysSmall+$daysFEB;
        }
        else if($Month%2==1 && $Month>=3){
            $daysSum += (($Month-1)/2)*$daysBig;
            $daysSum += ((($Month-1)/2)-1)*$daysSmall+$daysFEB;
        }
    }
    else if($Month>=8 && $Month<=12){
        $surplus = $Month-7;
        $daysSum += (((7-1)/2)+1)*$daysBig;
        $daysSum += (((7-1)/2)-1)*$daysSmall+$daysFEB;
        if($surplus%2==0){
            $daysSum += ($surplus/2)*$daysBig;
            $daysSum += (($surplus/2)-1)*$daysSmall;    
        }
        else if($surplus%2==1 && $surplus>=3){
            $daysSum += intval($surplus/2)*$daysBig;
            $daysSum += intval($surplus/2)*$daysSmall;
        }
    }
    $daysSum += $Day;
    
    if($Error==2){
    echo "Please enter a correct day.";
    }
    else if($Error==1){
    echo "Error!! You enter a wrong number.";
    }
    else echo $daysSum." day<br>";
}


?>