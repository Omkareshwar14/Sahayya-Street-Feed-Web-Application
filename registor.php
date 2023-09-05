
<!DOCTYPE html>
<html lang="en">

<head>
   
   <title>Registor for Vendors</title>
   
  

</head>

<body>

   <!--header section start -->
  <!-- <div class="header_section">
      <div class="container-fluid ">
         <div class="row">
            <div class="col-sm-2 col-6">
               <a class="logo" href="index.html"><img src="images/logoo.png"></a>
            </div>
            <div class="col-sm-8 col-6">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">HOME</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">ABOUT</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="category.html">CATEGORY</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="map.html">GOOGLE MAP</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="registor.html">REGISTOR AS VENDORS</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="col-sm-2">
               <div class="header_social_icon">
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- header section end -->
  
 
  <!-- testimonial section start -->
  <!--<div class="testimonial_section layout_padding">
   <div class="container">
      <div class="client_main">
        <h1>Registration As Vendor :: </h1>
        <form action="#">
         <div class="sect">
         <div class="input-box">
            <span class="details">Shope Name :: </span>
            <input type="text" placeholder="Enter your name" required>
         </div>
         <div class="input-box">
            <span class="details">Owner Name :: </span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Name of Category :: </span>
            <input type="text" placeholder="Enter your category" required>
          </div>
          <div class="input-box">
            <span class="details">Name of item :: </span>
            <input type="text" placeholder="Enter your item" required>
          </div>
          <div class="input-box">
            <span class="details">Number of items :: </span>
            <input type="text" placeholder="Enter item numbers" required>
          </div>
          <div class="input-box">
            <span class="details">Price :: </span>
            <input type="text" placeholder="Enter your price" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number :: </span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Discount Offers :: </span>
            <input type="text" placeholder="Enter your offer" required>
          </div>
          
          <div class="button">
            <input type="submit" value="Register">
          </div>

         </div>
         </form>

      </div>
   </div>
</div> -->

<div style="max-width: 600px; margin: 0 auto; padding: 20px; border-radius: 5px;">
   <h1 style="text-align: center;">Vendor Registration Form</h1>
   <form action ="connect.php" method="post" style="display: flex; flex-direction: column;">
     <label style="margin-top: 10px;">Shop Name:</label>
     <input type="text" name="sname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="shopName" required>

     <label style="margin-top: 10px;">Owner Name:</label>
     <input type="text" name="oname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="ownerName" required>

     <label style="margin-top: 10px;">Category:</label>
     <input type="text" name="cname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="category" required>

     <label style="margin-top: 10px;">Item Name:</label>
     <input type="text" name="iname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="itemName" required>

     <label style="margin-top: 10px;">Number of Items:</label>
     <input type="number" name="niname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="itemNumber" required>

     <label style="margin-top: 10px;">Price:</label>
     <input type="number" name="pname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="price" required>

     <label style="margin-top: 10px;">Phone Number:</label>
     <input type="tel" name="phname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="phoneNumber" required>

     <label style="margin-top: 10px;">Discount Offer:</label>
     <input type="text" name="doname" style="padding: 10px; margin: 5px 0; border: none; border-radius: 3px; background-color: #f2f2f2;" name="discountOffer" required>

     <input type="submit" name="submitt" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px; margin-top: 20px; border: none; border-radius: 3px; cursor: pointer;">
   </form>
 </div> 
<!-- testimonial section end -->



<?php

/*if(isset($_POST['submitt'])){

  $sname = $_POST["sname"];
  $oname = $_POST["oname"];
  $cname = $_POST["cname"];
  $iname = $_POST["iname"];
  $niname = $_POST["niname"];
  $pname = $_POST["pname"];
  $phname = $_POST["phname"];
  $doname = $_POST["doname"];

  $res = mysqli_query($mysqli, "INSERT into data1 values('', '$sname', '$oname', '$cname', '$iname', '$niname', '$pname', '$phname', '$doname') ");
  if($res){
   echo "Thank You !!!";
  }                     
  else{
   echo "Failed";
  }
}*/






?>














   <!-- footer section start -->
<!--   <div class="footer_section layout_padding" id="Section1">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <h2 class="useful_text">Feature</h2>
               <p class="lorem_text">Connects people and vendors. Help vendors to expand business on digital web space.</p>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                     <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h2 class="useful_text">Useful link </h2>
               <div class="footer_menu">
                  <ul>
                     <li><a href="index.html">HOME</a></li>
                     <li><a href="about.html">ABOUT</a></li>
                     <li><a href="map.html">GOOGLE MAP</a></li>
                     <li><a href="category.html">CATEGORY</a></li>
                     <li><a href="registor.html">REGISTOR AS VENDORS</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h2 class="useful_text">Contact Us</h2>
               <div class="location_text"><a href="#">Help :-</a></div>
               <div class="location_text"><a href="#">+91 7020189498</a></div>
               <div class="location_text"><a href="#">+91 9527455150 </a></div>
               <div class="location_text"><a href="#">+91 8605050985</a></div>
               <div class="location_text"><a href="#">omkarhalli14@gmail.com</a></div>
               <div class="location_text"><a href="#">poojagundami@gmail.com</a></div>
               <div class="location_text"><a href="#">shiriankam04@gmail.com</a></div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <h1 class="useful_text">User will get notify.</h1>
               <input type="text" class="Enter_text" placeholder="Your Name" name="Your Name">
               <input type="text" class="Enter_text" placeholder="Email" name="Email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- footer section end -->
   <!-- copyright section start -->
   
   <!-- copyright section end -->
   <!-- Javascript files-->
   
</body>

</html>