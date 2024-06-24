<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

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
         <?php
         if(isset($_POST["submit"])){
         $name = $_POST["name"];
         $email = $_POST["email"];
         $pass = $_POST["pass"];
         $c_pass = $_POST["c_pass"];
         $password_hash = password_hash($pass, PASSWORD_DEFAULT);
     
         $errors = array();
         if (empty($name) || empty($email) || empty($pass) || empty($c_pass)){
             array_push($errors, "All fields are required");
         }
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
             array_push($errors, "Email is not valid");
         }
         if (strlen($pass) < 9){
             array_push($errors, "Password must be 9 characters long");
         }
         if ($pass !== $c_pass){
             array_push($errors, "Passwords do not match");
         }
         $sql= "SELECT * FROM users where email='$email'";
         require_once "database.php";
         $result = mysqli_query($conn,$sql);
         $rowCount = mysqli_num_rows($result);
         if ($rowCount>0) {
           array_push($errors,"Email already exist");
         }
         if (count($errors) > 0) {
             foreach ($errors as $error) {
                 echo "<div class='alert alert-danger'>$error</div>";
             }
         } else {
             $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
             $stmt = mysqli_stmt_init($conn);
             
             if ($stmt) {
                 mysqli_stmt_prepare($stmt, $sql);
                 mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password_hash);
                 mysqli_stmt_execute($stmt);
                 echo "<div class='alert alert-success'>You are registered successfully.</div>";
             } else {
                 die("Something went wrong");
             }
             
             mysqli_stmt_close($stmt);
         }
     }
     
   ?>

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
      <p class="role">student</p>
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

<section class="form-container">

   <form action="register.php" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <p> Name <span>*</span></p>
      <input type="text" name="name" placeholder="Enter Name" required maxlength="50" class="box">
      <p> Email <span>*</span></p>
      <input type="email" name="email" placeholder="Enter Email" required maxlength="50" class="box">
      <p> password <span>*</span></p>
      <input type="password" name="pass" placeholder="Enter Password" required maxlength="20" class="box">
      <p>confirm password <span>*</span></p>
      <input type="password" name="c_pass" placeholder="Confirm Password" required maxlength="20" class="box">
      <p>Profile <span>*</span></p>
      <input type="text" name="profile" placeholder="Student/Tutor" required maxlength="50" class="box">
      <input type="submit" value="register new" name="submit" class="btn">
   </form>

</section>
<script src="js/script.js"></script>
</body>
</html>