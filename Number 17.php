<?php

function reverse_sum($n1, $n2)
{
    
    return reverse_integer($n1) + reverse_integer($n2);
}


function reverse_integer($n)
{
   
    $reverse = 0;
    
    
    while ($n > 0)
    {
        
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        
        
        $n = (int)($n / 10);
    }
    
    
    return $reverse;
}   


print_r(reverse_sum(13, 14) . "\n");
print_r(reverse_sum(130, 1) . "\n");
print_r(reverse_sum(305, 794) . "\n");
?>
