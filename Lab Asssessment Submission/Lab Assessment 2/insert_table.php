<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "INSERT INTO test_table(id,username,password) VALUES
('1','DEMO','DEMO')";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "ERROR: Could not able to INSERT VALUES " .mysqli_error($link);
}

mysqli_close($link)


?>