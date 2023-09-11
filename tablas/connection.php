<?php

// function connection() {
// $host = "localhost";
// $user = "root";
// $pass = "";

// $bd = "tablas";

// $connect = mysqli_connect($host, $user, $pass);

// mysqli_select_db($connect, $bd);

// return $connect;

// };
$connect = mysqli_connect("localhost" , "root" , "" , "tablas");
if($connect) {
    echo'conecto';

} else{
   echo'nonas';
}
?>