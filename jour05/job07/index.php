<html>
<body>
<form method="get" action="index.php">

    <input type="text" name="str">
    <select name="fonction">
    <option name="gras">Gras</option>
    <option name="cesar">cesar</option>
    <option name="plateform">LaPlateforme</option>
    <input type="submit">

</form>
</body>
</html>

<?php 

function gras($str,$bold)
{
    $str=$_GET['str'];
    return $first.substr($str,0);
}

echo gras($str,$bold);

?>