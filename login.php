<?php 
include("sign-connection.php");

$login_error = "";

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db, $_POST['em']);
    $password = mysqli_real_escape_string($db, $_POST['pas']);
    
    $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $query);
    
    if($result && mysqli_num_rows($result) == 1){
        $_SESSION['name'] = $email;
        $_SESSION['success'] = "Welcome !";
        header("location:home.php");
        exit();
    } else {
        $login_error ="Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/signup.css">
    
    <style>
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            <img src="img/kemet logo.jpg" alt="logo">
            <h1>
                Kemet
            </h1>
        </div>

        <div class="list">
            <ul>

                <li>
                    <a href="contact.php">Contact Us</a>
                </li>


            </ul>
        </div>
    </nav>


    <div class="main">


        <div class="sign">
            <h1>Login</h1>
            
            <?php if(!empty($login_error)): ?>
                <div class="error-message"><?php echo $login_error; ?></div>
            <?php endif; ?>

            <form method='post' action='' class="form">
                <div>
                    <div>
                        <label for="email">Email</label>
                        <br>
                        <input type="email" id="email" name="em" required>
                    </div>

                    <div>
                        <label for="pass">Password</label>
                        <br>
                        <input type="password" id="pass" name="pas" required>
                        <br>
                    </div>

                    <input type="submit" value="login" name='login'>

                </div>
            </form>

            <div class="x">
                <p>Don't have an account ? <a href="signup.php" target="_blank">Sign up</a> </p>

            </div>
        </div>

    </div>

    <script>
    
    document.querySelector('form').addEventListener('submit', function(event) {
        var email = document.getElementById('email').value;
        var password = document.getElementById('pass').value;
        
        if(email === '' || password === '') {
            event.preventDefault();
            alert('Please fill in all fields.');
        }
    });
    </script>

</body>

</html>