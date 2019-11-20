<form method="post" action="index.php">

        <label>Username</label>
            <input type="text" name="username" /><br>

            <label>Password</label>
            <input type="password" name="password" /><br>

            <input type="submit" value="YES">
</form>

<?php 

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    
    if($_POST["username"] == "John" && $_POST["password"] == "Rambo")
    {
        echo"C'est pas ma guerre";
    }

    else{
        echo"Votre pire cauchemar";
    }
}
?>