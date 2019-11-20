<form method="get" action="index.php">

        <input type="text" name="nombre">

            <input type="submit" value="YES">
</form>



<?php 

if($_GET==true)
{

if($_GET["nombre"] % 2==0)
{
    echo"Nombre pair";    
}
else{
    echo"Nombre impair";
}
}
?>