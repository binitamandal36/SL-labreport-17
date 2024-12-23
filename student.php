<!--1. Write a PHP script that uses a foreach loop to iterate over an associative array
containing student names as keys and their corresponding grades as values.
Calculate the average grade and display it. -->

<?php
// Associative array of student names and their grades
$students = [
    "John" => 85,
    "Jane" => 92,
    "Alex" => 78,
    "Emily" => 88,
    "Michael" => 90
];

$totalGrades = 0;
$totalStudents = count($students);

// Iterate through the associative array
foreach ($students as $name => $grade) {
    $totalGrades += $grade;
    echo "Student: $name, Grade: $grade<br>";
}

// Calculate the average grade
$averageGrade = $totalGrades / $totalStudents;

// Display the average grade
echo "<br>Average Grade: " . number_format($averageGrade, 2);
?>
