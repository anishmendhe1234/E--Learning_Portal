<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>

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
    <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
        // If user is logged in, display their profile information
        echo '<img src="images/pic-1.jpg" class="image" alt="">';
        echo '<h3 class="name">' . $_SESSION['user_name'] . '</h3>'; // Display user's name
        echo '<p class="role">student</p>';
        echo '<a href="profile.php" class="btn">view profile</a>';
        echo '<div class="flex-btn">';
        echo '<a href="logout.php" class="option-btn">Logout</a>'; // Add logout button
        echo '</div>';
    } else {
        // If user is not logged in, display a message or prompt them to log in
        echo '<p>Please log in to view your profile</p>';
        echo '<a href="login.php" class="btn">Login</a>';
    }
    ?>
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

<section class="user-profile">

   <h1 class="heading">your profile</h1>

   <div class="info">

      <div class="user">
      <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
        // If user is logged in, display their profile information
        echo '<img src="images/pic-1.jpg" class="image" alt="">'; // You may want to dynamically load the user's profile picture
        echo '<h3 class="name">' . $_SESSION['full_name'] . '</h3>'; // Display user's full name
        echo '<p class="role">student</p>'; // Assuming the role is always "student" for now
        echo '<a href="profile.php" class="btn">View Profile</a>'; // Link to view profile page
        echo '<div class="flex-btn">';
        echo '<a href="logout.php" class="option-btn">Logout</a>'; // Add logout button
        echo '</div>';
    } else {
        // If user is not logged in, display default information
        echo '<img src="images/pic-1.jpg" class="image" alt="">'; // Default profile picture
        echo '<h3 class="name">Guest77</h3>'; // Default name
        echo '<p class="role">student</p>'; // Default role
    }
    ?>
         <a href="update.php" class="inline-btn">update profile</a>
      </div>
   
      <div class="box-container">
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-bookmark"></i>
               <div>
                  <span>4</span>
                  <p>saved playlist</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view playlists</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-heart"></i>
               <div>
                  <span>33</span>
                  <p>videos liked</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view liked</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-comment"></i>
               <div>
                  <span>12</span>
                  <p>videos comments</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view comments</a>
         </div>
   
      </div>
   </div>

</section>
<script src="js/script.js"></script>
</body>
</html>