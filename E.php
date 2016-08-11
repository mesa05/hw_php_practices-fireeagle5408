<html>
    <head>
    </head>
    <body>
        <form method="post">
        Please enter English letters and numbers:<input type="text" name="text">
        <input type="submit" name="bntOK" value="OK">
        </form>
    </body>
</html>

<?php
    $txt=$_POST["text"];
    $arrayLetter=[];
    $arrayTimes=[];
    $txtlen=strlen($txt);
    
    for( $i = 0 ; $i <= $txtlen ; $i++){
        $letterSLen=count($arrayLetter);
        for( $j=0 ; $j <= $letterSLen ; $j++){
            if($arrayLetter[$j]==substr($txt,$i,1)){
            $arrayTimes[$j] += 1;
            break;
            }
            else if($arrayLetter[$j]==""){
            $arrayLetter[$j]=substr($txt,$i,1);
            $arrayTimes[$j] += 1;
            break;
            }
        }
    }
    
    echo $txt."<br>";
    if($_POST["bntOK"]){
        for ($i = 0; $i < $letterSLen; $i++) {
	        echo $arrayLetter[$i]." :";
	        echo $arrayTimes[$i]." times<br />";
        }
    }

?>