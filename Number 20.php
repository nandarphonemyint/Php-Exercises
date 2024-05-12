<?php

function is_hamming_numbers($x)
{
    
    if ($x == 1)
    {
        return "Hamming Number";
    }
    
    if ($x % 2 == 0)
    {
        
        return is_hamming_numbers($x / 2);
    }
   
    if ($x % 3 == 0)
    {
       
        return is_hamming_numbers($x / 3);
    }
    
    if ($x % 5 == 0)
    {
       
        return is_hamming_numbers($x / 5);
    }
    
    return "Not a Hamming Number";
}


function hamming_numbers_sequence($x)
{
   
    if ($x == 1)
    {
        return "Hamming Number";
    }
    
    hamming_numbers_sequence($x - 1);
    
    if (is_hamming_numbers($x) == "Hamming Number")
    {
        
        echo($x) . ",";
    }
}


print_r(is_hamming_numbers(7) . "\n");
print_r(is_hamming_numbers(1) . "\n");


hamming_numbers_sequence(24);
?>
