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
}

function closeform() {
  document.getElementById("myform").style.display="none";
}