<?php 

$nombre=1;
while ($nombre <=100)
{
    if ($nombre % 3==0)
    {
        if ($nombre % 5==0 && $nombre % 3==0)
        {
        echo"Fizzbuzz";
        echo"<br>";
        }
    echo"Fizz";
    echo "<br>";
    }

    else if ($nombre % 5==0)
    {
        echo"buzz";
        echo"<br>";
    }

   
    else{
    echo $nombre;
    echo"<br>";
    }
    $nombre++;
   
}
?>