<?php
$solution = 0;
$elfCalories = array();
if ($file = fopen("source.txt", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
    if(!is_numeric($line)){
            $first = substr($line,0,1);
            // echo "<br> $first";
            $line = substr($line, 2,1);
           /*  echo " $line ";
             echo strcmp($line,'X');
             echo strcmp($line,'Y');
             echo strcmp($line,'Z');*/
                                                                 
        
        if(strcmp($line,'X') ==0){
        // // echo "X";
            $solution += 0;
        }

        if(strcmp($line,'Y') ==0){
        //  // echo "Y";
            $solution += 3;
        }

        if(strcmp($line,'Z') ==0){
        //    // echo "Z";
            $solution += 6;
        }
        if(strcmp($first,'A') ==0){
             // echo "A";
            if(strcmp($line,'X') ==0){
    $solution += 3;
            }
            if(strcmp($line,'Y') ==0){
                $solution += 1;
                        }
                        if(strcmp($line,'Z') ==0){
                            $solution += 2;
                                    }
         }
         
         if(strcmp($first,'B') ==0){
            
             if(strcmp($line,'X') ==0){
                $solution += 1;
                        }
                        if(strcmp($line,'Y') ==0){
                            $solution += 2;
                                    }
                                    if(strcmp($line,'Z') ==0){
                                        $solution += 3;
                                                }
         }
         
         if(strcmp($first,'C') ==0){
             // echo "C";
             
             if(strcmp($line,'X') ==0){
                $solution += 2;
                        }
                        if(strcmp($line,'Y') ==0){
                            $solution += 3;
                                    }
                                    if(strcmp($line,'Z') ==0){
                                        $solution += 1;
                                        
                                                }
         }

         //echo " $solution";              
    }
}  
    echo $solution;
    fclose($file);
}
