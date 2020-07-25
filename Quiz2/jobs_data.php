<?php

$link = mysqli_connect('localhost','root','','Quiz2');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE TABLE Quiz2(
    id varchar NOT NULL PRIMARY KEY ,
    Job_title VARCHAR(50) NOT NULL ,
    Min_SAlary VARCHAR(5) ,
    Max_Salary varchar(5)
    )";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>