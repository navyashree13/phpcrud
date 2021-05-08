<?php
//local
//$con=mysqli_connect("localhost", "root", "root", "test","3306");

//heroku
$con=mysqli_connect("sql6.freemysqlhosting.net", "sql6410958", "HS8uC6DQ2U", "sql6410958","3306");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>