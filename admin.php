<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "howieross";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    // Create connection
    $conn = new mysqli($host, $user, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM contacts;";
    
    $result = $conn->query($sql);
    
   if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["ID"]. " | " . $row["name"]. " | " . $row["email"]. " | " .
            $row["message"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>    