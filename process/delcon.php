<?php
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "test");
    mysqli_select_db($conn, "SSG");
    $sql = "DELETE FROM contents WHERE id = $id";
    $result = mysqli_query($conn, $sql);

?>
<script>
    location.href='/index.php';
</script>