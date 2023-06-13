<?php

include './connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = '';

    $foto = $_POST['foto'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gender=$_POST['gender'];
    $bdate = $_POST['bdate'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];



    $sql = "INSERT INTO data2 (foto,name, fathers_name, mothers_name,gender, dob, email, department, mobile) 
    VALUES ('$foto','$name','$fname','$mname','$gender','$bdate','$email','$department','$phone')";
    $conn = mysqli_query($conn, $sql);

    if (isset($conn)) {
        header('location:/regestration_form/index.php');
    
    } else {
        echo "data not inserted!";
     }
}

?>
