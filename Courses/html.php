<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="courses.css">
    <script src="../Homepage/script.js"></script>
</head>

<body>
    <form action="../Database/logindb.php" method="POST">
        <input type="hidden" name="redirectTo" value="Courses/html.php">
        <div class="topnav" id="myTopnav">
            <a href="../Homepage/index.php" class="active"><img src="../Images/logo1.png" alt="" style="zoom: 20%;"></a>
            <a href="#home" class="" style="padding-top: 1.5%;">News</a>
            <a href="#home" class="" style="padding-top: 1.5%;">About</a>
            <!-- <a href="#home" class="" style="float: right; padding-top: 1.5%;" onclick="openform()">Login &emsp;</a> -->
            <?php
            // Check if the user is logged in
            session_start();
            if (isset($_SESSION['username'])) {
                // If logged in, show the username and a logout button
                // echo "Welcome, " . $_SESSION['username'] . "!";
                echo '<a href="../Homepage/logout.php" style="float:right;padding-top: 1.5%">Logout</a>';
            } else { // If not logged in, show the login form 
                echo '<a href="#" onclick="openform()" style="float:right;padding-top: 1.5%">Login</a>';
            } ?>
            <?php
            if (!isset($_SESSION['username'])) { ?>
                <a href="#home" class="" style="float: right; padding-top: 1.5%" onclick="openform2()"><button id="reg-btn"
                        style="pointer-events: none">
                        Join For Free!
                    </button></a>
            <?php } ?>
            <a href="#none" style="padding-top: 1%;">&nbsp;</i><input type="search" name="" id=""
                    class="search-bar">&nbsp;<i id="search-btn" class="fa fa-search"></i></a>
            <a href="javascript:void(0)" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Login -->
        <div class="form-popup" id="myform">
            <div class="form-container">
                <h1>Welcome Back!</h1>
                <a href="#closebtn" class="closebtn" onclick="closeform()"><i class="material-icons">close</i></a>
                <label for="username">USERNAME:</label>
                <input type="text" name="uname" id="" placeholder="Username">
                <label for="password">PASSWORD:</label>
                <input type="password" name="pass" placeholder="Password">
                <p><a href="#forgotpass" style="text-decoration: none;">Forgot Password?</a></p>
                <button type="submit" name="login">Login</button>
                <p>
                    <hr style="width: 45%;float: left;border:1px solid rgb(204, 204, 204);"><b>or</b>
                    <hr style="width: 45%;float: right;border:1px solid rgb(204, 204, 204);">
                </p>
                <p>New to SkillNinja? <a href="#home" onclick="openform2(),closeform()">SignUp</a></p>
            </div>
        </div>
    </form>

    <form action="../Database/registerdb.php" method="POST">
        <input type="hidden" name="redirectTo" value="Courses/html.php">

        <!-- Register -->
        <div class="form-popup" id="myform2" style="display: none;">
            <div class="form-container">
                <h1>Sign Up</h1>
                <a href="#closebtn" class="closebtn" onclick="closeform2()"><i class="material-icons">close</i></a>
                <label for="Fullname">Full Name:</label>
                <input type="text" name="fullname" id="" placeholder="Enter Your Full Name">

                <label for="username1">Username:</label>
                <input type="text" id="username" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?" min="0" max="99"
                    oninvalid="this.setCustomValidity('Username must be a combination lowercase alphabets and numbers only!')"
                    maxlength="12" name="username" id="" placeholder="Create a Username">
                <label for="password1">Password:</label>
                <input type="password" name="password" id="password" required pattern="[a-z]{4,8}[0-9][0-9]{1,9}?"
                    oninvalid="this.setCustomValidity('Password must contain atleast 4 alphabets and a number!')"
                    maxlength="12" placeholder="Password">

                <button type="submit" name="signup">Join Now!</button>
                <p>
                    <hr style="width: 45%;float: left;border:1px solid rgb(204, 204, 204);"><b>or</b>
                    <hr style="width: 45%;float: right;border:1px solid rgb(204, 204, 204);">
                </p>
                <p>Already a user? <a href="#home" onclick="openform(),closeform2()">Login</a></p>
            </div>
        </div>
    </form>
    <div class="mainbody">
        <div class="content">

            <a href="#enroll"><button>Enroll Now!</button></a>
        </div>
        <div class="rating-card">
            <span class="span1">4.6 <span class="fa fa-star checked"></span></span>
            <span>Hello sexy prnav</span>
            <span style="text-align: right;">Flexible schedule Learn at your own pace</span>
        </div>
        <div class="info">
            <h2>Skills you'll gain</h2>
            <p> HTML </p>
            <h2>Course Description:</h2>
            <span>Discover the fundamental world of HTML in our beginner course tailored for budding web developers.
                Uncover
                the core concepts of<br> structuring content and get hands-on experience crafting your own web pages. No
                prior
                coding knowledge required - start your web development journey here.</span>
        </div>
        <div class="modules-info">
            <h1>There are 5 modules in this course</h1>
            <p>
                Explore the fundamentals of web development with our Basic HTML online course. Designed for beginners,
                this
                course covers essential HTML concepts such as creating content, adding links, and incorporating images.
                Through interactive lessons and expert guidance, you'll gain the skills needed to build your own web
                pages
                from scratch. Join us today and start your journey into the world of web development!</p>
        </div>
        <div class="modules">
            <div>
                <h2>Introduction to HTML</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 1:</li>
            </div>
            <hr>
            <div>
                <h2>Working of HTML</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 2:</li>
            </div>
            <hr>
            <div>
                <h2>Web Development Using HTML</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 3:</li>
            </div>
            <hr>
            <div>
                <h2>Working of HTML CSS, JS</h2><span><i class="fa fa-angle-down" style="font-size:36px"></i></span>
                <li>Module 4:</li>
            </div>
            <hr>
        </div>
        <div class="certi-info">
            <h1>Earn a career certificate</h1>
            Add this credential to your LinkedIn profile, resume, or CV

            Share it on social media and in your performance review
        </div>
        <img src="../Images/certificate.png" alt="" class="cert-img">
    </div>
    <div class="enroll">
        <?php
        require_once('../Database/functions.php');
        function generatePaymentHTML()
        {
            $html = '<a href="../Payment/payment.php"><button type="submit" id="enroll">Start Course</button></a>';
            $result = display_payment($_SESSION['u_id']);
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $PaymentId = $row["id"];
                if (isset($PaymentId)) {
                    $html = '<a href="htmlcourse.php"><button type="submit" id="enroll">Start Course</button></a>';
                }
            }
            return $html;
        }
        if (!isset($_SESSION['username'])) {
            echo '<button type="submit" id="enroll"onclick="openform()">Enroll Now</button>';
        }
        if (isset($_SESSION['username'])) {
         $paymentCheckHtml = generatePaymentHTML();
        echo $paymentCheckHtml;
        }
    
        ?>
    </div>
    <footer>
        <ul>
            <li>
                <h4><a href="" class="">About Us</a></h4>
            </li>
            <li><a href="index.php">Home</a></li>
        </ul>
        <hr style="width: 90%;">
        <p><i class="fa fa-copyright"></i> 2023 SkillNinja Inc. All rights reserved.</p>
    </footer>
</body>

</html>