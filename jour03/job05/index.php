<?php 
$str="On n'est pas le meilleur quand
on le croit mais quand on le sait.";
$voyelles = array('a','e','i','o','u','y','A','E','I','O','U','Y');
$consonnes = array('B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z','b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z');
$i=0;
$j=0;
$v=0;

$l=0;
$c=0;

//var_dump($voyelles);//

while($i<strlen($str))
{
    $j=0;
    while($j<12)
    {
        
        if($str[$i]==$voyelles[$j])
        {
            $v=$v+1;
            #echo$v;
           
        }
        $j=$j+1;
    }
    #echo$str[$i];

    $l=0;
    while($l<39)
    {
        
        if($str[$i]==$consonnes[$l])
        {
            $c=$c+1;
            //echo$c;
        }
        $l=$l+1;
    }

    $i=$i+1;
}

/*echo $str;
echo "<br />";
echo $v;
echo "<br />";
echo $c; */

$color;
if ($v % 2 == 0)
{
    $color = "blue";
}
else
{
    $color = "red";
}

?>

<table style="border:3px solid red">
<tr>
    <td>
        Voyelles
    </td>
    <td>
        Consonnes
    </td>
</tr>
<tr>
    <td>
        <p style=<?php echo "\"color: $color\"" ?> ><?php echo$v; ?></p>
    </td>
    <td>
        <?php echo$c; ?>
    </td>
</tr>


</table>