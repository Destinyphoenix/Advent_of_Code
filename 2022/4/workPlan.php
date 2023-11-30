<?php
$redundantWork = 0;
$overlappingWork = 0;
if ($file = fopen("source.txt", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        $i = 0;
        $k = 0;
        $workPlan = array();
        while(substr($line,$i,1) != null){
            $j = 0;
            $result = "";
            
            while(is_numeric(substr($line,$i+$j,1))){
                //echo substr($line,$i+$j,1) . "<br>";
                $result .= substr($line,$i+$j,1);
                $j++;
            }
        
            if(is_numeric(intval($result))&& intval($result) != 0){
               // echo intval($result) ." $k<br>";
               // $workPlan[$k] = intval($result);
               $workPlan[$k] = intval($result);
               // array_push($workPlan, intval($result));
               $k++;
            }
           // echo $workPlan[0]; 
            $i +=$j;
            $i++;
        }
        //var_dump($workPlan);

        if (($workPlan[2] >= $workPlan[0] && $workPlan[3] <= $workPlan[1]) || ($workPlan[0] >= $workPlan[2] && $workPlan[1] <= $workPlan[3])){
          //  var_dump($workPlan); 
            $redundantWork++;
        }
        if (($workPlan[2] >= $workPlan[0] && $workPlan[2] <= $workPlan[1]) || ($workPlan[0] >= $workPlan[2] && $workPlan[0] <= $workPlan[3])){
              //var_dump($workPlan); 
              $overlappingWork++;
          }

    }
}
echo "<br> result = " . $redundantWork . " overlapping result = ". $overlappingWork;