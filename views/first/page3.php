<?php
    $arr1=array(1,2,3);   // php <5.4
    print_r($arr1);
    echo "<hr />";
    $arr2=[1,2,3];   // php >5.3  use for yii
    print_r($arr2);
    echo "<hr />";
    $arr3=['a'=>1,'b'=>2,'c'=>3];   // php >5.3
    print_r($arr3);
    echo "<hr />";
    $xyz=$arr3['c'];
    echo $xyz;
    echo "<hr />";
?>

