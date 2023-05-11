<?php
    $servername = "34.94.198.197";
    $username = "root";
    $password = "";
    $database = "app_users";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn === false) {
        die("Connection Failed ");
    }
    
    else {

        $user = $_POST['userName'];
        $pass = $_POST['userPass'];
      
          $query = "SELECT * FROM myUsers WHERE(userName = '$user' AND userPassword = '$pass')";
          $result = mysqli_query($conn, $query);
      
        if (@mysqli_num_rows($result) >= 1) {
            echo "data found";
            header("location:playgame.html");
        } else {
            echo "No data found";
        }     

    }


?>