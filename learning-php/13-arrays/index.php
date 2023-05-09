<?php

$array1 = [1, 2, 3, 4];
$array2 = ['a', 'b', 'c'];

$mergedArray = [...$array1, ...$array2];

print_r($mergedArray);

// Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => a [5] => b [6] => c )

<?php

$fruits = array("apple", "banana", "cherry", "orange");

foreach ($fruits as $fruit) {
  echo $fruit . "\n";
}

// Output:
// apple
// banana
// cherry
// orange

$person = array("name" => "John", "age" => 35, "country" => "USA");

foreach ($person as $key => $value) {
  echo $key . ": " . $value . "\n";
}

// Output:
// name: John
// age: 35
// country: USA




// Define a multidimensional array
$persons = array(
    array("Name" => "John Doe", "Age" => 35, "Country" => "USA"),
    array("Name" => "Jane Doe", "Age" => 29, "Country" => "Canada"),
    array("Name" => "Bob Smith", "Age" => 40, "Country" => "UK"),
);

// Display the array using a nested loop
foreach ($persons as $person) {
    foreach ($person as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<br>";
}
?>

