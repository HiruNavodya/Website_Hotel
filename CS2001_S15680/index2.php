<?php

session_start();

    include("connection.php");
    //$conn = mysqli_connect("localhost", "root", "", "petro_test");
  /*  $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "jaurim_hotel";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
        die("failed to connect!");
    };*/
    
   if($_SERVER['REQUEST_METHOD'] == "POST"){
        $days = $_POST['days'];
        $hours = $_POST['hours'];
        $name = $_POST['name'];
        $number = $_POST['number'];
        $adults = $_POST['adults'];
        $children = $_POST['children'];
      

       
            $query = "insert into reservations(Day,Hour,Name,Phone_Number,No_of_Adults,No_of_Children) values ('$days','$hours','$name','$number','$adults','$children')";
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
   <a href="index.HTML">HOME</a>
        <a href="index.html">ABOUT US</a>
       <a href="#reservation">RESERVATION</a>
       <a href="index3.html">GALLERY</a>
       <a href="index5.php">CONTACT DETAILS</a>
       <a href="index3.html">FAQ</a>
       <a href="index4.html">REVIEWS</a>
	<a href="Job.php">JOB VACANCIES</a>
   </nav>

</section>
<!-- header section ends -->

<BR/><BR/><BR/><BR/><BR/>
<BR/><BR/><BR/><BR/><BR/>


<section class="reservation" id="reservation">
   <style>
      *{
         box-sizing: border-box;
         padding: 0;
         margin: 0;
     }
     body{
         font-family: 'Poppins', sans-serif;
     }
     .banner{
         min-height: 100vh;
         background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("banner-img.jpg") center/cover no-repeat;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         color: #fff;
         padding-bottom: 20px;
     }
     .card-container{
         display: grid;
         grid-template-columns: 420px 420px;
     }
     .card-img{
         background: url("card-img.jpg") center/cover no-repeat;
     }
     .banner h2{
         padding-bottom: 40px;
         margin-bottom: 20px;
     }
     .card-content{
         background: #fff;
         height: 330px;
     }
     .card-content h3{
         text-align: center;
         color: #000;
         padding: 25px 0 10px 0;
         font-size: 26px;
         font-weight: 500;
     }
     .form-row{
         display: flex;
         width: 90%;
         margin: 0 auto;
     }
     form select, form input{
         display: block;
         width: 100%;
         margin: 15px 12px;
         padding: 5px;
         font-size: 15px;
         font-family: 'Poppins', sans-serif;
         outline: none;
         border: none;
         border-bottom: 1px solid #eee;
         font-weight: 300;
     }
     form input[type = text], form input[type = number], form input::placeholder, select{
         color: #9a9a9a;
     }
     form input[type = submit]{
         color: #fff;
         background: #f2745f;
         padding: 12px 0;
         border-radius: 4px;
         cursor: pointer;
     }
     form input[type = submit]:hover{
         opacity: 0.9;
     }
     @media(max-width: 992px){
         .card-container{
             grid-template-columns: 100%;
             width: 100vw;
         }
         .card-img{
             height: 330px;
         }
     }
                 </style>
 <section class = "banner">
               <font color ="#e8ac3c" size="15px" type "times">Make your Reservation Here...</font>
                 <h2>BOOK YOUR TABLE NOW</h2>
                 <div class = "card-container">
                     <div class = "card-img">
                         <!-- image here -->
                     </div>
     
                     <div class = "card-content">
                         <h3>Reservation</h3>
                         <form action="" method="POST">
                             <div class = "form-row">
                                 <select name = "days" id="days" name="days" required>
                                     <option value = "day-select">Select Day</option>
                                     <option value = "sunday">Sunday</option>
                                     <option value = "monday">Monday</option>
                                     <option value = "tuesday">Tuesday</option>
                                     <option value = "wednesday">Wednesday</option>
                                     <option value = "thursday">Thursday</option>
                                     <option value = "friday">Friday</option>
                                     <option value = "saturday">Saturday</option>
                                 </select>
     
                                 <select name = "hours"  id="hours"  name = "hours" required>
                                     <option value = "hour-select">Select Hour</option>
                                     <option value="10">10:00</option>
                                     <option value="11">11:00</option>
                                     <option value="12">12:00</option>
                                     <option value="13">13:00</option>
                                     <option value="14">14:00</option>
                                     <option value="15">15:00</option>
                                     <option value="16">16:00</option>
                                     <option value="17">17:00</option>
                                     <option value="18">18:00</option>
                                     <option value="19">19:00</option>
                                     <option value="20">20:00</option>
                                     <option value="21">21:00</option>
                                     <option value="22">22:00</option>
                                     <option value="23">23:00</option>
                                 </select>
                             </div>
     
                             <div class = "form-row">
                                 <input type = "text" placeholder="Full Name"  id="name" name="name" required>
                                 <input type = "text" placeholder="Phone Number"  id="number" name="number" required>
                             </div>
     
                             <div class="form-row">
                                <input type="number" placeholder="How Many Adults" min="1"  id="adults" name="adults" required>
                                <input type="number" placeholder="How Many Child" min="0"  id="children" name="children" required>
                              </div>
                             <div class = "form-row">
                                <input type = "submit" value = "BOOK TABLE">
                            </div>
                         </form>
                     </div>
                 </div>
             </section>



	<BR/><BR/>
</section>

<!-- reservation section ends -->
<br /><br /><br /><br /><br />

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
       <a href="#reservation">RESERVATION</a>
       <a href="index3.html">GALLERY</a>
       <a href="index5.php">CONTACT DETAILS</a>
       <a href="index3.html">FAQ</a>
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