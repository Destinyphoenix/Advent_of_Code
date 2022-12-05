<?php
$currentElf = 0;
$elfCalories = array();
if ($file = fopen("source.txt", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        if(!is_numeric($line)){
            array_push($elfCalories , $currentElf);         
            $currentElf = 0;
        }else{
            $currentElf += $line;          
        }
    }   
    fclose($file);
}
$highest = 0;
foreach($elfCalories as $elfFoodStock){
    if($elfFoodStock > $highest){
        $highest = $elfFoodStock;
    }
}
echo $highest;
$second = 0;
foreach($elfCalories as $elfFoodStock){
    if($elfFoodStock > $second && $elfFoodStock != $highest){
        $second = $elfFoodStock;
    }
}
$third = 0;
foreach($elfCalories as $elfFoodStock ){
    if($elfFoodStock > $third && $elfFoodStock != $highest && $elfFoodStock != $second){
        $third = $elfFoodStock;
    }
}
echo "highest = ". $highest . " second = ". $second . " third = ". $third;
echo " add = ". $highest+$second+$third;