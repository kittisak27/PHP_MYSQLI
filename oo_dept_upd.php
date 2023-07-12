<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Form</title>
    </head>
<body>
    <div class="container mt-3">
        <?php
            require_once('oo_mysqli_conn.php');
            $dept_no = $_POST['dept_no'];
            $dept_name = $_POST['dept_name'];
            $sql = "UPDATE dept set dept_name = '$dept_name' where dept_no ='$dept_no'";
        if ($conn->query($sql)) {
            echo "<p class=\"fs-3\">แก้ไขข้อมูลรหัสแผนก $dept_no แล้ว</p>";
        $conn->close();
            echo "<p><a href=\"oo_dept.php\"> Back </a></p>";
        } else {
            echo "<p class=\"fs-3 text-danger\">Error :", $conn->error,"</p>";
            $conn->close();
         } 
            ?>
        </div>
    </body>
</html>