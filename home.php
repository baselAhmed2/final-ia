<?php
include('sign-connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kemet</title>

  <!-- link google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />

  <!-- link font awesome icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />

  <!-- link css file -->
  <link rel="stylesheet" href="css/home.css" />
</head>

<body>
  <!-- navbar -->

  <nav class="navbar">
    <div class="logo">
      <img src="img/kemet logo.jpg" alt="logo" />
      <h1>Kemet</h1>
    </div>

    <div class="list">
      <ul>
        <!-- <li>
                    <a href="home.php">Home</a>
                </li> -->




        <li>
          <a href="/IA-project/Kemet/Contact.php">Contact Us</a>
        </li>

        <!-- <li>
                    <a href="login.php">login</a>
                </li> -->

        <li> <a href="?logout=1">Logout</a>
        </li>
        <li>
          <a href="#"><i class="fa-solid fa-heart"></i></a>
        </li>

        <li>
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>

      </ul>
    </div>
  </nav>
  <section class="landing">
    <div class="text">
      <h1>Welcome To Kemet</h1>
      <h2>"From the land of gold and sand, elegance crafted by hand."</h2>
    </div>
  </section>


  <h1>our products</h1>
  <div class="section">
    <table  style = 'border="2px"'>
      <tr>
        <th>ID</th>
        <th>productname</th>
        <th>color</th>
        <th>price</th>
        <th>image</th>
      </tr>

      <?php
      include "sign-connection.php";
      $record = mysqli_query($db, "select * from product");
      while ($data = mysqli_fetch_array($record)) {
      ?>
        <tr>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['productname']; ?></td>
          <td><?php echo $data['Category']; ?></td>
          <td><?php echo $data['price']; ?></td>
          <td><img src="data:image/jpeg;base64,<?php echo base64_encode($data['image']); ?>" alt="" height="50px" width="50px"></td>
          <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
          <td><a href=" delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>

        </tr>

      <?php
      }
      ?>
    </table>
  </div>
  <!-- footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="footer">
          <p class="copyright-text">
            Copyright &copy; 2025 All Rights Reserved by Kemet
          </p>
        </div>

        <hr style="color: #eee3c3" />

        <div class="footer">
          <ul class="social-icons">
            <li>
              <a
                class="facebook"
                href="https://www.facebook.com/"
                target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a class="twitter" href="https://x.com/?lang=en"><i class="fa-brands fa-x-twitter"></i></a>
            </li>
            <li>
              <a class="instagram" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a class="linkedin" href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>