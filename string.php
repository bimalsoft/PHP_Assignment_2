<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
  $vowelCount = 0;
  $reversedString = strrev($string);

  for ($i = 0; $i < strlen($string); $i++) {
    $char = strtolower($string[$i]);
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
      $vowelCount++;
    }
  }

  echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
}


?>