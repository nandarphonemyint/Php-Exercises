<?php

function length_of_last_word($s)
{
   
    if (strlen(trim($s)) == 0)
    {
        return "Blank String";
    }

   
    $words = explode(' ', $s);

   
    if (sizeof($words) > 1)
        return strlen(substr($s, strrpos($s, ' ') + 1));
    else
        return "Single word";
}


print_r(length_of_last_word("PHP Exercises") . "\n");
print_r(length_of_last_word("PHP") . "\n");
print_r(length_of_last_word("") . "\n");
print_r(length_of_last_word("  ") . "\n");
?>
