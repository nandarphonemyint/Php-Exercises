<?php

function odd_occurrence($arr)
{
    
    $result = 0;

   
    foreach ($arr as &$value)
    {
       
        $result = $result ^ $value;
    }

    
    return $result;
}


$num1 = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);


print_r(odd_occurrence($num1) . "\n");
?>
