<?php 

function occurences($str,$char)
{
    $result= substr_count ($str, $char);

    return($result);
}

?>