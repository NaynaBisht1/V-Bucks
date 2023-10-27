<?php
    $servername = "localhost";
    $DBusername = "root";
    $DBpassword = "";
    $DBname = "vbucks";

    $conn = new mysqli($servername, $DBusername, $DBpassword, $DBname);
    if (!$conn){
        die("Connection Failed: ". mysqli_connect_error());
    }