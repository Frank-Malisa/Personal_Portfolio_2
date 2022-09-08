<?php

$con=mysqli_connect("localhost", "root", "", "admin");

if(mysqli_connect_error())
{
    echo "failed to connect";
}


if(isset($_POST['Signin']))
{
    $query="SELECT * FROM `admin_login` WHERE `admin_name`='$_POST[AdminName]' AND `admin_password`='$_POST[AdminPassword]'";
    $result=mysqli_query($con, $query);

    if(mysqli_num_rows($result)==1)
    {
        echo "<script>alert('LOG IN Successful. WELCOME!');</script>";
        
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location: AdminPanel.php");
    }

    else
    {
        echo "<script>alert('Incorrect Username or Password');</script>";
    }
}

?>