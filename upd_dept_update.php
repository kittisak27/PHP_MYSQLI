<?php 
    $dept_no = isset($_POST["dept_no"]) ? $_POST["dept_no"] : NULL; 
    $dept_name = isset($_POST['dept_name']) ? $_POST['dept_name']: NULL; 
    if (isset($dept_no) and isset($dept_name)) { 
        require_once('./oo_mysqli_conn.php'); 
        $sql = "UPDATE dept SET dept_name='$dept_name' WHERE dept_no =$dept_no"; 
        if($conn-> query($sql)){ 
            echo "Record Updated! "; 
            $conn->close(); 
        }else{ 
            echo "Error : ", $conn->error; 
            $conn->close(); 
        } 
    } 
?>