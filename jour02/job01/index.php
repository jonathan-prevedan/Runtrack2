<?php 

$nombre=0;

while ($nombre <=1337)
{
    if ($nombre==42)
    {echo "<b><u>".$nombre."</b></u><br/>";
    }
    else
    {
    echo $nombre;
    echo "<br/>";
    
    }
    $nombre= $nombre + 1;
}
?>