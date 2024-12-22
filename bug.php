```php
function myFunc(array $arr): int {
  if (empty($arr)) {
    return 0; // Handle empty array case
  }

  $sum = 0;
  foreach ($arr as $num) {
    if (!is_numeric($num)) {
      //This is where the issue is. The function does not handle non-numeric input gracefully. 
      return -1; //Or throw an exception
    }
    $sum += $num;
  }
  return $sum;
}

$arr = [1, 2, 'a', 4, 5];
$result = myFunc($arr);
echo "Sum: " . $result; // Output will be -1
```