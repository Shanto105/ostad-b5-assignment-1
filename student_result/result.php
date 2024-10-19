<?php
// Function to calculate result
function calculateResult($marks) {
    foreach ($marks as $subject => $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid for $subject. Please enter marks between 0 and 100.<br>";
            return;
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Result: Failed. Scored below 33 in one or more subjects.<br>";
            return;
        }
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    $grade = "";
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output
    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: " . number_format($averageMarks, 2) . "<br>";
    echo "Grade: $grade<br>";
}

// Example of marks entered for 5 subjects
$marks = [
    "Math" => 55,
    "Science" => 40,
    "English" => 35,
    "History" => 59,
    "Geography" => 48
];

calculateResult($marks);
?>
