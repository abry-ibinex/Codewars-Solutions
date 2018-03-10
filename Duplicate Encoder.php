<?php

function duplicate_encode($word){
	$wordArr = str_split(strtolower($word));
  $newWordArr = [];
  foreach ($wordArr as $key => $letter){
    if (count(array_keys($wordArr, $letter))>1){
      $newWordArr[] = ')';  
    } else {
      $newWordArr[] = '(';
    }
  }
  return implode("",$newWordArr);
}

/*

The goal of this exercise is to convert a string to a new string where each character in the new string is '(' if that character appears only once in the original string, or ')' if that character appears more than once in the original string. Ignore capitalization when determining if a character is a duplicate.

Examples:

"din" => "((("

"recede" => "()()()"

"Success" => ")())())"

"(( @" => "))(("


*/

/*

Time: 282ms Passed: 3 Failed: 0 

*/

?>
