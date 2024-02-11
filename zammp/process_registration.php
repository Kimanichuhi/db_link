<?php
$first_name = $_POST['first_name']
$last_name = $_POST['last_name']
$gender = $_POST['gender']
$email = $_POST['email']
$mobile = $_POST['mobile']
$password = $_POST['password']

//database connection
$conn =new mysqli('localhost','root','','registration');
if('$conn->connect_error'){
    die('connection failed:'$conn->connect_errror);
}else{
    //corrected SQL querry and binding parameters
    $stmt = $conn->prepare("INSERT INTO entry_details(first_name,last_name,gender,email,mobile,password)VALUES(?,?,?,?,?,?");
    $stmt->bind_param("ssssss",$first_name,$last_name,$gender,$)

}







