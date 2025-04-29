<?php include('sign-connection.php'); 


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    $query = "INSERT INTO contact_info(name, email, message) VALUES('$name', '$email', '$message')";
    mysqli_query($db, $query);

} 






// $query = "INSERT into contact_info(name,email,message) values('$name','$email','$message')";