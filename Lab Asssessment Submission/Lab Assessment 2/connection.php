<?php
$mysqli_connection=new mysqli('localhost','root','','test');
if($mysqli_connection-> connect_error)
{
    echo "Not Connected error:" .$mysqli_connection->connect_error;
}

else
{
echo "Connected";
}

?>
