<?php

    header('Content-Type:text/html; charset=utf-8');

    $files=$_FILES['bbb'];

    //files는 배열변수임
    echo count($files)."<br>";
    echo count($files['type']);

    echo "======================="<br><br>;
    //선택된 파일의 개수
    $fileNum= count($files['name']);
    
    for($i=0; $i<$fileNum; $i++){
        $srcName= $files['name'][$i]; //원본파일명
        $tmpName= $files['tmp_name'][$i]; //임시저장소 경로
        $type= $files['type'][$i]; //파일타입
        $size= $files['size'][$i]; //파일사이즈

        echo $srcName ."<br>";
        echo $tmpName ."<br>";
        echo $type ."<br>";
        echo $size ."<br>";
        echo "===========<br>";

        //영구저장소로 파일 이동
        $dstName= "./file/". date('Ymdhis') . $srcName;
        move_uploaded_file($tmpName, $dstName);
    }


?>