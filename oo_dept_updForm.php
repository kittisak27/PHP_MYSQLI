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
                $dept_no = $_GET['dept_no'];
                require_once('oo_mysqli_conn.php');
                    $query = "SELECT * FROM dept where dept_no = '$dept_no'";
                    $result = $conn->query($query) or die("Query failed");
                    $row = $result->fetch_array();
                    $dept_no = $row["dept_no"];
                    $dept_name = $row["dept_name"];
                    echo "<p class=\"fs-2\">แก้ไขข้อมูลรหัสแผนก $dept_no</p>";
                    ?>
            <div class="mb-3 mt-3">
                <form action = "oo_dept_upd.php" method = "POST">
                    <input type="hidden" name = "dept_no" class="form-control" value = "<?php echo $dept_no;?>">
                    <label for="dept_name" class="form-label">ชื่อแผนก</label>
                    <input type="text" class="form-control" name="dept_name"id="dept_name" value = "<?php echo $dept_name;?>">
                    </div>
            <div class="mb-3 mt-3">
                    <input type="submit" class="btn btn-dark" name="update" value = "Update">
                    <input type="button" class="btn btn-danger" value="Back"onclick="window.location.href='oo_dept.php'">
                    </div>
                </form>
                 <?php
                    $result->free();
                    $conn->close();
                ?>
            </div>
        </body>
</html>