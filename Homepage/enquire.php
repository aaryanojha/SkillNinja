<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- <link rel="stylesheet" href="enquire.css" type="text/css" /> -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="topnav" id="myTopnav">
    <a href="#home" class="active"><img src="../Images/logo1.png" alt="" style="zoom: 20%" /></a>
    <a href="#home" class="" style="padding-top: 1.5%">News</a>
    <a href="#home" class="" style="padding-top: 1.5%">About Us</a>
    <a href="enquire.php" class="" style="padding-top: 1.5%">Enquire</a>
    <?php echo "Welcome, <br>" . $_SESSION['username'] . "!"; ?>
    <!-- <a href="#home" class="" style="float: right; padding-top: 1.5%" onclick="openform()">Login &emsp;</a> -->
    <?php
    // Check if the user is logged in
    session_start();
    if (isset($_SESSION['username'])) {
      // If logged in, show the username and a logout button
      // echo "Welcome, " . $_SESSION['username'] . "!";
      echo '<a href="logout.php" style="float:right;padding-top: 1.5%">Logout</a>';
    } else { // If not logged in, show the login form 
      echo '<a href="#" onclick="showLogin()" style="float:right;padding-top: 1.5%;">Login</a>';
    } ?>
    <?php
    if (!isset($_SESSION['username'])) { ?>
      <a href="#home" class="" style="float: right; padding-top: 1.5%" onclick="openform2()"><button id="reg-btn"
          style="pointer-events: none">
          Join For Free!
        </button></a>
    <?php } ?>
    <a href="#none" style="padding-top: 1%">&nbsp;<input type="search" name="" id="" class="search-bar" />&nbsp;<i
        id="search-btn" class="fa fa-search"></i></a>
    <a href="javascript:void(0)" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>

  </div>
  <!-- Login -->
  <div class="form-popup" id="myform">
    <div class="form-container">
      <h1>Welcome Back!</h1>
      <a href="#closebtn" class="closebtn" onclick="closeform()"><i class="material-icons">close</i></a>
      <form action="../Database/logindb.php" method="POST">
        <input type="hidden" name="redirectTo" value="Homepage/index.php">
        <label for="username">USERNAME:</label>
        <input type="text" name="uname" id="" placeholder="Username" />
        <label for="password">PASSWORD:</label>
        <input type="password" name="pass" placeholder="Password" />
        <p>
          <a href="#forgotpass" style="text-decoration: none">Forgot Password?</a>
        </p>
        <button type="submit" name="login" value="login">Login</button>
      </form>
      <hr style="
              width: 45%;
              float: left;
              border: 1px solid rgb(204, 204, 204);
            " />
      <b>or</b>
      <hr style="
              width: 45%;
              float: right;
              border: 1px solid rgb(204, 204, 204);
            " />

      <p>
        New to SkillNinja?
        <a href="#home" onclick="openform2(),closeform()">SignUp</a>
      </p>
    </div>
  </div>

  <form action="../Database/registerdb.php" method="POST">
    <input type="hidden" name="redirectTo" value="Homepage/index.php">
    <!-- Register -->
    <div class="form-popup" id="myform2" style="display: none">
      <div class="form-container">
        <h1>Sign Up</h1>
        <a href="#closebtn" class="closebtn" onclick="closeform2()"><i class="material-icons">close</i></a>
        <label for="Fullname">Full Name:</label>
        <input type="text" name="fullname" id="" placeholder="Enter Your Full Name" />
        <label for="username1">Username:</label>
        <input type="text" id="username" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?" min="0" max="99"
          oninvalid="this.setCustomValidity('Username must be a combination lowercase alphabets and numbers only!')"
          maxlength="12" name="username" id="" placeholder="Create a Username" />
        <label for="password1">Password:</label>
        <input type="password" name="password" id="password" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?"
          oninvalid="this.setCustomValidity('Password must contain atleast 4 alphabets and a number!')" maxlength="12"
          placeholder="Password" />

        <button type="submit" name="signup">Join Now!</button>

        <hr style="
              width: 45%;
              float: left;
              border: 1px solid rgb(204, 204, 204);
            " />
        <b>or</b>
        <hr style="
              width: 45%;
              float: right;
              border: 1px solid rgb(204, 204, 204);
            " />
        <p>
          Already a user?
          <a href="#home" onclick="openform(),closeform2()">Login</a>
        </p>
      </div>
    </div>
  </form>


    <div class="enquiry">
      <div class="content">
        <h3 style="color:#ff6d12; font-size:6vh ">Send Enquiry:</h3>
        <input type=text name="fname" placeholder="Enter First Name">
        <input type=text name="lname" placeholder="Enter Last Name">
        <input type=email name=email placeholder="Enter Your Email">
        <p><textarea name="message" id="" cols="25" rows="10" placeholder="Message" class=txta></textarea></p>
        <p><button class="btnenq" name=enquire>Enquire</button></p>
      </div>
    </div>
  </form>
</body>

</html>

<?php
if (isset($_POST['enquire'])) {

  $Fname = $_POST['fname'];
  $Lname = $_POST['lname'];
  $Email = $_POST['email'];
  $Message = $_POST['message'];


  //Connect to the MySQL database
  require_once('../Database/functions.php');

  $conn = DBConnect();

  if (!empty($Fname) && !empty($Lname) && !empty($Email) && !empty($Message)) {
    $INSERT = "INSERT Into enquiries(Frist_name,Last_Name,Email,Message) values(?,?,?,?)";
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssss", $Fname, $Lname, $Email, $Message);
    $stmt->execute();

    // $INSERT = "INSERT Into enquiries(Frist_name,Last_name,Email,Message) values('$Fname','$Lname','$Email','$Message')";
    // $result = $conn->query($INSERT);

    echo "<script> alert('Enquiry Sent Successfully.');
    window.location.href='../Enquire/enquire.php';
    </script>";


  } else {
    echo "<script> alert('Please enter all the details.');
            window.location.href='../Enquire/enquire.php';
            </script>";
  }
}
?>