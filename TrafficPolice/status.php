<?php
include('dbcon.php'); // your DB connection

if (isset($_POST['uid']) && isset($_POST['pid'])) {
    $uid = $_POST['uid'];
    $pid = $_POST['pid'];
    $status = isset($_POST['status']) ? 'paid' : 'unpaid';

    $sql = "UPDATE vehicle_detail SET status='$status' WHERE uid='$uid' AND pid='$pid'";
    if (mysqli_query($con, $sql)) {
        header("Location: your_previous_page.php"); // replace with actual page
        exit();
    } else {
        echo "Error updating status.";
    }
}
?>
