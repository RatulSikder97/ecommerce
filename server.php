<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dailyneed');


// REGISTER USER
if (isset($_POST['regBtn'])) {
  // receive all input values from the form
  $name =  mysqli_real_escape_string($db,$_POST['name']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $address = mysqli_real_escape_string($db,$_POST['address']);
  $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $password_1 = mysqli_real_escape_string($db,md5($_POST['password_1']));
  $password_2 = mysqli_real_escape_string($db,md5($_POST['password_2']));
  if($password_1 !== $password_2)
  {
  	echo "<script> alert('Passwords don't match. Enter Same Passwords.')</script>";
  }
  else{

  $insQuery = "INSERT INTO customer(name,email,address,phone,password_1,password_2) VALUES ('$name','$email','$address','$phone','$password_1','$password_2')";
  if(mysqli_query($db, $insQuery))
  {
    	
    header("Location:index.php");
  }
}

}

if(isset($_POST['loginBtn'])){

  $email =  mysqli_real_escape_string($db,$_POST['email']);
  $password_1 = mysqli_real_escape_string($db,$_POST['password']);

  $password = md5($password_1);
    $query = "SELECT * FROM customer WHERE email='$email' AND password_1='$password'";
    $results = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($results);
   
    
    if(mysqli_num_rows($results) == 1){
      
       $_SESSION["name"] =  $user["name"];
       header("Location:index.php");
      
    }
}



?>