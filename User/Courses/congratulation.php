<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="congratulation.css" />
    <title>SkillNinja</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Finger+Paint&family=Pangolin&family=Rubik+Puddles&family=Ubuntu:wght@600&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Quicksand&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed&display=swap");
      body {
        font-family: "Poppins", sans-serif;
        /* font-family: 'Roboto Condensed', sans-serif; */
        background-color: #f0f0f0;
        text-align: center;
        background-image: url("../Images/congratsbg.jpg");
      }
      .container {
        display: block;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
        margin: auto;
        max-width: 400px;
      }
      h1 {
        color: #3f51b5;
      }
      p {
        font-size: 18px;
      }
      .certificate-img {
        max-width: 100%;
        margin-top: 20px;
      }
      a {
        text-decoration: none;
        background-color: #3f51b5;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s;
      }
      a:hover {
        background-color: #1a237e;
      }
      .navbar {
        display: flex;
        width: 100%;
      }
      .navbar a {
        text-decoration: none;
        background-color: #3f51b5;
        color: #fff;
        padding: 10px 20px;
        font-size: x-large;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s;
      }
      img {
        margin: 0;
      }
    </style>
  </head>
  <body>

    <div class="navbar">
      <a href="../Homepage/index.php" class="active">SkillNinja ⚔︎</a>
    </div>
    <div class="container">
      <img
        src="certificate-image.jpg"
        alt="Certificate Image"
        class="certificate-img"
      />
      <h1>Congratulations!</h1>
      <p>
        You have successfully completed the <strong></strong> on
        <b>SkillNinja</b>.
      </p>
      <p>Here is your well-deserved certificate.</p>
      <a href="#" onclick="myfunction()" id="tag">Get Certificate</a>
      <a href="#" id="back" style="display: none" onclick="generateReport()"
        >Back to Courses</a
      >
    </div>
    <iframe
      src="../certificate/generate_certificate.php"
      frameborder="0"
      width="100%"
      height="700"
      id="my_cert"
      style="display: none"
    ></iframe>
  </body>
  <script>
    function myfunction() {
      document.getElementById("my_cert").style.display = "block";
      document.getElementById("tag").style.display = "none";
      document.getElementById("back").style.display = "block";
    }
    function generateReport() {
      window.location.href = "../User/Homepage/index.php";
    }
  </script>
</html>
