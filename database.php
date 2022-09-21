

<?php

$server = "localhost";
    $dbusername ="root";
    $dbpassword ="";
    $dbname ="test1";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);


if($conn->connect_error){
        die('Connection Failed : '.$conn->connection_error);
    }
    ?>



<!-- <?php

   

    // $conn = new mysqli('localhost' , 'root', '', '', 'test1');
    // if($conn->connect_error){
    //     die('Connection Failed : '.$conn->connection_error);
    // } else {
    //     $result = $_POST['scanned'];
    //     $stmt = $conn->prepare("select * from testreg where testreg = ?");
    //     $stmt->bind_param("CCIS-RODJAN FAT", $result);
    //     $stmt->execute();
    //     $stmt_result = $stm->get_result();
    //     if($stmt_result->num_rows > 0){
    //         $data = $stmt_result->fetch_assoc();
    //          if($data['cred'] === $result) {
    //             echo "<h2> Welcome Heron! </h2>";
    //          }
    //     } else {
    //         echo "<h2> Invalid QR Code - not registered </h2>";
    //     }
    // }

?> -->