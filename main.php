<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodielicious</title>
    <link rel="shortcut icon" href="images/diet.png" type="image/x-icon">
    <!-- Adding Style -->
    <link rel="stylesheet" href="style1.css">
    <!-- Adding CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loader">
            <i class="fa-solid fa-spinner"></i>
            <h2>Loading<span class="dots"></span></h2>
        </div>
    </div>
    
    <!-- =======Navigation Bar======= -->
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-utensils"></i> Foodielicious </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="searchBox">
            <label for="searchBox" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-share" id="theme-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
            <nav class="user-navbar" id="user-navbar">
                <a href="logout.php">Logout</a>
            </nav>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#packages">Packages</a>
            <a href="#pricing">Pricing</a>
            <a href="#blogs">Blogs</a>
            <a href="#reviews">Review</a>
            <a href="#contact">Contact</a>
        </nav>

    </header>

    <!-- =======Home Section======= -->
    <section class="home" id="home">
        <div class="image">
            <!-- back image  -->
            <img src="images/home-img.svg" alt="">
        </div>
        <!-- content  -->
        <div class="content">
            <h3>Welcome To The Best Restaurant in the town</h3>
            <p>Join us at Foodielicious and discover the perfect blend of exquisite cuisine, exceptional service, and a welcoming ambiance. We look forward to serving you and making every visit a delightful and unforgettable occasion.</p>
            <a href="" class="btn">Explore Now</a>
        </div>
    </section>

    <hr style="border: none; border-top: 1px solid #ccc; margin: 20px auto; width:90%">

    <!-- =======Order Form Section======= -->
    <section class="form-container">
        <h3 class="heading">Book a <span>Table</span></h3>
        <form action="book_table.php" method="POST">

            <div class="inputBox">
                <span>Booking ID</span>
                <input type="text" name="bookingid" placeholder="Search places" required>
            </div>

            <div class="inputBox">
                <span>When</span>
                <input type="date" name="date" required>
            </div>

            <div class="inputBox">
                <span>Person</span>
                <input type="number" name="persons" required>
            </div>

            <div class="inputBox">
                <span>Time</span>
                <input type="time" name="time" required>
            </div>

            <div class="inputBox">
                <input type="submit" value="Book now" class="btn">
            </div>

        </form>
    </section>

    <section class="form-container">
        <h3 class="heading">Cancel a <span>Booking</span></h3>
        <form action="cancel_booking.php" method="POST">
            <div class="inputBox">
                <span>Booking ID</span>
                <input type="text" name="booking_id" placeholder="Enter booking ID" required>
            </div>

            <div class="inputBox">
                <span>Cancel Booking</span>
                <input type="submit" value="Cancel booking" class="btn cancel-btn">
            </div>
        </form>
    </section>


    <hr style="border: none; border-top: 1px solid #ccc; margin: 20px auto; width:90%">

    <!-- =======Order Form Section======= -->
    <section class="packages" id="packages">
        <h3 class="heading">Our Top <span>Menu</span></h3>

        <p>The discount ends in <span id="demo" style="color: gold;"></span></p>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/Chicken Burger.jpg" alt="">
                    <h4><i class="fas fa-utensils"></i>Chicken Burger with Chips</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹170.99 <span>₹250.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Chicken Biryani.jpg" alt="">
                    <h4><i class="fas fa-utensils"></i>Chicken Biryani</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹120.99 <span>₹160.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Chicken Tikka.jpg" alt="">
                    <h4><i class="fas fa-utensils"></i>Chicken Tikka</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹200.99 <span>₹270.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Mexican Grilled Chicken.jpg" alt="">
                    <h4><i class="fas fa-utensils"></i>Mexican Grilled Chicken</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹230.99 <span>₹350.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Paneer Tikka.avif" alt="">
                    <h4><i class="fas fa-utensils"></i>Paneer Tikka</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹150.99 <span>₹230.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Veg Biryani.jpg" alt="">
                    <h4><i class="fas fa-utensils"></i>Veg Biryani</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹100.99 <span>₹130.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Mushroom Tikka.jpeg" alt="">
                    <h4><i class="fas fa-utensils"></i>Mushroom Tikka</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹190.99 <span>₹250.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Paneer Chowmein.webp" alt="">
                    <h4><i class="fas fa-utensils"></i>Paneer Chowmein</h4>
                </div>
                <div class="content">
                    <div class="price">
                        ₹90.99 <span>₹140.99</span>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat molestiae eum explicabo eos debitis aperiam temporibus numquam eveniet repudiandae. Minima.</p>
                    <a href="" class="btn">Order Now</a>
                </div>
            </div>
        </div>

        <div id="btn">
            <button class="load-more">Load More &gt</button>
        </div>
    </section>

    <hr style="border: none; border-top: 1px solid #ccc; margin: 20px auto; width:90%">

    <!-- =======Pricing Section======= -->
    <!-- Add a wrapper around the background content (pricing section) -->
    <div class="content-wrapper">
        <section class="pricing" id="pricing">
            <h3 class="heading">Our Monthly Meal <span>Subscription</span></h3>

            <div class="box-container">
                <div class="box">
                    <h3>Basic Plan</h3>
                    <div class="price">
                        <span>₹</span>
                        <span class="amount">1500</span>
                        <span>/month</span>
                    </div>

                    <ul>
                        <li>30 days</li>
                        <li>Get Lunch and Dinner</li>
                        <li>No discount</li>
                        <li>Safety Guide</li>
                        <li>Insurance</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn" onclick="openPopup('Basic Plan', 1500)">Choose Plan</a>
                </div>

                <div class="box">
                    <h3>Intermediate Plan</h3>
                    <div class="price">
                        <span>₹</span>
                        <span class="amount">1200</span>
                        <span>/month</span>
                    </div>

                    <ul>
                        <li>60 days</li>
                        <li>Get Lunch and Dinner</li>
                        <li>20% off as compared to Basic Plan</li>
                        <li>Safety Guide</li>
                        <li>Insurance</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn" onclick="openPopup('Intermediate Plan', 1200)">Choose
                        Plan</a>
                </div>

                <div class="box">
                    <h3>Advance Plan</h3>
                    <div class="price">
                        <span>₹</span>
                        <span class="amount">1000</span>
                        <span>/month</span>
                    </div>

                    <ul>
                        <li>90 days</li>
                        <li>Get Lunch and Dinner</li>
                        <li>33% off as compared to Basic Plan</li>
                        <li>Safety Guide</li>
                        <li>Insurance</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn" onclick="openPopup('Advance Plan', 1000)">Choose Plan</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Popup Modal -->
    <div class="popup-overlay" id="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h3 id="plan-name"></h3>
            <p>Total Cost: ₹<span id="plan-cost"></span></p>

            <form action="subscribe_plan.php" method="POST">
                <input type="hidden" name="plan" id="plan-input">
                <input type="hidden" name="cost" id="cost-input">
                <div class="inputBox">
                    <label style="color: white;font-size:10px;margin-bottom:8px;">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="inputBox">
                    <label style="color: white;font-size:10px;margin-bottom:8px;">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="inputBox">
                    <label style="color: white;font-size:10px;margin-bottom:8px;">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" required>
                </div>
                <div class="inputBox">
                    <label style="color: white;font-size:10px;margin-bottom:8px;">Write the Plan Again</label>
                    <input type="text" name="plan" placeholder="Enter your Plan" required>
                </div>
                <div class="inputBox">
                    <label style="color: white;font-size:10px;margin-bottom:8px;">Date you want to Start the Subscription</label>
                    <input type="date" name="date" placeholder="Enter your Date" required>
                </div>
                <input type="submit" value="Subscribe Now" class="btn">
            </form>
        </div>
    </div>

    <hr style="border: none; border-top: 1px solid #ccc; margin: 20px auto; width:90%">

    <!-- =======Blog Section======= -->
    <section class="blogs" id="blogs">
        <h3 class="heading">Our <span>Blogs</span></h3>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>What is Hyderabadi and Kolkata Biryani?</h3>
                    <div class="icons">
                        <a href=""><i class="fas fa-calendar"></i>1st Jan 2024</a>
                        <a href=""><i class="fas fa-user"></i> by Admin</a>
                    </div>
                    <a href="" class="btn">Read More &gt;</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>What is Burger?</h3>
                    <div class="icons">
                        <a href=""><i class="fas fa-calendar"></i>1st Mar 2024</a>
                        <a href=""><i class="fas fa-user"></i> by Admin</a>
                    </div>
                    <a href="" class="btn">Read More &gt;</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>What is Margherita Pizza?</h3>
                    <div class="icons">
                        <a href=""><i class="fas fa-calendar"></i>1st Apr 2024</a>
                        <a href=""><i class="fas fa-user"></i> by Admin</a>
                    </div>
                    <a href="" class="btn">Read More &gt;</a>
                </div>
            </div>
        </div>
    </section>

    <hr style="border: none; border-top: 1px solid #ccc; margin: 20px auto; width:90%">

    <!-- =======Customer Review Section======= -->
    <section class="reviews" id="reviews">
        <h3 class="heading">Customer <span>Reviews</span></h3>

        <div class="review-container">
            <div class="review-box">
                <div class="user">
                    <img src="images/pic-1.png" alt="User 1">
                    <div class="user-info">
                        <h4>John Doe</h4>
                        <span>⭐⭐⭐⭐⭐</span>
                    </div>
                </div>
                <p>"The food was absolutely delicious, and the service was exceptional. Will definitely come again!"</p>
            </div>

            <div class="review-box">
                <div class="user">
                    <img src="images/pic-2.png" alt="User 2">
                    <div class="user-info">
                        <h4>Jane Smith</h4>
                        <span>⭐⭐⭐⭐⭐</span>
                    </div>
                </div>
                <p>"Amazing ambiance and fantastic food. One of the best dining experiences I've had."</p>
            </div>

            <div class="review-box">
                <div class="user">
                    <img src="images/pic-3.png" alt="User 3">
                    <div class="user-info">
                        <h4>Michael Johnson</h4>
                        <span>⭐⭐⭐⭐</span>
                    </div>
                </div>
                <p>"Great value for money. Great ambience and surrounding was excellent. Service was excellent."</p>
            </div>

            <div class="review-box">
                <div class="user">
                    <img src="images/pic-4.png" alt="User 3">
                    <div class="user-info">
                        <h4>Mary Jane</h4>
                        <span>⭐⭐⭐⭐</span>
                    </div>
                </div>
                <p>"Great value for money. The dishes were flavorful, and the portions were generous."</p>
            </div>
        </div>

        <div id="btn">
            <a href="reviews.php"><button class="load-more">Show All Reviews</button></a>
        </div>
    </section>


    <hr style="border: none; border-top: 1px solid #ccc; margin: 20px auto; width:90%">

    <!-- =======Pricing Section======= -->
    <section class="contact" id="contact">
        <h3 class="heading">Contact <span>Us</span></h3>
        <form action="message.php" method="post">
            <div class="inputBox">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="inputBox">
                <input type="number" name="number" placeholder="Number" required>
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>


    <hr style="border: none; border-top: 1px solid #ccc; margin: 20px auto; width:90%">

    <!-- =======Footer Section======= -->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>Our Branches</h3>
                <a href=""><i class="fas fa-map-marker-alt"></i>India</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>Japan</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>England</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>Spain</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>USA</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href=""><i class="fas fa-chevron-right"></i>Home</a>
                <a href=""><i class="fas fa-chevron-right"></i>Packages</a>
                <a href=""><i class="fas fa-chevron-right"></i>Services</a>
                <a href=""><i class="fas fa-chevron-right"></i>Prices</a>
                <a href=""><i class="fas fa-chevron-right"></i>Blogs</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href=""><i class="fas fa-phone"></i>+91 7878 4556 34</a>
                <a href=""><i class="fas fa-phone"></i>+123-421-3234</a>
                <a href=""><i class="fas fa-envelope"></i>abc@gmail.com</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>Bhubaneswar, Odisha, 751017</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href=""><i class="fa-brands fa-square-facebook"></i>Facebook</a>
                <a href=""><i class="fa-brands fa-x-twitter"></i>X</a>
                <a href=""><i class="fa-brands fa-instagram"></i>Instagram</a>
                <a href=""><i class="fa-brands fa-linkedin"></i>LinkedIn</a>
                <a href=""><i class="fa-brands fa-pinterest"></i>Pinterest</a>
            </div>
        </div>

        <!-- Copyright  -->
        <div class="credit">
            <p>Copyright &copy; <span>2022</span> | All rights reserved by Foodielicious.com</a></p>
        </div>
    </section>

    <!-- Adding JS  -->
    <script src="script.js"></script>
    <script>
        // Open the popup and blur the background (except the popup)
        function openPopup(planName, cost) {
            document.getElementById('popup').style.display = 'flex';
            document.getElementById('plan-name').innerText = planName;
            document.getElementById('plan-cost').innerText = cost;
            document.getElementById('plan-input').value = planName;
            document.getElementById('cost-input').value = cost;

            // Apply blur effect only to the content wrapper
            document.querySelector('.content-wrapper').classList.add('blur');
        }

        // Close the popup and remove the blur effect
        function closePopup() {
            document.getElementById('popup').style.display = 'none';

            // Remove the blur effect
            document.querySelector('.content-wrapper').classList.remove('blur');
        }

         document.addEventListener("DOMContentLoaded", function () {
            const loadingScreen = document.getElementById("loading-screen");
        
            // Set a timeout to hide the loading screen
            setTimeout(() => {
                loadingScreen.classList.add("hidden");
            }, 5000); // 5000ms = 5 seconds (adjust as needed)
        });
    </script>
</body>

</html>
