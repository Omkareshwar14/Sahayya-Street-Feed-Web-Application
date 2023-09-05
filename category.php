<?php
  
  include("connect.php");
  $result = mysqli_query( $conn, "select * from data1 ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Category</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/logoo.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

   <style>
      table ,tr,td,th{
           border:1px solid black;
           border-collapse: collapse;
           
      }
      table{
         width: 80%;
         height: 30%;
         text-align: center;
      }

      .form-outline{
         margin: 60px;
         text-align: center;
         border: 2px solid rgb(47, 54, 6);
         padding: 10px;
         border-radius: 10px 50px;

      }
      .hii{
         text-align: center;
      }
      
   </style>   
</head>

<body>
   <marquee bgcolor ="black" onmouseover="this.stop();" onmouseout="this.start();" style="color:rgb(255, 255, 3);" >This website made by Omkareshwar Halli(Team Lead) , Pooja Gundami , Shirisha Ankam </marquee>
   <!--header section start -->
   <div class="header_section">
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
                           <a class="nav-link" href="category.php">CATEGORY</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="map.html">GOOGLE MAP</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="registor.php">REGISTOR AS VENDORS</a>
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
   </div>
   <!-- header section end -->
   <!-- gallery section start -->
   <div class="gallery_section layout_padding">
      <div class="container">
         <h1 class="gallery_taital">Category</h1>
         <p class="gallery_text">List Of All Stores</p>
         <div class="story_section_2">
         <div class="form-outline">
            <input type="search" id="myinput" class="form-control" placeholder="You can search here.." onkeyup="myFuntion()" aria-label="Search" />
         </div>
         <div class="hii">
            <table id="mytable" >
               
               <tr>
                  <th>Shop Name</th>
                  <th>Owner Name</th>
                  <th>Category</th>
                  <th>Item Name:</th>
                  <th>Number of Items</th>
                  <th>Price(Rupee)</th>
                  <th>Phone Number</th>
                  <th>Discount Offer</th>
                  <th>Buy</th>
               </tr>
               
               
               <?php 
                  while($rows = mysqli_fetch_array($result)  )
                  {
               ?> 
               
                  <tr>
                     <td><?php echo $rows['sname'] ?></td>
                     <td><?php echo $rows['oname'] ?></td>
                     <td><?php echo $rows['cname'] ?></td>
                     <td><?php echo $rows['iname'] ?></td>
                     <td><?php echo $rows['niname'] ?></td>
                     <td><?php echo $rows['pname'] ?></td>
                     <td><?php echo $rows['phname'] ?></td>
                     <td><?php echo $rows['doname'] ?></td>
                     <td><button><a href="#" class="btn btn-pencil">Buy</a></button></td>

                  </tr>   

               <?php
                  }
               ?>
               


            </table>
         </div>
            

         </div>
      </div> 
   </div> 
   <!-- gallery section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding" id="Section1">
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
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

   <script>
   const myFuntion = () =>{

      let filter =document.getElementById('myinput').value.toUpperCase();
      let mytable =document.getElementById('mytable');
      let tr = mytable.getElementsByTagName('tr');

      for(var i =0 ;i < tr.length; i++){
         let td = tr[i].getElementsByTagName('td')[0];

         if(td){
            let textv = td.textContent || td.innerHTML;
            if(textv.toUpperCase().indexOf(filter)> -1){
               tr[i].style.display = "";
            }
            else{

               tr[i].style.display= "None";
            }
         }
      }

   }

   </script>
</body>

</html>