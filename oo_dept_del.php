<?php
$host = "localhost";
$user = "root";
$passwd = "";
$dbname = "hr";
    $dept_no = $_GET['dept_no'];
    $sqli = new mysqli($host,$user,$passwd,$dbname);
    if($sqli->connect_errno){
        die("Connection failed:".$sqli->connect_error);
    }
    echo "Connect to Database $dbname successful";
    $sql = "DELETE FROM dept where dept_no='$dept_no'";
echo $sql;
if($sqli->query($sql)){
    echo "Record Delete";
}
else{
    echo "Error,$sqli->error";
}
?>