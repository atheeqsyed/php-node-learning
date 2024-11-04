<? php 

// Constants
define('PI', 3.14);
const MAX_USERS = 100;


// variables

$age = 35;
$price = 19.99;
$name ="Atheeq";
$is_student = true;
$fruits = array ("Bannana","Mango", "Grape" );

// Conditional statements

if ($age >= 18) {
    echo "$name is an adult.\n";
} else {
    echo "$name is a minor.\n";
}

//Switch statement
$day = "Friday";
switch ($day) {
    case "Monday":
        echo "Start of week!\n";
        break;
    case "Friday":
        echo "End/Almost weekend\n";
        break;
    default:
        echo "Its just another day.\n";
}

//Loops
echo "Using for loop:\n";
for ($i=0; $i<5; $i++) {
    echo "Itteration $i\n";  // Outputs: Iteration 0 to 4
}

echo "Using while loop:\n";
$count = 0;
do {
    echo "Count is $count\n";  // Outputs: Count is 0 to 4
    $count++;
} while ($count <5);



//Foreach Loop to iterate over an array
echo "Fruits available:\n";
foreach ($fruits as $fruit) {
    echo $fruit. "\n";  // Outputs: Banana, Mango, Watermelon
}


/* Output 
Atheeq is an adult.
End/Almost weekend
Using for loop:
Itteration 0
Itteration 1
Itteration 2
Itteration 3
Itteration 4
Using while loop:
Count is 0
Count is 1
Count is 2
Count is 3
Count is 4
Fruits available:
Bannana
Mango
Grape  * /