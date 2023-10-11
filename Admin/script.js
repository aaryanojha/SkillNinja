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

var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});