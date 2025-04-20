<?php

// Main program loop
while (true) {

	echo "Enter a list of numbers separated by spaces (or type 'exit' to quit): ";
	$input = trim(fgets(STDIN));

	// Exit condition
	if (strtolower($input) === 'exit') {
		echo "Exiting the program. Goodbye!\n";
		break;
	}

	// Split input into array
	$numbers = explode(" ", $input);

	// Validate all entries are numbers
	$isValid = true;
	foreach ($numbers as $num) {
		if (!is_numeric($num)) {
			$isValid = false;
			break;
		}
	}

	if (!$isValid) {
		echo "Invalid input. Please enter only numbers separated by spaces.\n\n";
		continue;
	}

	// Convert all to float or int
	$numbers = array_map('floatval', $numbers);

	// Analyze numbers
	$max = max($numbers);
	$min = min($numbers);
	$sum = array_sum($numbers);
	$average = $sum / count($numbers);

	// Display results
	echo "=== Results ===\n";
	echo "Maximum: $max\n";
	echo "Minimum: $min\n";
	echo "Sum: $sum\n";
	echo "Average: " . number_format($average, 2) . "\n\n";
}
?>
