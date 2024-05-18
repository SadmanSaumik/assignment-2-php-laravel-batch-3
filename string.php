<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels( $string )
{
    preg_match_all( '/[aeiou]/i', $string, $matches );
    return count( $matches[0] );
}

foreach ( $strings as $string ) {
    echo "Original String: " . $string . ", " . "Vowel Count: " . countVowels( $string ) . ", " . "Reversed String: " . strrev( $string ) . "\n";
}