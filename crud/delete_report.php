<?php
include '../db.php';

$id = $_GET['id'];

$sql = "DELETE FROM weekly_reports WHERE report_id = $id";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Report deleted successfully.";
} else {
    echo "Error deleting report: " . mysqli_error($conn);
}

