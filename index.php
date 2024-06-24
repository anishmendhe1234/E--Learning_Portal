<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/Style.css">
  
</head>
<body>
  

<header class="header">
   
   <section class="flex">

      <a href="index.php" class="logo"> 
         <i class="fas fa-graduation-cap"></i>
         <b>EduTubePicks</b>
         <marquee>Learn, grow, and excel..</marquee>
       </a>
       
      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Guest77</h3>
         <p class="role">student</p>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
    <?php
    // Start or resume the session
    session_start();

    // Check if the user is logged in
    $loggedIn = isset($_SESSION['user']); // Replace 'user_id' with your actual session variable

    if ($loggedIn) {
        // If the user is logged in, show the logout button
        echo '<a href="logout.php" class="btn">Logout</a>';
    } else {
        // If the user is not logged in, show the login and register buttons
        echo '<a href="login.php" class="btn">Login</a>';
        echo '<a href="register.php" class="btn">Register</a>';
    }
    ?>
</div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Guest</h3>
      <p class="role">Student</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
   </nav>

</div>

<section class="home-grid">

   <h1 class="heading">Discover the best educational content online with our curated
       selection of top YouTube channels and learning platforms. 


   </h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">Placement Guide</h3>
         <p class="likes">Total Topics : <span>25</span></p>
         <a href="https://www.youtube.com/playlist?list=PLpyc33gOcbVDwq7y8raY0tURJOOY2GejK" class="inline-btn">Aptitude</a>
         <p class="likes">Total Topics : <span>12</span></p>
         <a href="https://www.youtube.com/playlist?list=PLpyc33gOcbVADMKqylI__O_O_RMeHTyNK" class="inline-btn">Resoning</a>
         <p class="likes">Total Topics: <span>14</span></p>
         <a href="https://www.youtube.com/playlist?list=PLpyc33gOcbVBbD8Vfy-gCbivjSSHbMpUX" class="inline-btn">Verbal</a>
      </div>

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Quiz on popular topics</h3>
         <div class="flex">
            <a href="quiz.php"><i class="fab fa-html5" ></i><span>HTML</span></a>
            <a href="quiz.php"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="quiz.php"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="quiz.php"><i class="fab fa-react"></i><span>react</span></a>
            <a href="quiz.php"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="quiz.php"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">become a tutor</h3>
         <p class="tutor">Join our community of passionate educators and share your expertise with the world! Aspiring tutors are welcomed to our platform.</p>
         <a href="teachers.php" class="inline-btn">get started</a>
      </div>

   </div>

</section>



<section class="courses">

   <h1 class="heading">Our top Reccomended Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic22.jpg" alt="">
            <div class="info">
               <h3>By Harshit vashisth 
               </h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>133 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="https://www.youtube.com/playlist?list=PLwgFb6VsUj_mtXvKDupqdWB2JBiek8YPB" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic33.jpg" alt="">
            <div class="info">
               <h3>By Anuj Bhaiya</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>22 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="https://www.youtube.com/playlist?list=PLhzIaPMgkbxBk9-drEC0MBPqEOXpVlwY4" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic44.jpg" alt="">
            <div class="info">
               <h3>By CodeWithHarry </h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>103 videos</span>
         </div>
         <h3 class="title">complete JS tutorial</h3>
         <a href="https://www.youtube.com/playlist?list=PLu0W_9lII9ahR1blWXxgSlL4y9iQBnLpR" class="inline-btn">view playlist</a>
      </div>

   
   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view all courses</a>
   </div>

</section>







<script src="js/script.js"></script>


   
</body>
</html>