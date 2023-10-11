<!DOCTYPE html>
<html>

<head>
  <title>Certificate</title>
  <link rel="stylesheet" href="certificate.css">
</head>

<body>
  <div class="container">
    <img src="Certificate_page-0001.jpg" alt="Notebook" style="width:100%;">
    <div class="content">
      <?php
      // Get user input
      $username = $_POST['username'];
      $coursename = $_POST['coursename'];

      // Display the certificate
      echo "<h1>".strtoupper($username)."</h1>";
      echo "<h2>".strtoupper($coursename)." Online Course</h2>";
      echo "<h7>" . date('(F j, Y)') . "</h7>";
      ?>
      <!-- Add the download button -->
    </div>
  </div>
  <button><a class="button" id="downloadButton" download>Download</a></button>

  <script>
    // JavaScript to enable image download on button click
    document.getElementById("downloadButton").addEventListener("click", function () {
      var container = document.querySelector(".container");
      html2canvas(container).then(function (canvas) {
        var link = document.createElement("a");
        link.href = canvas.toDataURL("image/jpg");
        link.download = "certificate.jpg";
        link.click();
      });
    });
  </script>

  <!-- Include the html2canvas library -->
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>


</body>

</html>
