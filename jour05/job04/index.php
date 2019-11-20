<?php 

function calcule($a, $operation, $b)
{
    switch($operation)
    {
        case'+':
        $result = $a + $b;
        break;

        case'-':
        $result = $a - $b;
        break;

        case'/':
        $result = $a / $b;
        break;

        case'*':
        $result = $a * $b;
        break;
    }
    return($result);
}

?>