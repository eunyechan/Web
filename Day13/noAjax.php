<?php
    header('Content-Type:text/html; charset=utf-8');

    $name= $_GET['name'];
    $email= $_GET['email'];

    //echo "$name $email 이 등록되었습니다.";
    //기본 html페이지가 없어짐..이 php로 페이지가 변경되었기에

    //기존 html에 일부분에 echo값을 보여주고 싶다면..?
    //echo로 기존 페이지를 모두 작성해야함

    echo ("
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'> 
            </head>
        
            <body>
                
                <h3>회원가입 페이지</h3>
        
                <form action='./noAjax.php' method='GET'>
                    <input type='text' name='name' value='$name'>
                    <input type='text' name='email' value='$email'>
        
                    <input type='submit'>
                </form>
        
                <hr>
        
                <textarea  cols='50' rows='3'>$name $email 이 등록되었습니다.</textarea>
        
            </body>
        </html>

    ");



?>