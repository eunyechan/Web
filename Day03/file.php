<?php

    header('Content-Type:text/html; charset=utf-8');
    
    //사용자가 file을 전송하면 실제 파일의 데이터는
    //임시저장소에 저장되며 전송된 file을 설명하는
    //추가데이터(header정보)만 이 php 문서에 전달됨
    //전달된 추가데이터는 $_FILES 라는 배열변수에 저장됨
    //$_FILES라는 배열은 5칸 짜리로 구성되어 있음
    
    $file= $_FILES['aaa'];

    //$file은 배열변수임 -5칸 짜리임
    //전송된 원본파일명
    $srcName= $file['name'];
    //파일 타입
    $fileType= $file['type'];
    //파일 사이즈
    $fileSize= $file['size'];
    //업로드된 파일이 잠시 보관된 저장소의 경로
    $tmpName= $file['tmp_name'];

    echo "$srcName<br>";
    echo "$fileType<br>";
    echo "$fileSize<br>";
    echo "$tmpName<br>";

    //임시저장소에 있는 파일을 영구저장하기 위해 이동
    $dstName= './kkk/' . date('Ymdhis') .".png";
    move_uploaded_file($tmpName, $dstName);
?>