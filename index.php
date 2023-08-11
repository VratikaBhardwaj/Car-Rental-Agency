<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Car Rental Agency</title>
</head> <!--  -->

<body>
    <!-- Header -->
    <header>
        <a href="#" class="logo"><img src="images/car.png" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Reviews</a></li>
        </ul>
        <div class="header-btn">
            <a href="registration.php" class="sign-in">Login Here</a>
            <a href="logout.php" class="Logout">Logout</a>
        </div>

    </header>
    <!-- home -->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> to <br>rent a car</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit <br> Repellendus sunt inventore .</p>
            <div class="app-stores">
                <img src="images/ios.png" alt="">
                <img src="images/play.png" alt="">
            </div>
        </div>

        <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form>
        </div>
    </section>

    <!-- ride -->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How Its Work</span>
            <h1>Rent in 3 easy steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class="bx bxs-map"></i>
                <h2>Choose a Location</h2>
                <p>Lorem ipsum dolor sit amet consectetur facilis! Dicta molestias molestiae possimus aperiam,
                    quas alias distinctio facere voluptas libero, suscipit iure quasi magni?</p>
            </div>

            <div class="box">
                <i class="bx bxs-calendar-check"></i>
                <h2>Pick-up Date</h2>
                <p>Lorem ipsum dolor sit amet consectetur facilis! Dicta molestias molestiae possimus aperiam,
                    quas alias distinctio facere voluptas libero, suscipit iure quasi magni?</p>
            </div>

            <div class="box">
                <i class="bx bxs-calendar-star"></i>
                <h2>Book a Car</h2>
                <p>Lorem ipsum dolor sit amet consectetur facilis! Dicta molestias molestiae possimus aperiam,
                    quas alias distinctio facere voluptas libero, suscipit iure quasi magni?</p>
            </div>

        </div>
    </section>

    <!-- services -->
    <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Explore Out Top Deals <br>From Top Rated Dealers</h1>
        </div>

        <div class="services-container">

            <div class="box">
                <div class="box-img">
                    <img src="images/car3.jpg" alt="">
                </div>
                <h3>Honda Civics</h3>
                <h6>RJ14 9288</h6>
                <h6>4 seater</h6>
                <h5>₹567 <span>/day</span></h5>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/car4.jpg" alt="">
                </div>
                <h3>Honda Civics</h3>
                <h6>RJ14 9288</h6>
                <h6>4 seater</h6>
                <h5>₹567 <span>/day</span></h5>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/car5.jpg" alt="">
                </div>
                <h3>Honda Civics</h3>
                <h6>RJ14 9288</h6>
                <h6>4 seater</h6>
                <h5>₹567 <span>/day</span></h5>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/car5.jpg" alt="">
                </div>
                <h3>Honda Civics</h3>
                <h6>RJ14 9288</h6>
                <h6>4 seater</h6>
                <h5>₹567 <span>/day</span></h5>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/car3.jpg" alt="">
                </div>
                <h3>Honda Civics</h3>
                <h6>RJ14 9288</h6>
                <h6>4 seater</h6>
                <h5>₹567 <span>/day</span></h5>
                <a href="#" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/car4.jpg" alt="">
                </div>
                <h3>Honda Civics</h3>
                <h6>RJ14 9288</h6>
                <h6>4 seater</h6>
                <h5>₹567 <span>/day</span></h5>
                <a href="#" class="btn">Rent Now</a>
            </div>

        </div>
    </section>

    <!-- about -->
    <div class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="images/car6.jpg" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio nihil molestias itaque cumque quasi,
                    iste cum provident nobis at, exercitationem quos mollitia ipsa! Veniam accusantium, voluptas labori!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci saepe quisquam inventore dicta quasi
                    beatae! Dolorem rem adipisci quisquam. Iusto magni autem architecto quod praesentium obcaecati molestias
                    dolore voluptas beatae!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </div>

    <!-- Reviews -->
    <section class="Reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>What Our Customers Says</h1>
        </div>
        <div class="reviews-container">

            <div class="box">
                <div class="rev-img">
                    <img src="images/car.png" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat labore aliquam voluptatibus quae!
                    Doloremque voluptatibus tempore corporis, repellendus minima voluptates provident, suscipit atque illum
                    dignissimos, ducimus mollitia placeat vero.</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="images/car.png" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat labore aliquam voluptatibus quae!
                    Doloremque voluptatibus tempore corporis, repellendus minima voluptates provident, suscipit atque illum
                    dignissimos, ducimus mollitia placeat vero.</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="images/car.png" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat labore aliquam voluptatibus quae!
                    Doloremque voluptatibus tempore corporis, repellendus minima voluptates provident, suscipit atque illum
                    dignissimos, ducimus mollitia placeat vero.</p>
            </div>

        </div>
    </section>

    <!-- newsletter -->
    <section class="newsletter">
        <h2>Subscribe to Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter your Email">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>

    <!-- copyright -->
    <div class="copyright">
        <p>&#169; Car Rental Agency All Right Reserved</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
    </div>

    <!-- scroll reveal -->


    <!-- script -->
    <script src="main.js"></script>
</body>

</html>
