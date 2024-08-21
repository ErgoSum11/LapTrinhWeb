<?php
function showArray($array){
    for ($i =0;$i < count($array); $i++){
        if ($i == count($array)-1){
            echo $array[$i];
            break;
        }
        echo $array[$i], ", "; 
    }
}
function arrMin($array){
    sort($array);
    return $array[0];
}
function arrMax($array){
    rsort($array);
    return $array[0];
}
function arrSum($array){
    $sum=0;
    for ($i=0; $i<count($array); $i++){
        $sum += $array[$i];
    }
    return $sum;
}
function showSorted($array){
    sort($array);
    for ($i =0;$i < count($array); $i++){
        if ($i == count($array)-1){
            echo $array[$i];
            break;
        }
        echo $array[$i], ", "; 
    }
}
function checkArray($num, $array){
    if(in_array($num, $array)){
        echo $num, " có trong mảng";
    }
     else{
        echo $num, " không có trong mảng";
    }
}