<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="side-bar" id="mySide-bar">
        <a href="admin.php" class="active">SkillNinja ⚔︎</a>
        <a href="">Dashboard</a>
        <a href="userinfo.html"><i class="material-icons" style="position: relative; top: 6%;">person</i> Users</a>
        <a href="courseinfo.html"><i class="material-icons" style="position: relative; top: 6%;">library_books</i> Courses</a>
        <a href="upload.html"><i class="material-icons" style="position: relative; top: 6%;">add</i> Add Courses</a>
        <a href="Enquiryinfo.html"><i class="material-icons" style="position: relative; top: 6%;">message</i> Enquiries</a>
        <a href="../Homepage/index.php"><i class="material-icons" style="position: relative; top: 6%;">exit_to_app</i> Logout</a>
        <a href="javascript:void(0)" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <a href="#none" onclick="bgchange()"><b id="icon">🌙</b></a>
    <div class="container">
        <h1>Welcome, Admin!</h1>
    </div>
    <div class="dashboard">
        <div class="card">
            <h2>Total Users</h2>
            <p id="userCount">
                <?php
                require_once "../Database/functions.php";

                $conn = DBConnect();    
                // Query to get the user count from the database
                $query = "SELECT COUNT(*) AS user_count FROM users"; // Adjust the table name if needed

                // Execute the query
                $result = $conn->query($query);

                if ($result) {
                    // Fetch the user count from the result
                    $row = $result->fetch_assoc();
                    $userCount = $row["user_count"];

                    // Display the user count
                    echo $userCount;

                    // Close the database connection
                    $conn->close();
                } else {
                    echo "Error: " . $conn->error;
                }
                ?>
            </p>
        </div>
        <div class="card">
            <h2>Total Courses</h2>
            <p id="courseCount">0</p>
        </div>
        <div class= "card">
            <h2>Total Revenue</h2>
            <p id="revenueCount">$0</p>
        </div><br>
        <div class="card">
            <h2>Total Revenue</h2>
            <p id="revenueCount">$0</p>
        </div>
    </div>
    <div class="graph">
        <div class="graph-card">
        <div class="bar-graph">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis hendrerit turpis. Phasellus in sapien euismod, sed placerat libero nec nisi. Fusce tincidunt diam id justo. Aenean ac elit eu neque. Curabitur sagittis quam id augue. Vivamus fermentum justo eget massa. 
                Proin gravida risus quis justo.</p><br>
            <div class="bar" style="height: 100px;"></div>
            <div class="bar" style="height: 150px;"></div>
            <div class="bar" style="height: 75px;"></div>
            <div class="bar" style="height: 120px;"></div>
        </div>
        <div class="bar-label">HTML</div>
        <div class="bar-label">CSS</div>
        <div class="bar-label">Bar 3</div>
        <div class="bar-label">Bar 4</div>
        </div>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
</body>
</html>
