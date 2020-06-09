<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
	$num = 0;
	while($num < 10){
		$num++;
		echo $num;
		echo "<br>";
	}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
	$numbers = range(5, 100, 5);
/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

	for($n = 0; $n < sizeof($numbers); $n++){
		if($numbers[$n] % 2 != 0){
			echo $numbers[$n];
			echo "<br>";
		}
	}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
	$food = ["DHOKLA", "NACHO", "GULAB-JAMUN", "BURRITO"];
/*
Use while-loop to print array elements (every food in a new row).
*/
	$cuisine = 0;
	while ($cuisine < sizeof($food)) {
		echo $food[$cuisine];
		echo "<br>";
		$cuisine += 1;
	}
/*
Use for-loop to print array elements (every food in a new row).
*/
	for($foo = 0; $foo < sizeof($food); $foo++){
		echo $food[$foo];
		echo "<br>";
	}
/*
Use foreach-loop to print array elements (every food in a new row).
*/

	foreach ($food as $dishes) {
		echo $dishes."<br>";
	}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

	echo "<ul>";
	for($fd = 0; $fd < sizeof($food); $fd++){
		echo "<li>$food[$fd]</li>";
	}
	echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

	$food_assoc[$food[0]] = ["type"=>"Snack", "origin"=>"Gujarat"];
	$food_assoc[$food[1]] = ["type"=>"Main Course", "origin"=>"Italian"];
	$food_assoc[$food[2]] = ["type"=>"Sweet Dish", "origin"=>"Delhi"];"Sweet Dish";
	$food_assoc[$food[3]] = ["type"=>"Main Course", "origin"=>"Mexican"];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
	foreach ($food_assoc as $food_dishes) {
		print_r($food_dishes);
	}
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
	foreach ($food_assoc as $food_item => $food_type) {
		echo "<li>$food_item<ul>";
	foreach ($food_type as $dishes => $food_dishes_value) {
		echo"<li>$dishes: $food_dishes_value</li>";
	}
	echo "</ul>
	</li>";
	}
	echo "</ul>";

?>
