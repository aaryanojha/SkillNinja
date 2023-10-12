<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Display All Videos from database using PHP</title>
    <link rel="stylesheet" href="videos.css">
    <link href="https://vjs.zencdn.net/8.5.2/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>
    <div class="nav-bar">
        <a href="#" onclick="myFunction()"> Back</a>
    </div>
    <div class="alert-box" style="display:none" id="alert-box">
        <strong>NOTE:-</strong> You will lose all your progress without and would have to start again.
        <strong>Are you Sure you want to go <a href="html.php" style="color:yellow">back?</a></strong>
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
    <div class="side-bar">
        <Button id="nextBtn" style="display:none;">Next</Button>
    </div>
    <div class="row">
        <?php
        include("../Admin/db.php");
        $q = "SELECT * FROM video";
        $query = mysqli_query($conn, $q);
        $videos = mysqli_fetch_all($query, MYSQLI_ASSOC);

        if (!empty($videos)) {
            $currentVideoIndex = 0;
            $name = $videos[$currentVideoIndex]['name'];
            ?>
            <div class="col-md-4">
                <video id="my-video" class="video-js" controls preload="auto" width="1360" height="664" poster=""
                    data-setup='{
                        "controlBar": {
                            "seekToLive": true,
                            "progressControl": true
                        }
                    }'>
                    <source src="<?php echo '../Admin/upload/' . $name; ?>">
                    <source src="MY_VIDEO.webm" type="video/webm" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
                <div class="custom-button">
                    <button id="seekBackBtn" class=""><i class="fa fa-backward"> 5s</i></button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
    <script>

        function myFunction() {
            document.getElementById("alert-box").style.display = "block";
        }

        var currentVideoIndex = 0;
        var videos = <?php echo json_encode($videos); ?>;
        var video = document.getElementById('my-video');
        var nextBtn = document.getElementById('nextBtn');
        var seekBackBtn = document.getElementById('seekBackBtn');

        video.addEventListener('ended', function () {
            showNextButton();
        });

        function showNextButton() {
            nextBtn.style.display = 'block';
        }

        nextBtn.addEventListener('click', function () {
            if (currentVideoIndex < videos.length - 1) {
                currentVideoIndex++;
                var nextVideoSource = '<?php echo '../Admin/upload/'; ?>' + videos[currentVideoIndex].name;
                video.src = nextVideoSource;
                video.load();
                video.play();
                nextBtn.style.display = 'none';
            }
            else {
                <?php
                session_start();
                $u_id = $_SESSION["u_id"];
                $c_id = $_SESSION["courseid"];
                // Connect to the database
                require_once "../Database/functions.php";
                $conn = DBConnect();
                $INSERT = "INSERT Into course_users(c_id,u_id) values('$c_id','$u_id')";
                $result = $conn->query($INSERT);
                ?>
                window.location.href = 'congratulation.html';
            }
        });

        seekBackBtn.addEventListener('click', function () {
            if (video.currentTime >= 5) {
                video.currentTime -= 5; // Seek 5 seconds back
            } else {
                video.currentTime = 0; // If already at the start, jump to the beginning
            }
        });
    </script>
</body>

</html>