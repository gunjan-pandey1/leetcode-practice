<?php
  function reverseString($s) {
      $length = 0;
      while (isset($s[$length])) {
          $length++;
      }

      $reversed = " ";
      for ($i = $length - 1; $i >= 0; $i--) {

          $reversed .= $s[$i];
      }
      return $reversed;
  }

  // Example usage:
  $s = "GeeksforGeeks";
  echo "Original String: " . $s . "<br>";
  echo "Reversed String: " . reverseString($s) . "\n";
  ?>
    