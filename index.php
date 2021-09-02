
<?php
if(isset($_POST['sub'])){
    $name=$_POST['fullname'];
    $email=$_Post['email'];
    $phone=$_POST['number'];
    $foodtype=$_POST['foodname'];
$address=$_POST['address'];

    $to='umairahmed486950@gmail.com'; // Receiver Email ID, Replace with your email ID
    $header="Form:$name<$email>";
    $message="Name:$name \n\n mail:$email \n\n phone:$phone \n\n dish:$foodtype \n\n address:$address";

    if(mail($to,$subject,$message))
    {
        echo "Your order will place successfully!";
    }
    else{
        echo "Error";
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>servehub website </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>frozen food</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#speciality">speciality</a>
        <a href="#popular">popular</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#order">order</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Freezing Favourites</h3>
        <p>Welcome to Freezing Favorites, the premium brand of frozen foods in Pakistan. We offer ready-to-cook
             & partially cooked mouthwatering delicacies in Mutton, Beef & Chicken. Maintaining and delivering 
             the highest quality is paramount to us and the frozen foods produced by Freezing Favorites are 
             recognized for their superior quality. Every step of our operations is geared towards continued access
              to livestock resources, so carefully managing live stocks are vital to us!.
        </p>
        <a href="#order" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="images/background.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="images/um-1.jpg" alt="">
            <div class="content">
                <img src="" alt="">
                <h3>Chicken nuggets</h3>
                <p>A chicken nugget is a food product consisting of a small piece of deboned chicken meat that
                     is breaded or battered, then deep-fried or baked.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/samosa.jpg" alt="">
            <div class="content">
                <img src="" alt="">
                <h3>Chicken samosa</h3>
                <p>Samosa (samoosa) is a small, triangular pastry of sorts fried until golden brown and crispy.
                     The pastry is filled with a curried filling spiced with fragrant Indian spices</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/chicken.seekh.jpg" alt="">
            <div class="content">
                <img src="" alt="">
                <h3>Chicken seekh kabab</h3>
                <p> Chicken Seekh Kabab is made with minced chicken also known as Chicken keema that's
                     seasoned with spices, a binding agent deep fried or even grilled.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/finger.jpg" alt="">
            <div class="content">
                <img src="" alt="">
                <h3>Finger Fish</h3>
                <p>Fish fingers (British English) or fish sticks (American English) are a processed food made
                     using a whitefish,haddock or pollock, which has been battered or
                      breaded.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/roll.jpg" alt="">
            <div class="content">
                <img src="" alt="">
                <h3>Vegetable Roll</h3>
                <p>Spring rolls are filled with minced vegetables, seafood, poultry, or meat, folded into 
                    a food wrapper made from dough  and is
                     then baked, deep fried, or steamed.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/paratha.jpg" alt="">
            <div class="content">
                <img src="" alt="">
                <h3>Plain Paratha</h3>
                <p>A paratha can be a healthy food. it is the way how we cook.Plain parathas are mainly made with whole
                     wheat flour that is kneaded using salt, oil, and water.</p>
            </div>
        </div>

    </div>

</section>

<!-- speciality section ends -->

<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="images/koffta.jpg" alt="">
            <h3>Chicken Kofta</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="images/patties.jpg" alt="">
            <h3>Burger Patties</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="images/shami.jpg" alt="">
            <h3>Shami kabab</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="images/balls.jpg" alt="">
            <h3>Chicken cheese balls</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="images/boneless.jpg" alt="">
            <h3>boneless chicken</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $5 - $20 </span>
            <img src="images/pop.jpg" alt="">
            <h3>Popcorn fish</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

    </div>

</section>

<!-- popular section ends -->

<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/ali.jpeg" alt="">
            <h3>Ali Ahmed</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="images/umair.jpeg" alt="">
            <h3>Muhammad Umair</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>Anam Malik</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">
        
        <div class="image">
            <img src="images/order-img.jpg" alt="">
        </div>

        <form action="" method="POST">

            <div class="inputBox">
                <input type="text" placeholder="name" name="fullname">
                <input type="email" placeholder="email" name="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number" name="number">
                <input type="text" placeholder="food name" name="foodname">
            </div>

            <textarea placeholder="address" name="address" id="" cols="30" rows="10"></textarea>

            <input type="submit" name="sub" value="order now" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit">Powered by <span>ServeHub  </span> | all rights reserved! </h1>

</section>

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>




















<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>