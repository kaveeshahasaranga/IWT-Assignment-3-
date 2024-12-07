document.getElementById("tipsForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
   
    var tip = document.getElementById("tip").value;
    var image = document.getElementById("image").value;
    var description = document.getElementById("description").value;
    
    
    document.getElementById("tip").value = "";
    document.getElementById("image").value = "";
    document.getElementById("description").value = "";
  });