<?php 

$str="I'm sorry Dave I'm afraid I can't
do that.";

$voyelle = array('a','e','i','o','u','y','A','E','I','O','U','Y');

$count = 0;

while ($count<=42)
{
    $subcount = 0;
   
    while ($subcount<=11)
    {
        if($voyelle[$subcount] == $str[$count])
        {
            echo$str[$count];
        }
        $subcount=$subcount+1;
    }
    $count=$count+1;
}

?>