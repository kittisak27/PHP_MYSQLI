<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Insert Form</title>
    </head>
    <body>
        <div class="container mt-3">
        <?php
         $dept_name = isset($_POST['dept_name']) ? $_POST['dept_name']: NULL;
        if (isset($dept_name)) {
                require_once('oo_mysqli_conn.php');
                $sql = "INSERT INTO dept(dept_name) values('$dept_name')";
        if($conn-> query($sql)){
            echo "<p class=\"fs-3\">เพิ่มข้อมูลของรหัสแผนก $dept_name แล้ว</p>";
                $conn->close();
                //echo "<a href=\"oo_dept.php\"> Back </a>";
             }else{
                echo "<p class=\"fs-3 text-danger\">Error :", $conn->error,"</p>";
            $conn->close();
        }
        } 
        ?>
        </div>
    </body>
</html>