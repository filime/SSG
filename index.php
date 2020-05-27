<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/process/style.css">
</head>
<?php
    $connum= 1;

    $conn = mysqli_connect("localhost", "root", "test");
    mysqli_select_db($conn, "SSG");
    $sql = "SELECT * FROM contents ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    echo '<div id ="main">';
    while($row = mysqli_fetch_assoc(($result))){
    echo '<div id ="in">';
    echo $connum;
    echo '. ';
    echo '<a href="contents/showcon.php?id='.$row['id'].'">'.$row['title'].'</a>';
    echo '</div>';
    $connum++;
    }
    echo '<div>';
    
    echo '<button id = "but" type="button" onclick="location.href=\'/contents/makecon.php\'">글생성</button>';
    echo '</div>';
    echo '</div>'
?>
</html>
