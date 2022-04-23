<?php
    $conn = mysqli_connect('sql3.freemysqlhosting.net', 'sql3487600', '', 'sql3487600') or die('connection failed');

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

        if($insert){
            $message[] = 'appointment made successfully!';
        }else{
            $message[] = 'appointment failed';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dentist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Dental <span>Care</span></a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>
                <a href="#contact" class="link-btn">Make Appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nulla magni inventore maxime quidem iusto.</p>
                    <a href="#contact" class="link-btn">Make Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" alt="" class="w-100 mb-5 mb-md-0">
                </div>
                <div class="col-md-6 content">
                    <span>About Us</span>
                    <h3>True Healthcare for Your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nobis quis minus ducimus sunt aut optio incidunt reiciendis voluptatibus nesciunt quisquam, nemo harum numquam officia, fugiat deserunt obcaecati eos quasi?</p>
                    <a href="#contact" class="link-btn">Make Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <h1 class="heading">Our Services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Alignment Specialist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Oral hygiene experts</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            </div>
            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Root canal specialist</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Live dental advisory</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </section>
    <section class="process">
        <h1 class="heading">Work Process</h1>
            <div class="box-container container">
                <div class="box">
                    <img src="images/process-1.png" alt="">
                    <h3>Cosmetic Dentistry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, distinctio.</p>
                </div>
                <div class="box">
                    <img src="images/process-2.png" alt="">
                    <h3>Pediatric Dentistry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nesciunt!</p>
                </div>
                <div class="box">
                    <img src="images/process-3.png" alt="">
                    <h3>Dental Implants</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, voluptatum.</p>
                </div>
            </div>
    </section>
    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied Clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non vero nam neque, sapiente doloribus eaque similique deleniti sequi dolorem numquam dignissimos labore. Magnam nobis placeat dicta fuga, voluptates et rem.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Deo</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non vero nam neque, sapiente doloribus eaque similique deleniti sequi dolorem numquam dignissimos labore. Magnam nobis placeat dicta fuga, voluptates et rem.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jane Deo</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non vero nam neque, sapiente doloribus eaque similique deleniti sequi dolorem numquam dignissimos labore. Magnam nobis placeat dicta fuga, voluptates et rem.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Deo</h3>
                <span>Satisfied Client</span>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?>
            <span>Your Name:</span>
            <input type="text" name="name" placeholder="Enter your name" class="box" required>
            <span>Your Email:</span>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <span>Your Number:</span>
            <input type="number" name="number" placeholder="Enter your number" class="box" required>\
            <span>Appointment Date:</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>
    </section>
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>+2349129192101</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Address</h3>
                <p>Lagos, Nigeria</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Address</h3>
                <p>adeoluwaagbakosi@gmail.com</p>
            </div>
        </div>
        <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Adeoluwa Agbakosi</span> </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>
