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
                <p class="fs-2">Insert New Department:</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3 mt-3">
                <label for="dept_name" class="form-label">Department name:</label>
                <input type="text" class="form-control" id="dept_name" placeholder="Enter Department name" name="dept_name">
            </div>
                <input type="submit" class="btn btn-dark" value="Submit">
                <input type="button" class="btn btn-danger" value="Back"onclick="window.location.href='oo_dept.php'">
                </form>
             </div>
        </body>
</html>
    <?php
        include "oo_dept_ins.php";
    ?>
