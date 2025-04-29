<?php
if(!isset($_SESSION)){
    session_start();
}
$db=mysqli_connect('localhost','root','','project-ia');
$error=array();


if(isset($_POST['signup'])){

    // mysqli_real_escape_string make sure  that the string didnot lose any letter
    $username=mysqli_real_escape_string($db,$_POST['name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $pass=mysqli_real_escape_string($db,$_POST['password']);
    $pass2=mysqli_real_escape_string($db,$_POST['confirm-Password']);

    if(empty($username)){
        
        array_push($error,"username is required");
    }

    if(empty($email)){
            
        array_push($error,"Email is required");
    }
    if(empty($pass)){
        
        array_push($error,"password is required");
    }

    if(($pass != $pass2)){
        array_push($error,"passwords do not match");
    }


    if(count($error)==0){
    

        $sql="INSERT INTO signup (name,email,password) values('$username','$email','$pass')";
        mysqli_query($db,$sql);



}
}

///login
if(isset($_POST['login'])){

    $email= mysqli_real_escape_string($db, $_POST['em']);
    $password= mysqli_real_escape_string($db, $_POST['pas']);
}

if(empty($email)){
    array_push($error, 'PLEASE ENTER YOUR EMAIL');
}

if(empty($password)){
    array_push($error, 'PLEASE ENTER THE PASSWORD');
}

if(count($error)== 0){

  $query = "SELECT * FROM signup WHERE email= '$email' AND password= '$password'";
$result = mysqli_query($db, $query);

if ($result) {
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['name'] = $email;
        $_SESSION['success'] = "Welcome !";
        
        header("location:home.php");
    } else {
        array_push($error, "Wrong email or password");
    }
} 

}
// }

//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('Location: login.php');
    exit();
}















?>