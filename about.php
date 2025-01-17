<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

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
         <h3 class="name">Guest</h3>
         <p class="role">studen</p>
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
      <h3 class="name">kuashal</h3>
      <p class="role">studen</p>
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

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         
            <p>
              Personalized Learning Experience,
               Top-Quality Resources,
               Efficiency and Time-Saving,
               Flexible Learning Options,
               Community Support,
               Proven Results.

            </p>
        
         <a href="courses.php" class="inline-btn">explore more</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+10k</h3>
            <p>online courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+4k</h3>
            <p>brilliant students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2k</h3>
            <p>expert tutors</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <p>job placement</p>
         </div>
      </div>

   </div>

</section> 

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>"I absolutely love this e-learning platform! It's like having a personal tutor guiding me through my studies. The recommendations for learning resources are spot on, always pointing me to the best materials. It's made my learning journey so much smoother and more enjoyable."</p>
         <div class="student">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>John </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"This website has been a game-changer for me. As a busy student, I don't always have the time to sift through countless resources to find the right ones. With this platform, the recommendations are tailored to my needs, saving me so much time and effort. Plus, the resources are top-notch!"</p>
         <div class="student"> 
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Michael</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I've tried a few different e-learning platforms, but none have come close to this one. The way it curates and recommends learning resources is unmatched. Whether I'm studying math, science, or languages, I can always count on finding the best materials here. Highly recommend it ."</p>
         <div class="student">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Sarah</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I can't believe I didn't discover this website sooner! The recommendations for learning resources have been a lifesaver, especially during exam season. I've seen a noticeable improvement in my grades since I started using this platform. It's a must-have "</p>
         <div class="student">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Emily</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I've been using this e-learning platform for a few months now, and I'm blown away by how effective it is. The recommendations for learning resources are incredibly helpful and have helped me grasp difficult concepts much more easily. "</p>
         <div class="student">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Rose</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I stumbled upon this e-learning platform while searching for supplementary materials for my courses, and it's been a game-changer. The recommendations for learning resources are incredibly diverse and cover a wide range of topics. </p>
         <div class="student">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>David</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>
<script src="js/script.js"></script> 
</body>
</html>