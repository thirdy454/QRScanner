<?php

    $server = "localhost";
    $dbusername ="root";
    $dbpassword ="";
    $dbname ="test1";


    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }

    if(isset($_POST['scanned'])) {

        $scanresult =$_POST['scanned'];

        $sql = "INSERT INTO testreg (CRED) VALUES('$scanresult')";
        if($conn->query($sql) ===TRUE) {
            echo "Successfully inserted";
        } else {
            echo "Error : " . $sql . "<br>" . $conn->error;
        }

    

    }

    $conn->close();
?>