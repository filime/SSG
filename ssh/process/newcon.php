<?php
    $title = $_POST['title'];
    $main = $_POST['main'];
    $conn = mysqli_connect("localhost", "root", "test");
    mysqli_select_db($conn, "SSG");
    $sql = "INSERT INTO contents (title, main) VALUES ('$title', '$main')";
    $result = mysqli_query($conn, $sql);

    if($result == false){
        echo 'ERROR';
    }
?>
<script>
    location.href='/index.php';
</script>