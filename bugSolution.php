function increment_odd_numbers(array $numbers): array {
  $newNumbers = [];
  foreach ($numbers as $number) {
    if ($number % 2 != 0) {
      $newNumbers[] = $number + 1;
    } else {
      $newNumbers[] = $number; 
    }
  }
  return $newNumbers;
}

$numbers = [1, 2, 3, 4, 5];
$incrementedNumbers = increment_odd_numbers($numbers);
print_r($incrementedNumbers); // Output: Array ( [0] => 2 [1] => 2 [2] => 4 [3] => 4 [4] => 6 )
//Alternatively, you can use array_map for a more concise solution:

function increment_odd($number) {
    return ($number % 2 != 0) ? $number + 1 : $number;
}

$numbers = [1, 2, 3, 4, 5];
$incrementedNumbers = array_map('increment_odd', $numbers);
print_r($incrementedNumbers); //Output: Array ( [0] => 2 [1] => 2 [2] => 4 [3] => 4 [4] => 6 )