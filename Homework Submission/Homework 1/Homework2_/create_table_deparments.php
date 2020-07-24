<?php
$link = mysqli_connect('localhost','root','','Homework_2');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}

$sql="CREATE TABLE departments(
Department_id int(4) PRIMARY KEY,
Department_Name varchar(15) NOT NULL,
Manager_id int(5),
Location_id int(5) NOT NULL
)";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>