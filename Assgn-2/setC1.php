<html>
    <body>
        <form action="setC1.php" method="post">
            Enter email address: <input type="text" name="email">
            <input type="submit" value="submit">
        </form>
    </body>
</html>

<?php
$email = $_POST['email'];
function emailValid($email)
{
    if(!preg_match ("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
    {   
        return"INVaild email";
    }  
    else{
        return"Valid email";
    }
}
print_r(emailValid($email))
?>