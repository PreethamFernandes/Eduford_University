<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "college";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `comment` (`comment_id`, `comment_name`, `comment_content`) VALUES ('1', '$name', '$comment')";
    $result = mysqli_query($conn, $sql);

    // header("location: ./blog.php ");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduford | No. 1 University in the World </title>
    <link rel="stylesheet" href="../css/blog.css">
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
            <h1>Blog</h1>
        </div>
    </header>

    <!-------------------------------------------- Blog Content ---------------------------------------------- -->

    <h1 class="sub-heading">BLOG POST</h1>
    <div class="blog">
        <div class="blog-content">
            <img src="../img/certificate.jpg" alt="">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis rerum optio eveniet quae quam
                tempore est quia a at nulla? Non, facilis pariatur tempora ullam corrupti maxime nisi, iure corporis
                vero dolores provident commodi? Unde, quia voluptate explicabo eveniet saepe illum veritatis quas harum
                dolorum, voluptatum, debitis soluta sapiente ipsam accusamus vitae enim provident molestias aperiam
                similique et atque magnam?
                <br> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corrupti, unde necessitatibus enim
                consequuntur laboriosam totam aliquam expedita facere architecto? Praesentium placeat vitae impedit
                illum ratione excepturi delectus aspernatur saepe dolores molestias, expedita minus accusamus unde, nemo
                aliquam totam porro perferendis facilis temporibus! Blanditiis dolore voluptatum ipsum voluptas itaque
                non earum voluptates similique nobis nostrum officiis voluptate quis officia, placeat illum autem nisi
                deserunt saepe quasi optio soluta, minima corrupti? Reprehenderit expedita, sint maiores suscipit quia,
                rem eveniet, officiis ipsam eaque necessitatibus placeat accusantium perspiciatis modi optio! Cum non
                maiores nesciunt? Itaque ut, placeat labore, amet earum quo magni illum, veritatis exercitationem
                possimus cum repellendus recusandae totam et libero distinctio perferendis rerum consequuntur soluta sit
                voluptatibus! Molestiae corrupti a exercitationem qui at nam repudiandae in ea magnam incidunt. At,
                quisquam!
                <br> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquid assumenda ullam, officiis
                provident hic, amet officia illum incidunt modi minus voluptate excepturi nobis quia. Molestias
                necessitatibus porro fugit vel voluptatem? Commodi, fugiat quae hic provident unde perferendis adipisci
                molestias nemo placeat eligendi repellat eum laboriosam sit, neque autem veritatis eaque dolorum
                deserunt architecto cupiditate enim officiis vitae praesentium consequatur. Aspernatur quaerat velit
                atque harum iusto rerum deleniti saepe aut dolor quam minima explicabo nobis animi asperiores ad
                veritatis, magni cumque ab quod omnis. Delectus sapiente obcaecati culpa sint nulla modi eaque nihil
                quibusdam, similique quae libero pariatur possimus vero!
                <br> <br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto aspernatur at ullam molestiae ea
                est! Temporibus repellendus soluta voluptatum qui molestias a ipsa distinctio officiis eum eaque veniam,
                sapiente hic voluptates repellat velit cupiditate vitae quo magni dolores obcaecati quae fugit
                reiciendis nostrum! Dolore, hic quam. Iusto quo, cum assumenda voluptas necessitatibus deserunt
                accusantium laudantium esse asperiores illum praesentium dolorum voluptatibus repudiandae molestias
                quaerat dolore saepe. Beatae magnam ad quasi. Cupiditate consequuntur, animi, veritatis pariatur sequi
                expedita ea doloribus neque eveniet incidunt nam ducimus saepe beatae quod aut, amet eos excepturi
                corrupti sed rem? Atque iure nihil magnam aspernatur minima itaque velit voluptatibus praesentium
                impedit quam esse accusamus libero aperiam, qui, dignissimos sint repudiandae magni iusto? Minus ut
                quaerat qui autem. Voluptatum officiis fugit corporis repudiandae dolorum, porro labore pariatur eos
                fuga. Molestiae officiis sunt ipsam exercitationem? Earum, neque ullam?
                <br> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis et hic quisquam vel totam aspernatur
                accusamus repellat sunt vero eius molestias, laboriosam dolore corrupti? Quia corrupti commodi iure,
                nostrum in magnam adipisci minus. Voluptates et, expedita nihil maiores omnis nobis magni nisi.
                Necessitatibus possimus praesentium asperiores at. Vitae quos quae animi ab porro assumenda
                reprehenderit cupiditate dolorem. Similique, praesentium. Quo perferendis aut eligendi quae. Alias
                impedit consequuntur repudiandae laborum temporibus iste optio unde eaque amet. Consectetur, non
                laudantium accusantium esse aliquid corrupti quam dolor?
            </p>
        </div>

        <div class="blog-cat">
            <div class="head">Post Categories</div>

            <div class="item">
                <div class="name">Web Development</div>
                <div class="no">12</div>
            </div>
            <div class="item">
                <div class="name">Android Development</div>
                <div class="no">19</div>
            </div>
            <div class="item">
                <div class="name"> Blockchain</div>
                <div class="no">9</div>
            </div>
            <div class="item">
                <div class="name">Cloud Computing</div>
                <div class="no">16</div>
            </div>
            <div class="item">
                <div class="name">Graphic Desing</div>
                <div class="no">41</div>
            </div>
            <div class="item">
                <div class="name">Logo Design</div>
                <div class="no">24</div>
            </div>
            <div class="item">
                <div class="name">UI/UX Design</div>
                <div class="no">6</div>
            </div>
            <div class="item">
                <div class="name">SEO</div>
                <div class="no">14</div>
            </div>

        </div>
    </div>

    <!-- ---------------------- Commemt --------------------------------- -->

    <div class="comment">
        <h1>Comment</h1>
        <form action="./blog.php" method="POST" class="comment-section">
            <label for="name">Name</label>
            <input class="input" type="text" placeholder="Enter your Name" name="name" id="name">

            <label for="comment">Comment</label>
            <textarea class="input" type="text" name="comment" id="comment" placeholder="Enter your Comment"> </textarea>

            <input type="submit" class="submit btn btn-primary " value="Submit">
        </form>
    </div>


    <!-- -------------------------------- Add comment --------------------------------- -->


    <div class="add-comment">
        <h1>All Comments</h1>

        <?php
        $sql = "SELECT * FROM `comment`";
        $result = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($result);

        if ($numrows == 0) {
            echo '<div class="no-comment">
                <h1>No Comments Yet!</h1>
                <p>Be the first one to comment!</p>
            </div>
        ';
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="item">
                        <img src="../img/user-d.png" alt="">
                        <div class="item-details">
                            <h3>' . $row['comment_name'] . '</h3>
                            <p>' . $row['comment_content'] . '</p>
                        </div>
                </div>';
            }
        }

        // 

        ?>

    </div>







    <!-- ------------------------------ Footer ---------------------------------- -->

    <footer class="footer">

        <div class="socials">
            <h2 class="sub-heading">Socials</h2>
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