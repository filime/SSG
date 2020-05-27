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
        echo '<form id ="in" action="/process/upconpro.php" accept-charset="utf-8" name="con" method="post">';
        echo '<textarea cols = "40" rows = "2"name="title"/>'.$row['title'].'</textarea><br><br>';
        echo '<textarea cols="60" rows="15" name="main"/>'.$row['main'].'</textarea><br><br>';
        echo '<input type="submit" value="수정"/>';
        echo '<input type="hidden" name="id" value="'.$id.'">';
        
        echo '<button id = "but" type="button" onclick="location.href=\'/index.php\'">메인으로</button>';
        echo '</form>';
        echo '</div>'
    ?>

    </body>
</html>
