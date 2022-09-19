<?php

    $result = $_POST['scanned'];


    $conn = new mysqli('localhost' , 'root', '', '', 'Herons_Welcome_QR');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connection_error);
    } else {
        $stmt = $conn->prepare("select * from registration where cred = ?");
        $stmt->bind_param("CCIS-RODJAN FAT", $result);
        $stmt->execute();
        $stmt_result = $stm->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
             if($data['cred'] === $result) {
                echo "<h2> Welcome Heron! </h2>";
             }
        } elese {
            echo "<h2> Invalid QR Code - not registered </h2>";
        }
    }

?>