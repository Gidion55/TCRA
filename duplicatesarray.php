<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$original = array(1,2,3,3,7,8,9,9,4,5,7,10,10);
$filtered = array();
foreach($original as $key => $value) {
    if(in_array($value, $filtered)) {
        continue;
    }
    array_push($filtered, $value);
}
print_r($filtered);
?>
</body>
</html>