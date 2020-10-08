<?php

    header('Content=Type:text/html; charset=utf-8');

    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];

    echo "<h2>$name</h2>";
    echo "<h2>$address</h2>";
    echo "<h2>$email</h2>";
    echo "<h2>$name</h2>";
    echo "<h2>$gender</h2>";


?>