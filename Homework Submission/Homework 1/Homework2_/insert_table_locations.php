<?php

$link = mysqli_connect('localhost','root','','Homework_2');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}

$sql=" INSERT INTO locations VALUES
(1400,'2014 Jabberwocky RD','26192','Southlake','Texas','Us'),
(1500,'2014 Jabberwocky RD','26192','Southlake','Texas','Us'),
(1700,'2014 Jabberwocky RD','26192','Southlake','Texas','Us'),
(1800,'2014 Jabberwocky RD','26192','Southlake','Texas','Us'),
(2500,'2014 Jabberwocky RD','26192','Southlake','Texas','Us')";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "ERROR: Could not able to INSERT VALUES " .mysqli_error($link);
}

mysqli_close($link)


?>
