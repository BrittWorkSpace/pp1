<?php
function printArr($data)
{
    foreach ($data as $value)
    {
        echo $value;
    }
    echo "<br>";
}
$numArray = array(7,9,8,9,8,8,6);
printArr($numArray);

function largest($data)
{
    $max = $data[0];
    for($i = 1; $i < count($data); ++$i)
    {
        if($data[$i]>$max)
        {
            $max = $data[$i];
        }
    }
    return $max;
}
?>