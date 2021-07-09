<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "college";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $pno = $_POST['pno'];
    $email = $_POST['email'];
    $concern = $_POST['concern'];


    $sql = "INSERT INTO `form` ( `name`, `email`, `pno`, `concern`) VALUES ( '$name', '$email', '$pno', '$concern');";
    $result = mysqli_query($conn, $sql);

    header("location: ./contact.php ");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduford | No. 1 University in the World </title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/f2a878148c.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header -->
    <header class="sub-header">
        <!-- Navigation Bar -->
        <nav>
            <a href="../index.html"><img src="../img/logo.png" alt=""></a>
            <div class="nav-links" id="nav-links">
                <ul>
                    <i class="fas fa-times" id="close"></i>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="./courses.html">Course</a></li>
                    <li><a href="./blog.php">Blog</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" id="open"></i>
        </nav>
        <div class="text-box">
            <h1>Contact Us</h1>
        </div>
    </header>

    <!-- ----------------- Location Us -------------------------- -->

    <section class="location">
        <h1 class="sub-heading">Our Location</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124440.3988193029!2d74.78202287722546!3d12.922982868342707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a4c37bf488f%3A0x827bbc7a74fcfe64!2sMangalore%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1625654188012!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <!-- ------------------- Contact Information -->

    <section class="contact-info">
        <h1 class="sub-heading">Contact Info</h1>
        <div class="item">
            <h2>Phone Number: </h2>
            <p>9103918141</p>
        </div>
        <div class="item">
            <h2>Email Address: </h2>
            <p>eduford@edu.com</p>
        </div>
        <div class="item">
            <h2>Adress: </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, animi.</p>
        </div>
    </section>
    
    <!-- ----------------------- Contact Form --------------------- -->

    <section class="contact-form">
        <h1 class="sub-heading">Contact Form</h1>
        <p class="sub-sub-heading">You can contact us via our form and we will respond your query within 24 hours.</p>

        <form class="comment-section" method="POST" action="./contact.php">

            <label for="name">Name</label>
            <input class="input" type="text" placeholder="Enter your Name" name="name" id="name" required>
    
            <label for="pno">Phone Number</label>
            <input class="input" type="number" name="pno" minlength="10" id="pno" placeholder="Enter your Phone Number " required>

            <label for="email">Email Address</label>
            <input class="input" type="email" name="email" id="email" placeholder="Enter your Email Id" required>

            <label for="concern">Elaborate your Concern</label>
            <textarea name="concern" id="concern" cols="30" rows="10" class="textarea" placeholder="Elaborate your Concern"></textarea>

            <input type="submit" class="submit btn btn-primary" value="Submit">

        </form>

    </section>

    <!-- ------------------------------ Footer ---------------------------------- -->

    <footer class="footer">

        <div class="socials">
            <h1 class="sub-heading">Socials</h1>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-tiktok"></i>
            </div>

        </div>
        <div class="copyright">
            Copyright &copy; Eduford Education 1997-2021 | All rights reserved
        </div>
    </footer>

    <script src="../js/app.js"></script>
</body>

</html>