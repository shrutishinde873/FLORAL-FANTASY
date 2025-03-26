<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>At Floral Fantasy, we believe that flowers are more than just gifts—they are emotions, memories, and moments wrapped in petals. Whether you're celebrating love, friendship, or a special occasion, we bring you the finest blooms, handpicked and arranged with care.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>At Floral Fantasy, we offer a wide selection of fresh, handpicked flowers for every occasion. From elegant bouquets to customized floral arrangements, we ensure top-quality blooms that bring joy and beauty to your special moments.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Floral Fantasy is an online flower boutique dedicated to spreading happiness through fresh and beautifully arranged flowers. Our mission is to make every occasion memorable with our carefully curated floral collections. With a passion for flowers and customer satisfaction, we aim to provide the best shopping experience for our customers.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-11.jpg" alt="">
            <p>Absolutely loved the flowers! They were fresh, beautifully arranged. Floral Fantasy made my anniversary extra special!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nidhi Manjrekar</h3>
        </div>

        <div class="box">
            <img src="images/pic-22.jpg" alt="">
            <p>Floral Fantasy has the best collection of flowers! The website is easy to navigate, and I found exactly what I was looking for.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Janhavi Rane</h3>
        </div>

        <div class="box">
            <img src="images/pic-33.jpg" alt="">
            <p>Floral Fantasy never disappoints! Their flowers always arrive in perfect condition. A great experience!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Siddhi Chavan</h3>
        </div>

        <div class="box">
            <img src="images/pic-43.jpg" alt="">
            <p>I love the variety of flowers available. The website makes it so easy to explore different floral options!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jai Rana</h3>
        </div>

        <div class="box">
            <img src="images/pic-44.jpg" alt="">
            <p>The flowers were vibrant and long-lasting. Truly impressed with the quality and presentation. Highly recommended!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shifa Khan</h3>
        </div>
        <div class="box">
            <img src="images/pic-55.jpg" alt="">
            <p>Floral Fantasy provides a fantastic floral shopping experience. The interface is easy to use, and the selection is impressive!.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Anjali Karbhari</h3>
        </div>

        <div class="box">
            <img src="images/pic-66.jpg" alt="">
            <p>I love how well-organized the website is! Finding the right flowers was simple, and the product descriptions were very helpful,and it truly enhances the shopping experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Vedant Ghare</h3>
        </div>
        
        <div class="box">
            <img src="images/pic-77.jpg" alt="">
            <p>A great place for flower lovers! The variety of flowers is impressive, and I had no trouble finding the perfect one. The website runs smoothly, and the colors and layout make browsing fun!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shubham Wagh</h3>
        </div>
        
        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Ordered flowers for my mom’s birthday, and she was beyond happy! The arrangement was elegant and beautiful. Thank you for making her day special!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>



    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>