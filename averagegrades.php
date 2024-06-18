<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Average Marks and Grades</title>
</head>
<body>
    <h2>Enter Marks</h2>
    <form method="post" action="">
        <label for="marks">Enter Marks:</label><br>
        <input type="text" id="marks" name="marks" required><br><br>
        <input type="submit" value="Calculate"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //Retrieve and process the marks input
        $marksInput = $_POST["marks"];
        $marksArray = explode("," , $marksInput);
        $marksArray = array_map('trim', $marksArray); //Remove any extra space
         $marksArray = array_map('floatval', $marksArray); //Converts to floats


        //Function to Calculate the average of marks
        function calculateAverage($marks) {
            $total = array_sum($marks);
            $count = count($marks);
            if($count === 0) {
                return 0;
            }
            return $total / $count;
        }

        //Function to assign grade based on average marks
        function assignGrade($average) {
            if($average >= 90) {
                return 'A';  
            } elseif ($average >= 80) {
                return 'B';
            } elseif ($average >= 70) {
                return 'C';
            } elseif ($average >= 60) {
                return 'D';
            } else {
                return 'F'; 
            }
            
        }

        //Calculate average marks and assign grades
        $average = calculateAverage($marksArray);
        $grade = assignGrade($average);


        echo "Dear student you got an average of " . number_format($average, 0) . " and your grade is " . $grade . "<br>";
    } 
    ?>
</body>
</html>