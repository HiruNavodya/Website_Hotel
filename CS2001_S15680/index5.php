<?php
session_start();
    include("connection.php");    
   if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $inquiry = $_POST['inquiry'];
            $query = "insert into feedback (name,email,country,inquiry) values (' $name',' $email',' $country ',' $inquiry')";
            mysqli_query($con,$query);
            header("Location: index.html");       
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <link href="images/a.jpg" rel="icon" type="image/png">
   <title>JAURIM HOTEL</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <div class="flex">
   <marquee direction="right"><a href="#home" class="logo" name = "top" ><font size="35px" type "Arial">JAURIM  HOTEL</font></a></marquee>
      <img src="images/1.png" alt="Girl in a jacket" style="width:150px;height:150px;" class="logo"/> 
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>
  
   <nav class="navbar">
      <a href="index.html">HOME</a>
      <a href="index.html">ABOUT US</a>
      <a href="index2.php">RESERVATION</a>
      <a href="index3.html">GALLERY</a>
      <a href="index5.php">CONTACT DETAILS</a>
      <a href="index3.html">FAQ</a>
      <a href="index4.html">REVIEWS</a>
	<a href="Job.php">JOB VACANCIES</a>
   </nav>

</section>

<!-- header section ends -->


<!-- contact section starts  -->



 

<!-- contact section ends -->
<br /><br /><br /><br /><br />

<style>
   body {
     font-family: Arial, Helvetica, sans-serif;
   }
   
   * {
     box-sizing: border-box;
   }
   
   /* Style inputs */
   input[type=text], select, textarea {
     width: 100%;
     padding: 12px;
     border: 1px solid #ccc;
     margin-top: 6px;
     margin-bottom: 16px;
     resize: vertical;
   }
   
   input[type=submit] {
     background-color: #04AA6D;
     color: white;
     padding: 12px 20px;
     border: none;
     cursor: pointer;
   }
   
   input[type=submit]:hover {
     background-color: #45a049;
   }
   
   /* Style the container/contact section */
   .container {
     border-radius: 5px;
     background-color: #f2f2f2;
     padding: 10px;
   }
   
   /* Create two columns that float next to eachother */
   .column {
     float: left;
     width: 50%;
     margin-top: 6px;
     padding: 20px;
   }
   
   /* Clear floats after the columns */
   .row:after {
     content: "";
     display: table;
     clear: both;
   }
   
   /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
   @media screen and (max-width: 600px) {
     .column, input[type=submit] {
       width: 100%;
       margin-top: 0;
     }
   }
   </style>
   
   <body>
   
   
   <div class="container">
     <div style="text-align:center">
       <h2>Contact Us</h2>
     </div>
     <div class="row">
       <div class="column">
         <img src="contactus.jpg" style="width:100%">
       </div>
       <div class="column">
        <form action="" method="post">

        <label for="fname">Your Namre</label>
           <input type="text" id="fname" name="name" placeholder="Your name.."  required>
           <label for="lname">Your Email</label>
           <input type="text" id="lname" name="email" placeholder="Your email.."  required>
           <label for="country">Country</label>
           <select id="country" name="country" required>
             <option value="korea">South Krea</option>
             <option value="australia">Australia</option>
             <option value="canada">Canada</option>
             <option value="usa">USA</option>
             <option value="other">Other</option>
           </select>
           <label for="subject">Your Inquiry</label>
           <textarea id="subject" name="inquiry" placeholder="Write something.." style="height:170px" required></textarea>
           <input type="submit" value="Submit">
        </form>
       </div>
     </div>
   </div>
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i> +02-312-3456</a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i>  +82-2-312-3456</a>
         <a href="mailto:shakhanas@gmail.com"><i class="fas fa-envelope"></i> jaurim@gmail.com</a>
         <a href="#"><i class="fas fa-map-marker-alt"></i> SEoul, South Korea - 100-011</a>
      </div>

      <div class="box">
      <a href="index.html">HOME</a>
      <a href="index.html">ABOUT US</a>
      <a href="index2.php">RESERVATION</a>
      <a href="index3.html">GALLERY</a>
      <a href="index3.php">CONTACT DETAILS</a>
      <a href="index5.php">FAQ</a>
      <a href="index4.html">REVIEWS</a>
	<a href="Job.php">JOB VACANCIES</a>
      </div>
      
      <div class="box">
         <a href="https://www.facebook.com/campaign/landing.php?campaign_id=1635645263&extra_1=s%7Cc%7C313630695579%7Ce%7Cfacebook%27%7C&placement=&creative=313630695579&keyword=facebook%27&partner_id=googlesem&extra_2=campaignid%3D1635645263%26adgroupid%3D67924240452%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-362360550869%26loc_physical_ms%3D1009919%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=EAIaIQobChMIz62Y6IyR-wIVwUcrCh2l-AxkEAAYASAAEgLC7fD_BwE">facebook <i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/i/flow/login">twitter <i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/accounts/login/">instagram <i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/login">linkedin <i class="fab fa-linkedin"></i></a>
      </div>
   </div>

   <div class="credit">&copy; copyright @ 2022 by s15680 | all rights reseved!</div>

</section>
<!-- footer section ends -->








<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>