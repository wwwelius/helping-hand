<?php
$con = mysqli_connect("localhost","root","","helping_hand");
$a = $_POST['feedback'];


    $sql = "insert into feedback(feedback_id, user_id, message, time) values('$a','$b','$c','$d')";
    mysqli_query($con,$sql);
    echo "successfully registered";
?>

