<?php 

$str="Tous ces instants
seront perdus dans le temps comme les larmes sous la pluie";
$i=0;

while($i<=strlen($str))
{
    if($str[$i])
    {
        echo$str[$i];
    }
$i =$i+2;
}



?>