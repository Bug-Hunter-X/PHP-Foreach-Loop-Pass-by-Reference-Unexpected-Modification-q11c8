function increment_odd_numbers(array $numbers): array {
  foreach ($numbers as &$number) {
    if ($number % 2 != 0) {
      $number++;
    }
  }
  return $numbers;
}

$numbers = [1, 2, 3, 4, 5];
$incrementedNumbers = increment_odd_numbers($numbers);
print_r($incrementedNumbers); //Output: Array ( [0] => 2 [1] => 2 [2] => 4 [3] => 4 [4] => 6 )

//The issue is that the foreach loop is using pass by reference (&). So it modifies the original array instead of creating a copy.