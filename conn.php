<?php

$conn = mysqli_connect("localhost", "root", "", "video");
if(!$conn){
    die("database err<br>" . mysqli_connect_error());
}

?>