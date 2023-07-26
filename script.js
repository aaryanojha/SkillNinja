function openForm() {
    document.getElementById("myForm").style.display = "block";
    

  }
  
  function closeForm(event) {
    event.preventDefault();

    document.getElementById("myForm").style.display = "none";
  }