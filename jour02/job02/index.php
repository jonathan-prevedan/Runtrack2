<?php 

$nombre=0;


while ($nombre <=1337)
{
    if($nombre==26||$nombre==37||$nombre==88||$nombre==1111||$nombre==3233)
    {
        $nombre = $nombre+1;
        echo $nombre. "<br/>";
    }

    else
    {
        echo $nombre;
        echo "<br/>";
    }
    $nombre = $nombre+1;
}
?>