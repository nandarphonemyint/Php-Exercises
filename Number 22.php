<?php

function move_zero($arr)
{
    
    $count = 0;
    
    
    $n = sizeof($arr);
    
    
    for ($i = 0; $i < $n; $i++)
    {
        
        if ($arr[$i] != 0)
        {
           
            $arr[$count++] = $arr[$i];
        }
    }
    
    
    while ($count < $n)
    {
        $arr[$count++] = 0;
    }
    
    
    return $arr;
}


$num_list1 = array(0, 2, 3, 4, 6, 7, 10);
$num_list2 = array(10, 0, 11, 12, 0, 14, 17);


print_r(move_zero($num_list1));
print_r(move_zero($num_list2));
?>
