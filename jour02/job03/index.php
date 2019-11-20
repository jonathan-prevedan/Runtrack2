<?php 

$nombre=0;

while ($nombre <=100)
{
    if($nombre<=20)
    {
        echo "<i>".$nombre."</i></br>";
    }   

    elseif($nombre >=25 && $nombre <=50)
    {
        if($nombre == 42)
        {
            echo "<u>La Plateforme_<br></u>";
            $nombre++;
        } 
        echo "<u>".$nombre."</u></br>";
        
    }
    else{
        
        echo"$nombre<br>";
    }
    $nombre++;
}
?>