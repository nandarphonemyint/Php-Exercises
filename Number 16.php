<?php

function is_geometric($arr)
{
    
    if (sizeof($arr) <= 1)
        return True;
    
    
    $ratio = $arr[1] / $arr[0];
   
    
    for ($i = 1; $i < sizeof($arr); $i++)
    {
        
        if (($arr[$i] / ($arr[$i - 1])) != $ratio)
        {
            return "Not a geometric sequence";
        }
    }        

    
    return "Geometric sequence";
}


$my_arr1 = array(2, 6, 18, 54);
$my_arr2 = array(10, 5, 2.5, 1.20);


print_r(is_geometric($my_arr1) . "\n");
print_r(is_geometric($my_arr2) . "\n");
?>
