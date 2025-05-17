<?php
session_start();
include('dbcon.php');

if (!isset($_SESSION['uid']) || !isset($_SESSION['pid'])) {
    header("Location: home.php");
    exit();
}

$uid = $_SESSION['uid'];
$pid = $_SESSION['pid'];

// Fetch user and challan data
$sql = "SELECT u.name, u.pno, u.adds, u.aids, v.vname, v.vmodel, v.vhno, v.vtype, v.ccost, v.status
        FROM u_info u
        JOIN vehicle_detail v ON u.uid = v.uid AND u.pid = v.pid
        WHERE u.uid='$uid' AND u.pid='$pid'";
$run = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Challan Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .receipt { border: 1px solid #000; padding: 20px; width: 600px; margin: auto; }
        h2 { text-align: center; }
        .info { margin: 10px 0; }
    </style>
</head>
<body onload="window.print()">

<div class="receipt">
    <h2>Traffic Challan Receipt</h2>
    <div class="info"><strong>Name:</strong> <?php echo $data['name']; ?></div>
    <div class="info"><strong>Phone No:</strong> <?php echo $data['pno']; ?></div>
    <div class="info"><strong>Address:</strong> <?php echo $data['adds']; ?></div>
    <div class="info"><strong>Vehicle:</strong> <?php echo $data['vname'] . " (" . $data['vmodel'] . ")"; ?></div>
    <div class="info"><strong>Vehicle No:</strong> <?php echo $data['vhno']; ?></div>
    <div class="info"><strong>Type:</strong> <?php echo $data['vtype']; ?> tyres</div>
    <div class="info"><strong>Total Penalty:</strong> ₹<?php echo $data['ccost']; ?></div>
    <div class="info"><strong>Status:</strong> <?php echo ucfirst($data['status']); ?></div>
</div>

</body>
</html>
