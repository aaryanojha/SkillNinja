function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function openform() {
  document.getElementById("myform").style.display="block";
  document.getElementById("myform").style.backdropFilter="brightness(20%)";
  // document.getElementById("myform").style.backdropFilter="blur(20px)";
}

function closeform() {
  document.getElementById("myform").style.display="none";
}

function openform2() {
  document.getElementById("myform2").style.display="block";
  document.getElementById("myform2").style.backdropFilter="brightness(20%)";
  // document.getElementById("myform").style.backdropFilter="blur(20px)";
}

function closeform2() {
  document.getElementById("myform2").style.display="none";
}

function generateReport() {
  window.location.href = '#mycourses';
}
function generateReport() {
  window.location.href = '#enroll';
}