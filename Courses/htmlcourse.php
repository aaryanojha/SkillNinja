<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Display All Videos from database using PHP</title>
    <link rel="stylesheet" href="videos.css">
    <link href="https://vjs.zencdn.net/8.5.2/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>
    <div class="nav-bar">
        <a href="html.php"> Back</a>
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
                <video
                    id="my-video"
                    class="video-js"
                    controls
                    preload="auto"
                    width="1360"
                    height="664"
                    poster=""
                    data-setup='{}'
                >
                    <source src="<?php echo '../Admin/upload/' . $name; ?>">
                    <source src="MY_VIDEO.webm" type="video/webm" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                        >
                    </p>
                </video>
            </div>
        <?php
        }
        ?>
    </div>

    <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
    <script>
        var currentVideoIndex = 0;
        var videos = <?php echo json_encode($videos); ?>;
        var video = document.getElementById('my-video');
        var nextBtn = document.getElementById('nextBtn');

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
        });
    </script>
</body>

</html>
