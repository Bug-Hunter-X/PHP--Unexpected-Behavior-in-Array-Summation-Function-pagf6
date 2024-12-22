```php
function myFunc(array $arr): int {
  if (empty($arr)) {
    return 0; // Handle empty array case
  }

  $sum = 0;
  foreach ($arr as $num) {
    if (!is_numeric($num)) {
      //Improved error handling.  Throw an exception for clarity.
      throw new InvalidArgumentException('Array contains non-numeric values.');
    }
    $sum += $num;
  }
  return $sum;
}

$arr = [1, 2, 'a', 4, 5];

try {
  $result = myFunc($arr);
  echo "Sum: " . $result;
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage(); // Output: Error: Array contains non-numeric values.
}
```