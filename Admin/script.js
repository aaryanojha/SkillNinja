function myFunction() {
    var x = document.getElementById("mySide-bar");
    if (x.className === "side-bar") {
      x.className += " responsive";
    } else {
      x.className = "side-bar";
    }
  }
  
  function bgchange() {
    var body = document.body;
    var textColor = body.style.color;
    var bgColor = body.style.backgroundColor;

    if (bgColor === "whitesmoke") {
        body.style.backgroundColor = "black";
        body.style.color = "white";
        icon.textContent = "☀️";
    } else {
        body.style.backgroundColor = "whitesmoke";
        body.style.color = "black";
        icon.textContent = "🌙";
    }
}
