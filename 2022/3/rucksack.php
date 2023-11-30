<?php
$solution = 0;
$i = 0;
$first = "";
$second = "";
$firstCount = 0;
$secondCount = 0;
$solution =0;
$pointMapping = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5, 'f'=>6, 'g'=>7, 'h'=>8, 'i'=>9, 'j'=>10, 'k'=>11, 'l'=>12, 'm'=>13, 'n'=>14, 'o'=>15, 'p'=>16, 'q'=>17, 'r'=>18, 's'=>19, 't'=>20, 'u'=>21, 'v'=>22, 'w'=>23, 'x'=>24, 'y'=>25, 'z'=>26, 'A'=>27, 'B'=>28, 'C'=>29, 'D'=>30, 'E'=>31, 'F'=>32, 'G'=>33, 'H'=>34, 'I'=>35, 'J'=>36, 'K'=>37, 'L'=>38, 'M'=>39, 'N'=>40, 'O'=>41, 'P'=>42, 'Q'=>43, 'R'=>44, 'S'=>45, 'T'=>46, 'U'=>47, 'V'=>48, 'W'=>49, 'X'=>50, 'Y'=>51, 'Z'=>52);
if ($file = fopen("source.txt", "r")) {
    while(!feof($file)) {
        $first = "";
        $second = "";
        $i = 0;
        $firstCount = 0;
        $secondCount = 0;
        $equal = "";
        $line = fgets($file);
        while(substr($line,$i,1) != null){
            //echo substr($line,$i,1);
            $i++;
        }
        $i -= 2;
        //echo " ". $line." ".$i."<br>";
        for($j = 0; $j < $i; $j++){
            if($i/2 <= $j){
                $second = $second.substr($line,$j,1);
                $secondCount ++;
            }else{
                $first = $first.substr($line,$j,1);
                $firstCount ++;
            }
        }
        echo " | ".$first." $firstCount ".$second." $secondCount ";
        for($j = 0; $j <= $firstCount; $j++){
            for($k = 0; $k <= $secondCount; $k++){
                if(substr($first,$j,1) == substr($second,$k,1) &&substr($second,$k,1) != NULL){
                    $equal = substr($second,$k,1);
                    echo " !! ".$equal;
                   // break;
                }
            }
            if($equal != "") ;
        }  
        if (!$equal == "") {
            
            $solution += $pointMapping["$equal"];
            echo " ". $pointMapping["$equal"] ."<br>";
        }

        
     /*   foreach (count_chars($line, 1) as $i => $val) {
            echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
         }
         */
        
    }
}
echo $solution;
var_dump($pointMapping);