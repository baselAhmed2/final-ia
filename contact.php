<?php include('contact_info.php');?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- link google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    <!-- link font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="css/contact.css">
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            <img src="./img/kemet logo.jpg" alt="logo">
            <h1>
                Kemet
            </h1>
        </div>

        <div class="list">
            <ul>
                <a href="home.php">
                    <li>
                        Home
                    </li>
                </a>



                <!-- <a href="contact.html">
                    <li>
                        Contact Us
                    </li>
                </a> -->




                <li>                     <a href="?logout=1">Logout</a>
                </li>
                <a href="#">
                    <li>
                        <i class="fa-solid fa-heart"></i>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </li>
                </a>

            </ul>
        </div>
    </nav>





    <div class="contact-container">
        <div class="image-section">
            <img src="./img/WhatsApp Image 2024-12-13 at 12.28.27 PM.jpeg" alt="Two models">
        </div>
        <div class="form-section">
            <h1>Contact Us</h1>
            <form action="#" method="post">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name">

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Your Email">

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your Message"></textarea>

                <button type="submit">Contact Us</button>
            </form>
            <div class="contact-info">
                <p><strong>Contact:</strong> kemeteg@gmail.com</p>
                <p><strong>Based in:</strong> Egypt, Cairo</p>
            </div>
        </div>
    </div>








    <!-- footer -->
    <footer class="site-footer">


        <div class="cont">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by Kemet
                    </p>
                </div>

                <hr style="color: #eee3c3;" />

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a class="twitter" href="https://x.com/?lang=en"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>