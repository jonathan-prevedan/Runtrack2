<form method="get" action="index.php">

<input type="text"  placeholder="largeur" name="largeur" >
<input type="text" placeholder="hauteur" name="hauteur">
<input type="submit" name="ok">

</form>


<?php 
var_dump($_GET);
$i=1;
$j='&nbsp&nbsp';
$l=1;

#echo$_GET["largeur"] && $_GET["hauteur"];#
#var_dump($i);#



while($_GET["hauteur"]>= $i)
{
    echo'|';
    $l=0;
        if($i==$_GET["largeur"])
        {  
            while($_GET["largeur"]>= $l)
            {  
            $l=$l+1;
            echo'_';
            }
           
        }
        
    else
    {
        while($_GET["largeur"]>= $l)
        {
            echo$j;
            $l++;
        }
    }
    
    echo'|';
    echo "<br />";
    $i=$i+1;
}



;
?>