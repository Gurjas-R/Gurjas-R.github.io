<?php
//header
include 'header.php';

//variables
$name = "Gurjas";
$year = 2026;

//echo is just the php version for print
echo "<h1>Hello this is $name's project</h1>";

// if statement
if ($year > 2025) {
    echo "<p>This project is new</p>";
} else {
    echo "<p>This project is old.</p>";
}

// loops
for ($i = 1; $i <= 3; $i++) {
    echo "<p>This is loop number $i</p>";
}

// function
function greetUser($user) {
    return "Hey " . $user . ";
}
echo "<p>" . greetUser("Lindsay") . "</p>";

// array
$features = array("Meeting Notes", "Audio Summary", "Document Summary");

echo "<h2>Features:</h2>";
foreach ($features as $feature) {
    echo "<p>$feature</p>";
}

//footer
include 'footer.php';
?>
