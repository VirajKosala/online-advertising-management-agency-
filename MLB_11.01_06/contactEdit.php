<?php 
    require 'connect.php';

    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        if(isset($_POST['submit'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $sql = "UPDATE contact SET fname='$fname', lname='$lname', email='$email', message='$message' WHERE id=$id";
            if ($con->query($sql) === TRUE) {
                header("Location: dataStoreContactUs.php");
            }
        }

        $sql = "SELECT * FROM contact WHERE id = $id";

        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            ?>

<!DOCTYPE html>
<html>

<head>
<title>contact us</title>
<link rel="stylesheet" href="css/contactUs.css">
<script src="js/contactUs.js"></script>
</head>

<body>

   <!-- nav bar code -->
   <ul class="navbar">
        
      <li><a href="#">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Pricing</a></li>
      <li><a href="#">Offers</a></li>
      <li><a href="contactUs.html">Contact Us</a></li>
      <li><a href="aboutUs.html">About Us</a></li>
      <li class="search-bar">
          <form>
              <input type="text" placeholder="search">
              <button type="submit">Search</button>
          </form>

      <li class="right"><a href="">Sign Up</a></li>
      <li><a href="right">Login</a></li>

   </ul>

<!--contact details & social media links -->
<img class="front_img" src="images/contactUs.webp" alt="front_img">
<div class="div3">
<div class="div1">
        
   <h3 class="div1Text" >Contact Number<br></h3>
   <p class="div1Text2">+9472435353535<br> +9473378905672</p>
   <h3 class="div1Text">Email</h3>
   <p class="div1Text2"> <br>masterofadvertising@gmail.com</p><br>
   <h3 class="div1Text">Social Media</h3>

<a href="https://www.facebook.com/" target="_blank"><p class="Fb" id="Fb"><img class="logoimg" src="/images/facebook.jpg" alt="Fb img" >Facebook</p></a>

<a href="https://www.instagram.com/" target="_blank"><p class="Insta" id="Insta"> <img class="logoimg" src="/images/insta.jpg" alt="insta img">Instagram</p></a>

<a href="https://www.google.com/" target="_blank"><p class="google" id="google"><img class="logoimg" src="/images/google icon.jpeg" alt="google img">Google</p></a>

<a href="https://twitter.com/?lang=en" target="_blank"><p class="Twitter" id="Twitter">  <img class="logoimg" src="/images/Twit.jpg" alt="twitter img">Twitter</p></a>

<a href="https://www.youtube.com/" target="_blank"><p class="Yt" id="Yt"><img class="logoimg" src="/images/YT.jpg" alt="youtube img">YouTube</p></a>
</div>



<!-- contact us form -->

<div class="div2">
    <!-- js function part -->
    <!-- <p class="jsnamefunction"> Hello <script id="fun">myfunction( )</script><br> Do you want to contact us </p> -->
            
   <form class="contactUsForm" method="post">

       <label for="fname" class="fname">First Name :</label>
       <input type="text" id="fname" name="fname" value="<?php echo $row['lname'];?>">

       <label for="lname" class="lname" >Last Name :</label>
       <input type="text" id="lname" name="lname" value="<?php echo $row['lname'];?>">

       <label for="email" class="email">Email :</label>
       <input type="email" id="email" name="email" value="<?php echo $row['email'];?>">

       <p class="message"><label for="message">Message :</label></p>
       <textarea id="message" name="message" name="message"><?php echo $row['message'];?></textarea> <?php }}}?>

       <input onclick="confirm('Are you sure! You want to submit the form..')" id="submitButton" type="submit" value="submit" name="submit">
   </form>
</div>
</div>
  <!-- Footer  -->
  <footer>

   <div>
      <div class="all3div">
         <div class="divh">
               <h3 class="un_h1">Contact info</h3>
               <ul class="un_h">
                  <a href="#"><li>+94712341204</li><br></a>
                  <a href="#"><li>+94712319283</li><br></a>
                  <a href="#"><li>onlineadvertisingagency@gmail.com</li><br></a>
                  <a href="#"><li>advertisinagency1234@gmail.com</li></a>
               </ul>
         </div>
         <div>
            <h3 class="un_ser1">Services</h3>
            <ul class="un_ser">
               <a href="#"><li>Social Media Advertising</li><br></a>
               <a href="#"><li>Content Marketing</li><br></a>
               <a href="#"><li>Display Advertising</li><br></a>
               <a href="#"><li>buy</li></a>
            </ul>
         </div>
         <div>
            <h3 class="un_off1">Offers</h3>
            <ul class="un_off">
               <a href="#"><li>Limited-time offer</li><br></a>
               <a href="#"><li>Holiday offer</li><br></a>
               <a href="#"><li>Specific offer</li><br></a>
               <a href="#"><li>Other</li></a>
            </ul>
         </div>
      </div>
      <hr>
      <div>
         <ul class="footer_ul">
            <a href="#"></a><li><a href="aboutUs.html">About_Us </a></li>
            <a href="#"></a><li><a href="contactUs.html">contact_Us </a></li>
            <a href="#"></a><li><a href="#">FAQ </a></li>
         </ul>
      </div>
   </div>
   
   </footer>
</body>
</html>
