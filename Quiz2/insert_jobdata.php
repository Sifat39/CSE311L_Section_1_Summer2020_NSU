
<?php

$link = mysqli_connect('localhost','root','','Quiz2');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "INSERT INTO test_table VALUES
('AD_PRES','President','20000','40000'),
('AD_vp','Administration_Vice President','15000','30000'),
('AD_asst','Administration_assisstant','3000','6000')";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "ERROR: Could not able to INSERT VALUES " .mysqli_error($link);
}

mysqli_close($link)


?>
