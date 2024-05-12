<?php

function is_arithmetic($arr)
{
    
    $delta = $arr[1] - $arr[0];
    
    
    for ($index = 0; $index < sizeof($arr) - 1; $index++)
    {
        
        if (($arr[$index + 1] - $arr[$index]) != $delta)
        {
           
            return "Not an arithmetic sequence";
        }
    }
    
    
    return "An arithmetic sequence";
}


$my_arr1 = array(6, 7, 9, 11);
$my_arr2 = array(5, 7, 9, 11);


print_r(is_arithmetic($my_arr1) . "\n");
print_r(is_arithmetic($my_arr2) . "\n");
?>
