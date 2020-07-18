<?php
$link=mysqli_connect('localhost','root','');

if($link==false)
{
    die("Error: could not connect. " .mysqli_connect_error());

}
$sql='Create DATABASE VS_CODE_TEST';

if(mysqli_query($link,$sql))
{
    echo "DB Created";
}
else
{
    echo "Error:could not create DB. " .mysqli_error($link);
}

mysqli_close($link)

?>