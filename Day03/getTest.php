<?php

    header('Content-Type:text/html; charset=utf-8');

    //form요소로부터 GET방식으로 전달된 값들 받기
    //php는 GET방식으로 전달된 값들을 $_GET 이라는 이름의
    //배열변수에 가지고 있음

    $title= $_GET['title'];
    $message= $_GET['msg'];

    echo "<h2>제목: $title</h2>";
    echo "<p>메세지: $message</p>";


?>