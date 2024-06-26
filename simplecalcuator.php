<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator Programm In Php</title>
</head>
<body>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';

if(is_numeric($first_num) && is_numeric($second_num)) {
    switch($operator) {
        case "Add":
            $result = $first_num + $second_num;
            break;
        case "Substract":
            $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
            
    }
}

?>

<div id="page-wrap">
    <h1>PhP Simple Calculator Program</h1>
    <form action="" method="post" id="quiz-form">
        <p>
            <input type="number" name="first_num" id="first_num" 
            required="required" value="<?php echo $first_num; ?>" /> <b>First number</b>
        </p>
        <p>
            <input type="number" name="second_num" id="second_num"
            required="required" value="<?php echo $second_num; ?>" /> <b>Second number</b>
        </p>
        <p>
        <input readonly="readonly" name="result" value="<?php echo $result; ?>" /> <b>Result</b>
        </p>
        <input type="submit" name="operator" value="Add">
        <input type="submit" name="operator" value="Substract">
        <input type="submit" name="operator" value="Multiply">
        <input type="submit" name="operator" value="Divide">

    </form>
</div>
    
</body>
</html>