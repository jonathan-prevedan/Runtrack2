<?php 

function leetspeak($str)
{
    $result= str_replace(array('a','b','e','g','l','t','s'),array('4','8','3','6','1','5','7'),$str);
    return($result);
}

?>