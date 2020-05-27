<?php
$id = $_POST['id'];
$title = $_POST['title'];
$main = $_POST['main'];

$conn = mysqli_connect("localhost", "root", "test");
 mysqli_select_db($conn, "SSG");
 $sql ="UPDATE contents SET title = '$title', main = '$main' where id = '$id'";
 echo $sql;
 $result = mysqli_query($conn, $sql);

?>
<script>
    location.href='/index.php';
</script>