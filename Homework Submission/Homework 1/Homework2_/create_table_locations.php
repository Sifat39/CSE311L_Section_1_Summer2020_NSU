<?php
$link = mysqli_connect('localhost','root','','Homework_2');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}
$sql = "CREATE TABLE Locations(
    Location_ID int(4) PRIMARY KEY NOT NULL,
    Street_Address varchar(40),
    Postal_Code varchar(12),
    City varchar(30) NOT NULL,
    State_Province varchar(25),
    Country_ID varchar(2)
)";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>