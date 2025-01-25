```php
<?php
function increment_array_values_safe($arr) {
  $arr_copy = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      $arr_copy[$key] = increment_array_values_safe($value); //Recursive call for nested arrays
    } else {
      $arr_copy[$key] = $value + 1;
    }
  }
  return $arr_copy;
}

$numbers = [1, 2, 3];
$incrementedNumbers = increment_array_values_safe($numbers);
print_r($incrementedNumbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$nested = [[1, 2], [3, 4]];
$incrementedNested = increment_array_values_safe($nested);
print_r($incrementedNested); // Output: Array ( [0] => Array ( [0] => 2 [1] => 3 ) [1] => Array ( [0] => 4 [1] => 5 ) )

$nested2 = [[1, 2], [3, 4]];
$incrementedNested2 = increment_array_values_safe($nested2[0]);
print_r($nested2); // Original array remains unchanged
print_r($incrementedNested2); // Only the copied portion is changed

?>
```