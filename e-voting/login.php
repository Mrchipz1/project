<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'mailing.php';
require 'hashing.php';
require_once('connect.php');
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections

function clean_input($in) {
    // $res = mysqli_escape_string($in);
    $res = stripslashes($in);
    $res = trim($res);
    return $res;
}

$db = new dbConnect();
$conn = $db->connect();

// $email = clean($_POST['email']);
// $result = $conn->query("SELECT * FROM users WHERE email='$email'");
if(isset($_POST['email']) && isset($_POST['password'])) {
    unset($_SESSION['message']);
    unset($_SESSION['messages']);
    // clean input\
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);
    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE (email=:email)"); 
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        if ( $stmt->rowCount() > 0 ) {
            if(passwordHash::check_password($res['password'], $password)){
                $_SESSION['user_id'] = $res['_id'];
                $_SESSION['email'] = $res['email'];
                header('location:cat.php');
            }else{
                $_SESSION['message'] = "Wrong Password";
                $_SESSION['messageType'] = "alert alert-danger";
                header('location:error.php');
            }
        } else {
            $_SESSION['message'] = "Please Register First";
            $_SESSION['messageType'] = "alert alert-danger";
            header('location:error.php');
        }
    } catch (PDOException $ex) {
        $_SESSION['message'] = $ex;
//         header("location: error.php");
        header('location:error.php');
    }
    
}else{
    $_SESSION['message'] = "unexpected post type";
    header('location:error.php');
}


// i had to rewrite it cos i needed to use the connect class 
// if ( $result->num_rows == 0 ){ // User doesn't exist
//     $_SESSION['message'] = "User with that email doesn't exist!";
//     header("location: error.php");
// }

// else { // User exists
//     $user = $result->fetch_assoc();

//     if ( password_verify($_POST['password'], $user['password']) ) {
        
//         $_SESSION['email'] = $user['email'];
//         $_SESSION['first_name'] = $user['first_name'];
//         $_SESSION['last_name'] = $user['last_name'];
//         $_SESSION['active'] = $user['active'];
        
//         // This is how we'll know the user is logged in
//         $_SESSION['logged_in'] = true;

//         header("location: cat.php");
//     }
//     else {
//         $_SESSION['message'] = "You have entered wrong password, try again!";
//         header("location: error.php");
//     }
// }
