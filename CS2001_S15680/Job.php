<?php

    include("connection.php");
   /* $conn = mysqli_connect("localhost", "root", "","jaurim_hotel");
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "jaurim_hotel";*/

    /*if(!conn){
        die("connection failed:". mysqli_connect_error());
    }*/

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
        die("failed to connect!");
   
    };
        //echo "Connected Successfully";


        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Fullname = $_POST['Fullname'];
            $Nic = $_POST['Nic'];
            $Email = $_POST['Email'];
            $Job_Category = $_POST['Job_Category'];
            $Tel_no = $_POST['Tel_no'];
            $gender = $_POST['gender'];
    
            $query = "INSERT INTO vacancies(Fullname,Nic,Email,Job_Category,Tel_no,gender) VALUES('$Fullname','$Nic','$Email','$Job_Category','$Tel_no','$gender')";
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
   <link rel="stylesheet" href="css/style2.css">






        <script language = "javascript" type = "text/javascript" >
            function validate() {
                if( document.form.Fullname.value == "" ) {
                    alert( "Please provide your Full Name!" );
                document.form.Email.focus() ;
            return false;
            }
                if( document.form.Nic.value == "" ) {
                    alert( "Please provide your NIC!" );
                document.form.Reader_.focus() ;
            return false;
            }


                if( document.form.Email.value == "" ) {
                    alert( "Please provide your Email" );
                document.form.Email.focus() ;
            return false;
            }

                if( document.form.Tel_no.value == "" ) {
                    alert( "Please provide your Telephone number!" );
                document.form.Telephone_Number.focus() ;
            return false;
            }
    
    return( true );
    }
        </script>
<style>

</style>


        <title>online registration form</title>
        <link rel="stylesheet" href="css/form.css">

        

</head>

<body >     
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

</section>S

<!-- header section ends -->  

  

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
          color: rgb(255, 255, 255);
          padding-bottom: 20px;
      }
     /* .card-container{
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
          background: #e8ac3c;
          height: 530px;
      }
      .card-content h3{
          text-align: center;
          color: #000;
          padding: 25px 0 10px 0;
          font-size: 26px;
          font-weight: 500;*/
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
          color: black;
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
        <h2>APPLY FOR YOUR FUTURE CAREER</h2><br/><br/><br/>
        <form action="" method="post" name="form" onsubmit= "return(validate());">
        <div class = "card-container">
        </div-->
        <div class = "card-content">
            <h3>Online Registration Form</h3>


            <div class="form-row">
                <!--form action="" method="post">Fullname:-->
                     <label for="Fullname">Full Name</label> 
                    <input type = "text" placeholder="Full Name with initials" size="40px" name="Fullname">
                </form>
            </div>

                <div class = "form-row">
                    <!--form action="" method="post" >Reader_iD:-->
                        <label for="Nic">NIC number</label> 
                        <input type = "text" placeholder="NIC number" size="30px" name="Nic">
                    </form>
                </div>
 
                <div class = "form-row">
                    <!--form action="" method="post">Email:-->
                        <label for="Email">Email</label> 
                        <input type="email" name="Email" placeholder="Email">
                    </form>
                </div>

                <div class="form-row">
                    <!--form action="" method="post">Age_Category:-->
                    <label for="Job_Category">Job Type</label> 
                        <select name = "Job_Category">
                            <option value="manager">Manager</option>
                            <option value="receptionist">Hotel Receptionist</option>
                            <option value="chef">Chef</option>
                            <option value="waiter">Waiter</option>
                        </select>
                    </form>
                </div>

                                
                <div class = "form-row">
                    <!--form action="" method="post">Tel_no:-->
                        <label for="Tel_no">Telephone Number</label> 
                        <input type="text" name="Tel_no" placeholder="Tel No">
                    </form>
                </div>

                <div class="form-row">
                    <!--form action="" method="post">Genre:-->
                    <label for="gender">Gender</label> 
                        <select name = "gender">
                            <option value = "novel">Male</option>
                            <option value = "shortstory">Female</option>
                        </select>
                    </form>
                </div>

                <div class = "form-row">
                    <!--form action="" method="post"-->
                        <input type = "submit" value = "Submit">
                    </form>
                </div>
                    
                </div>
                </div>
                </section>

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
           
            </body>
        </html>