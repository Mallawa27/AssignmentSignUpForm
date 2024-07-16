<?php
require_once "conn.php";

if(isset($_POST['submit'])){
    $firstName=$_POST['first_name'];
    $lastName=$_POST['last_name'];
    $email=$_POST['email'];
    $phoneNumber=$_POST['phone_number'];
    $password=$_POST['password'];
    $repeatPassword=$_POST['repeat_password'];

    if($firstName !="" && $lastName !="" && $email !="" && $phoneNumber !="" && $password !="" && $repeatPassword !=""){
        if(strlen($password) >=6 && strlen($repeatPassword)>= 6){
            if($password === $repeatPassword){
                $sql = "INSERT INTO user (first_name, last_name, email, phone_number,password)
                VALUES('$firstName','$lastName','$email','$phoneNumber','$password')";
                if(mysqli_query($conn,$sql)){
                    echo "<script>alert('Data Inserted successfully');window.location.href='registration_confirmation.php?first_name=$firstName&last_name=$lastName&email=$email&phone_number=$phoneNumber';</script>";

                }else{
                    echo mysqli_error($conn);
                }
            }else{
                echo"<script>alert('Passwords do not match');window.location.href='signup.php';</script>";
            }
        }else{
            echo"<script>alert('Passwords must be atleast 6 characters long');window.location.href='signup.php';</script>";

        }
    }else{
        echo"<script>alert('Values cannot be null');window.location.href='signup.php';</script>";

    }
}
?> 