<?php include'functions.php';
$numArray = array(7,9,8,9,8,8,6);
$testArr = array(1,7,9,15,8,3);
printArr($numArray);
$large = largest($testArr);
echo $large;
echo "<br>";
$average = average($testArr);
echo $average;
echo "<br>";
$newArr =removeDups($numArray);
foreach ($newArr as $item)
{
    echo $item;
    echo "<br>";
}

$testArr = distribution($numArray);
foreach ($testArr as $item => $key)
{
    echo "$item". "=>". "$key". ",";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
<header>Pair program 1</header>
</body>
</html>