```php
<?php
function increment_array_values(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
increment_array_values($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

// The unexpected behavior happens when dealing with nested arrays
$nested = [[1, 2], [3, 4]];
increment_array_values($nested);
print_r($nested); // Output: Array ( [0] => Array ( [0] => 2 [1] => 3 ) [1] => Array ( [0] => 4 [1] => 5 ) )

//The bug is that the function modifies the original array passed as argument and also affects the arrays within it (Unexpected side effects)

$nested2 = [[1, 2], [3, 4]];
increment_array_values($nested2[0]);
print_r($nested2); // Output: Array ( [0] => Array ( [0] => 2 [1] => 3 ) [1] => Array ( [0] => 3 [1] => 4 ) ) 
//This shows the modification of the original array and even modifies the elements inside the nested array without even iterating on the outer array

?>
```