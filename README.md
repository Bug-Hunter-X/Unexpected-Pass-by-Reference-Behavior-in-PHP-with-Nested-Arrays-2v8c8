# PHP Pass-by-Reference Bug with Nested Arrays

This repository demonstrates a common, yet subtle bug in PHP related to pass-by-reference and nested arrays.  The `increment_array_values` function intends to increment the values of an array, but its behavior with nested arrays is unexpected and potentially problematic.  The solution provides a safer approach using value copies.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected output when incrementing values in nested arrays.

## Solution

The `bugSolution.php` file demonstrates a corrected version of the function that avoids unexpected side effects by creating a copy of the array before processing.