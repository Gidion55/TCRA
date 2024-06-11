<?php
function calculateAverage($marks) {
    $total = 0;
    $count = count($marks);

    //sum up all the marks
    foreach ($marks as $mark) {
        $total += $mark;
    }

    //calculate the average
    $average = $total / $count;
    return $average;
}

function assignGrade($average) {
    if($average >= 90) {
        return 'A';
    } elseif($average >= 80) {
        return 'B';
    } elseif($average >= 70) {
        return 'C';
    } elseif($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

//Example usage
$marks = [75,88, 92, 76, 89];

$average = calculateAverage($marks);

$grade = assignGrade($average);

echo "Average marks: " . $average . "\n";
echo "Grade: " . $grade . "\n";                
?>