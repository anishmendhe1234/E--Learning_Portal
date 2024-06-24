<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update</title>

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
    $old_pass = $_POST["old_pass"];
    $new_pass = $_POST["new_pass"];
    $c_pass = $_POST["c_pass"];
    
    $errors = array();
    if (empty($name) || empty($email) || empty($old_pass) || empty($new_pass) || empty($c_pass)){
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
    }
    if (strlen($new_pass) < 9){
        array_push($errors, "Password must be 9 characters long");
    }
    if ($new_pass !== $c_pass){
        array_push($errors, "Passwords do not match");
    }

    // Include database connection
    require_once "database.php";
    
    if (count($errors) === 0) {
        // Hash the new password
        $password_hash = password_hash($new_pass, PASSWORD_DEFAULT);

        // Prepare the SQL statement with placeholders for security
        $sql = "UPDATE users SET name=?, email=?, password=? WHERE email=? AND password=?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            // Bind parameters and execute the statement
            mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $password_hash, $email, $old_pass);
            mysqli_stmt_execute($stmt);

            // Check if any rows were affected
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<div class='alert alert-success'>Profile updated successfully.</div>";
            } else {
                echo "<div class='alert alert-danger'>Invalid email or password.</div>";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<div class='alert alert-danger'>Error updating profile.</div>";
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }

    // Close the database connection
    mysqli_close($conn);
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
      <h3 class="name">kaushal</h3>
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

   <form action="update.php" method="post" enctype="multipart/form-data">
      <h3>update profile</h3>
      <p>update name</p>
      <input type="text" name="name" placeholder="Guest" maxlength="50" class="box">
      <p>update email</p>
      <input type="email" name="email" placeholder="@gmail.come" maxlength="50" class="box">
      <p>previous password</p>
      <input type="password" name="old_pass" placeholder="enter your old password" maxlength="20" class="box">
      <p>new password</p>
      <input type="password" name="new_pass" placeholder="enter your old password" maxlength="20" class="box">
      <p>confirm password</p>
      <input type="password" name="c_pass" placeholder="confirm your new password" maxlength="20" class="box">
      <p>update pic</p>
      <input type="file" accept="image/*" class="box">
      <input type="submit" value="update profile" name="submit" class="btn">
   </form>

</section>
<script src="js/script.js"></script>
</body>
</html>