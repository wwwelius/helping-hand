<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Data base connection here.
    //mysqli_connect("localhost","root","","helping_hand");
    $con = new mysqli("localhost","root","","helping_hand");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }else{
        $stmt = $con->prepare("select * from signup where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $password){
                echo "<h2>Login Successfully</h2>";
            }else{
                echo "<h2>Invalid Email or Password</h2>";
            }
        }
    }


?>