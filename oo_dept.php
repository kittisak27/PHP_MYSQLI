<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>List Department</title>
    </head>
<body>
    <div class="container mt-3">
        <p class="fs-1 text-success">ข้อมูลแผนก</p>
            <div class="row">
                <form method="post" class="row g-3">
                <div class="mb-3 col-4">
                    <select class="form-select" name="field" size="1">
                        <option value="dept_no">รหัสแผนก</option>
                        <option value="dept_name">ชื่อแผนก</option>
                    </select>
                </div>
                <div class="mb-3 col-4">
                    <input type="text" name="textSearch" class="col form-control"size="30">
                </div>
                <div class="mb-3 col-4">
                    <input type=submit name="searchBtn" class="btn btn-dark" value="Search" formaction = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type=submit name="insertBtn" class="btn btn-danger"value="Insert" formaction = "oo_dept_insForm.php">
                </div>
            </form>
        </div>
    <?php
    include "oo_dept_list.php";
    ?>
    </div>
</body>
</html>