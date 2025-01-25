function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'some_value') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['a' => 'some_value', 'b' => 'other_value'];
$result = foo($arr);
print_r($result); // Output: Array ( [b] => other_value )

$arr = ['a' => 'some_value', 'b' => 'some_value'];
$result = foo($arr);
print_r($result); // Output: Array ( )

$arr = ['a' => 'some_value', 'b' => 'some_value', 'c' => 'other_value'];
$result = foo($arr);
print_r($result); // Output: Array ( [c] => other_value)