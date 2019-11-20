<?php 

$str="Certaines choses changent, et d'autres
ne changeront jamais.";
$i=0;
$istr= strlen($str);

while($i<$istr)
{
    if($i==$istr-1)
    {
        echo$str[0];
    }
    else
    {
        echo$str[$i+1];
    }
    $i=$i+1;
}

?>