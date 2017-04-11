<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webAidDb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO anmalan (orgname, logo, info, focus, designWish, deadWish, mail, tele)
VALUES ('$_POST[orgname]', '$_POST[logo]', '$_POST[info]', '$_POST[focus]', '$_POST[designWish]', '$_POST[deadWish]', '$_POST[mail]', '$_POST[tele]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
