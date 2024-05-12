<?php

function is_anagram($a, $b)
{
    
    if (count_chars($a, 1) == count_chars($b, 1))
    {
        
        return "These two strings are anagrams";
    }
    else
    {
        
        return "These two strings are not anagrams";
    }
}

print_r(is_anagram('anagram', 'nagaram') . "\n");
print_r(is_anagram('cat', 'rat') . "\n");
?>
