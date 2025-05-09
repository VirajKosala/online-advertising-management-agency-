<!DOCTYPE html>
<html>

<head>
    <title>Masters Of Advertising</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <ul class="navbar">

        <li><a href="/Home.html">Home</a></li>
        <li><a href="">Offers</a></li>
        <li><a href="">Contact Us</a></li>
        <li><a href="">About Us</a></li>
        <li class="search-bar">
            <form>
                <input type="text" placeholder="search">
                <button type="submit">Search</button>
            </form>

            <li class="user-icon"><a href="#"><i class="fas fa-user"></i></a></li>

    </ul>

    <h1 class="topic4">Delete payment history</h1>

    <form class="payment-details-form" method = "post" action ="delete2.php">
        <label for="payment-profile">Payment Profile:</label><br>
        <div class="input-with-icon">
            <i class="fas fa-user"></i>
            <input type="text" id="payment_profile" name="payment_profile" placeholder="Enter payment profile" required><br>
        </div>
    
        <input type = "submit" class="submit-button" value = "delete">
    </div>
    </form>
    




   
    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="contact-info">
                <h3>Contact info</h3>
                <ul>
                    <li>+94712341204</li>
                    <li>+94712319283</li>
                    <li>onlineadvertisingagency@gmail.com</li>
                    <li>advertisinagency1234@gmail.com</li>
                </ul>
            </div>
            <div class="services">
                <h3>Services</h3>
                <ul>
                    <li>Social Media Advertising</li>
                    <li>Content Marketing</li>
                    <li>Display Advertising</li>
                    <li>Buy</li>
                </ul>
            </div>
            <div class="offers">
                <h3>Offers</h3>
                <ul>
                    <li>Limited-time offer</li>
                    <li>Holiday offer</li>
                    <li>Specific offer</li>
                    <li>Other</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footer-links">
            <ul>
                <li><a href="/html/aboutUs.html">About Us</a></li>
                <li><a href="/html/contactUs.html">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>