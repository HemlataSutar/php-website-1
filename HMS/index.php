<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky-City World</title>

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div id="navbar">
        <?php
        if(isset($_COOKIE['email_signed_in'])) {
            echo '<a href="./logout.php">logout</a>';
        }
        else{

            echo '<a href="./signup.php">signup</a>';
            echo '<a href="./login.php">login</a>';
        }
        ?>

    </div>
    <div id="back">
        <div id="banner">
            <img src="css/logo.png" alt="logo" id="logo">
        </div>

        <div id="nav">
            <a href="#msg">Home</a>
            <a href="#aboutus">About Us</a>
            <a href="#rooms">Rooms</a>
            <a href="./cart.php">Bookings</a>
            <a href="./contactus.php">Contact us</a>
        </div>

        <div id="msg" class="header">
            <h1 class="big">Book your stay.</h1>
            <h4>Hotel Sky-City World provides comfortable stay for you. Enjoy the luxury stay with beautiful scenaries.
            </h4>
        </div>
        <hr width="50%">
    </div>
    <div id="aboutus">
        <h1>About Us</h1>
        <div id="portfolio">
            <img src="css/discover_1.jpg" width="300px" height="300px" alt="">
            <img src="css/discover_2.jpg" width="300px" height="300px" alt="">
            <img src="css/discover_3.jpg" width="300px" height="300px" alt="">
        </div>
        <h4>Experience the charm, well-suited for business and leisure travel. Explore open, relaxed spaces at our hotel.Our hotel swimming pool with its lush surroundings, stylish and comfortable sun beds, lounge area, and an open-air garden, provides the perfect retreat from a busy day in the city.Stay fit while away from home at our cutting-edge fitness centre, complimentary for in-house guests, and equipped with the latest in cardio and strength machines, resistance bands, balls and stretching mats.Our rooms and suites are thoughtfully designed to delight you and make your stay a memorable experience.</h4>
    </div>
    <hr width="50%" />
    <div id="rooms">
        <h1>Rooms</h1>
        <div class="left-cont">
            <img src="css/room_1.jpg" alt="">
            <div class="left-cont-text">
                <h1>Single Room</h1>
                <p>Hotel Sky-City provides like free Internet access, free parking, On-site Restaurant, Room services, Fitness Centre, Pool, Digital check-in, Digital Key, Beautiful Huge Balcony.This Room includes Comfortable Double Bed with beautiful Huge balcony with mesmerizing scenaries.</p>
                <ul>
                    <li>Comfortable Double Bed</li>
                    <li>Huge Beautiful Balcony</li>
                    <li>Free Room Services</li>
               </ul>
               <div class="price">
                <p>RS-3000/-</p><br><br><br><br>
               </div>
                </a><br><br><br><br>
               </div> 
            </div>
        </div>
        <div class="right-cont">
            <div class="left-cont-text">
            <h1>Double Room</h1>
                <p>Hotel Sky-City provides like free Internet access, free parking, On-site Restaurant, Room services, Fitness Centre, Pool, Digital check-in, Digital Key, Beautiful Huge Balcony.This Room includes Comfortable Double Bed with beautiful Huge balcony with mesmerizing scenaries.</p>
                <ul>
                    <li>Comfortable Double Bed</li>
                    <li>Huge Beautiful Balcony</li>
                    <li>Free Room Services</li>
               </ul>
               <div class="price">
                <p>RS-4000/-</p><br><br><br><br>
               </div>
            </div>
            <img src="css/room_2.jpg" alt="">
        </div>
        <div class="left-cont">
            <img src="css/room_3.jpg" alt="">
            <div class="left-cont-text">
            <h1>Luxury Room</h1>
                <p>Hotel Sky-City provides like free Internet access, free parking, On-site Restaurant, Room services, Fitness Centre, Pool, Digital check-in, Digital Key, Beautiful Huge Balcony.This Room includes Comfortable Double Bed with beautiful Huge balcony with mesmerizing scenaries.</p>
                <ul>
                    <li>Comfortable Double Bed</li>
                    <li>Huge Beautiful Balcony</li>
                    <li>Free Room Services</li>
               </ul>
               <div class="price">
                <p>RS-5000/-</p><br><br><br><br>
               </div>
            </div>
        </div>
        <div class="right-cont">
            <div class="left-cont-text">
            <h1>Business Room</h1>
                <p>Hotel Sky-City provides like free Internet access, free parking, On-site Restaurant, Room services, Fitness Centre, Pool, Digital check-in, Digital Key, Beautiful Huge Balcony.This Room includes Comfortable Double Bed with beautiful Huge balcony with mesmerizing scenaries.</p>
                <ul>
                    <li>Comfortable Single Bed</li>
                    <li>Living Room</li>
                    <li>Huge Beautiful Balcony</li>
                    <li>Free Room Services</li>
               </ul>
               <div class="price">
                <p>RS-3000/-</p><br><br><br><br>
               </div>
            </div>
            <img src="css\room_4.jpg" alt="">
        </div>
    </div>

    <div id="testimonial">
        <div class="testimonial">
        <h1>Reviews</h1>
        </div>
        <div class="scroll">
            <div class="scroll_con">
            <!-- 1st comments -->
                <div class="testimonial_msg">
                    <p>"Me and my fiancée had a wonderful stay . The best staff . Everyone made us comfortable. They went
                    extra mile to make our stay best.They made us very comfortable. Housekeeping excellent services.
                    Duty manger very helpful when we checked out .Hotel is near highway. Excellent food. Overall very
                    good experience."</p>
                </div>

                <div class="testimonial_name">Vilas Kamble</div><br><br>
            </div>
        <div class="scroll_con">
            <!-- 2nd comments -->
            <div class="testimonial_msg">
                <p>"Stay was amazing. Staff was alway happy and ready to help. Pool area was beautiful. Rooms were very
                    clean. Rooms were having all tha amenities which were was necessary. My overall experience was quite
                    great and looking forward to stay there again!!!"</p>
            </div>

            <div class="testimonial_name">Niti shah</div><br><br>
        </div>
        <div class="scroll_con">
            <!-- 3rd comments -->
            <div class="testimonial_msg">
                <p>"Great experience with so big room as well as delicious food!! Very cool & claim place to stay .Hotel staff are very polite . Good for family & business stay .You must stay once there once you are in Pune to enjoy."</p>
            </div>
            <div class="testimonial_name">Dinesh Kumar</div>
        </div>
    </div>
</div>
<div class="details">
    <div>9876543210<br>1234567890</div>
    <div>sutarhemlata24@gmail.com<br>sushamakangude6@gmail.com</div>
</div>
</body>

</html>