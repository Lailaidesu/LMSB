<!DOCTYPE html>
<html lang="en">
<head>
    <title>THANK YOU!</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dataport";

if (isset($_POST["sendd"])) {
    // Check if the required fields exist in the $_POST array
    if (isset($_POST["txtname"], $_POST["txtemail"], $_POST["txtproject"], $_POST["txtmessage"])) {
        $tname = $_POST["txtname"];
        $temail = $_POST["txtemail"];
        $tproject = $_POST["txtproject"];
        $txtmessage = $_POST["txtmessage"];

        $con = new mysqli($servername, $username, $password, $database);

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Sanitize the input (to prevent SQL injection)
        $tname = mysqli_real_escape_string($con, $tname);
        $temail = mysqli_real_escape_string($con, $temail);
        $tproject = mysqli_real_escape_string($con, $tproject);
        $txtmessage = mysqli_real_escape_string($con, $txtmessage);

        // Prepare and execute the SQL query
        $query = "INSERT INTO laraport (Fullname, Email, Projects, SMessage) VALUES ('$tname', '$temail', '$tproject', '$txtmessage')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo 'Thank You!';
        } else {
            echo 'Error: ' . mysqli_error($con);
        }

        mysqli_close($con);
        include 'home.php';
    } else {
        echo 'One or more required fields are missing in the form submission.';
    }
}
?>

</body>
</html>
