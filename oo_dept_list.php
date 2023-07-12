<?php
    require_once('oo_mysqli_conn.php');
    $searchField = isset($_POST['field']) ? $_POST['field'] : NULL; 
    $textSearch = isset($_POST["textSearch"]) ? $_POST["textSearch"] : NULL; 
        if (!isset($textSearch)) {
                $query = "SELECT * FROM dept order by dept_no";
            } else {
        if ($searchField == 'dept_no') {
                $query = "SELECT * FROM dept WHERE dept_no like '%$textSearch%' 
        ORDER BY dept_no";
            } elseif ($searchField == 'dept_name') {
                $query = "SELECT * FROM dept WHERE dept_name like '%$textSearch%' 
         ORDER BY dept_no";
            } else {
                $query = "SELECT * FROM dept order by dept_no";
            } 
        }
    $result = $conn->query($query) or die("Query failed");
    if($result->num_rows == 0){ 
            die("Nothing to Display!"); 
        } 
    print "<table class='table table-striped'>";
    echo "<tr><th>รหัสแผนก</th><th>ชื่อแผนก</th><th colspan='2'>เลือกทำงาน</th></tr>";
    while ($row = $result->fetch_array()) {
    echo "<tr>"; 
    echo "<td> ",$row["dept_no"],"</td>";
    echo "<td> ",$row["dept_name"],"</td>";
    $dept_no = $row["dept_no"];
    echo "<td> <a href=\"oo_dept_updForm.php?dept_no=$dept_no\">Edit</a></td>";
    echo "<td> <a href=\"oo_dept_del.php?dept_no=$dept_no\">Delete</a></td>";
    echo "</tr>";
        }
        echo "</table>";
        echo "จำนวนข้อมูลทั้งหมด : ", $result->num_rows, " รายการ<br>";
        $result->free_result();
        $conn->close();
    ?>
