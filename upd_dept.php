<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <?php
        require ('./oo_mysqli_conn.php');
        $dept_no = $_POST['dept_no'];
        $query = "SELECT * FROM dept where dept_no = '$dept_no'"; 
        $result = $conn->query($query) or die("Query failed"); 
        $row = $result->fetch_array(); 
        if(!$row["dept_no"]) {
            echo "<br>";
            echo "Not Found dept_no : ", $dept_no;
        }
        else {
            $dept_no = $row["dept_no"]; 
            $dept_name = $row["dept_name"]; 
        }
    ?>
    <body>
    <div class="container mt-3">
        <form action="./upd_dept_update.php" method="post">
            <div class="col-4 mt-3">
            <label for="dept_no" class="form-label">รหัสแผนก</label>
            <input type="text" class="form-control" name="dept_no" id="dept_no">
            <label for="dept_name" class="form-label">ชื่อแผนก</label>
            <input type="text" class="form-control" name="dept_name" id="dept_name">
            </div>
            <div class="mb-3 mt-3">
            <input type="submit"class="btn btn-danger" value="update">
            </div>
        </form>
    </div>
    <?php
        $result->free(); 
        $conn->close(); 
    ?>
  </body>
</html>




