<?php
function printArr($data)
{
    foreach ($data as $value)
    {
        echo $value;
        echo "<br>";
    }
    echo "<br>";
}



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

function average($data)
{
    $sum=0;
    foreach ($data as $item)
    {
        $sum+=$item;
    }
    return $sum/count($data);
}

function removeDups($data)
{
    sort($data);
    $copy = $data;
    for($i=count($copy); $i>0; $i--)
    {
        if($copy[$i] == $copy[$i-1])
        {
            unset($copy[$i]);
        }
    }
    return $copy;
}
?>