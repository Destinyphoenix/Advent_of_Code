<?php
$solution = 0;
$elfCalories = array();
if ($file = fopen("source.txt", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        if(!is_numeric($line)){
            $first = substr($line,0,1);
            echo "<br> $first";
            $line = substr($line, 2);
            echo " $line ";
if(strcmp($line,'X') ==2){
   // echo "X";
    $solution += 1;
    if(strcmp($first,'A') ==2){
        // echo "A";
         
     }
}

if(strcmp($line,'Y') ==2){
  //  echo "Y";
    $solution += 2;
}

if(strcmp($line,'Z') ==2){
//    echo "Z";
    $solution += 3;
}
/*
    if(strcmp($first,'A') ==2){
        // echo "A";
        if(strcmp($line,'X') ==2){
$solution += 3;
        }
        if(strcmp($line,'Y') ==2){
            $solution += 6;
                    }
                    if(strcmp($line,'Z') ==2){
                        $solution += 0;
                                }
     }
     
     if(strcmp($first,'B') ==2){
       //  echo "B";
         $solution += 2;
         if(strcmp($line,'X') ==2){
            $solution += 0;
                    }
                    if(strcmp($line,'Y') ==2){
                        $solution += 3;
                                }
                                if(strcmp($line,'Z') ==2){
                                    $solution += 6;
                                            }
     }
     
     if(strcmp($first,'C') ==2){
     //    echo "C";
         $solution += 3;
         if(strcmp($line,'X') ==2){
            $solution += 6;
                    }
                    if(strcmp($line,'Y') ==2){
                        $solution += 0;
                                }
                                if(strcmp($line,'Z') ==2){
                                    $solution += 3;
                                            }
     }
     */
    }
    
    echo $solution;
    fclose($file);
}
}


/*
function RPSsolution($first,$line){
    if(strcmp($first,'A') ==2){
        // echo "A";
        if(strcmp($line,'X') ==2){
$solution += 3;
        }
        if(strcmp($line,'Y') ==2){
            $solution += 6;
                    }
                    if(strcmp($line,'Z') ==2){
                        $solution += 0;
                                }
     }
     
     if(strcmp($first,'B') ==2){
       //  echo "B";
         $solution += 2;
         if(strcmp($line,'X') ==2){
            $solution += 0;
                    }
                    if(strcmp($line,'Y') ==2){
                        $solution += 3;
                                }
                                if(strcmp($line,'Z') ==2){
                                    $solution += 6;
                                            }
     }
     
     if(strcmp($first,'C') ==2){
     //    echo "C";
         $solution += 3;
         if(strcmp($line,'X') ==2){
            $solution += 6;
                    }
                    if(strcmp($line,'Y') ==2){
                        $solution += 0;
                                }
                                if(strcmp($line,'Z') ==2){
                                    $solution += 3;
                                            }
     }
     
}*/