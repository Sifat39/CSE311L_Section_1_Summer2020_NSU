<?php
$link = mysqli_connect('localhost','root','','Homework_2');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}
$sql="CREATE TABLE employees(

Employee_id int(6) PRIMARY KEY NOT NULL,
First_Name varchar(20),
Last_Name varchar(25) NOT NULL,
Email varchar(25) NOT NULL,
Phone_Number varchar(15),
Hire_date Date NOT NULL,
Job_id varchar(10) NOT NULL,
Salary int (8),
Commision_pct int(2),
Manager_id int(6),
Department_id int(4)
)";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>