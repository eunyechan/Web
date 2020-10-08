<?php

    header('Content-Type:text/html; charset=utf-8');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['msg'];

    $message= nl2br($message);

    echo "<h2>$name</h2>";
    echo "<h2>$email</h2>";
    echo "<h2>$message</h2>";

?>