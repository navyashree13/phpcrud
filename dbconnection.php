<?php
$con=mysqli_connect("localhost", "root", "root", "test","3306");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>