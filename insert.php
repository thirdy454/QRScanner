<?php

    $scanned = $_POST['scanned'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test1";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT cred From testreg Where cred = ? Limit 1";
        $INSERT = "INSERT Into testreg (cred) values(?)";


        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $cred);
        $stmt->execute();
        $stmt->bind_result($cred);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("s", $cred);
            $stmt->execute();

            echo "New Record Inserted"
        } else {
            echo "Already Registered"
        }
        $stmt->close();
        $conn->close();
    }


?>