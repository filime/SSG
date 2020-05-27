<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="/process/style.css">
</head>
<body>
<?php

    $id = $_GET['id'];

    $conn = mysqli_connect("localhost", "root", "test");
    mysqli_select_db($conn, "SSG");
    $sql = "SELECT * FROM contents WHERE id = $id";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo '<div id="main">';
    echo '제목';
    echo '<div id = "in">'.$row['title'].'</div>';
    echo '내용';
    echo '<div id = "in">'.$row['main'].'</div>';
    echo '<button id = "but" type="button" onclick="location.href=\'/contents/upcon.php?id='.$row['id'].'\'">수정</button>';
    echo '<button id = "but" type="button" onclick="location.href=\'/process/delcon.php?id='.$row['id'].'\'">삭제</button>';
    echo '<button id = "but" type="button" onclick="location.href=\'/index.php\'">메인으로</button>';
    
    echo '</div>';
?>    

</body>
</html>

