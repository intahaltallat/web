function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}
  
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}

$(document).ready(function () {
  // Select the sidebar element by its ID
  var sidebarElement = $("#sidebar");

  // Select the collapse button element by its ID
  var collapseButtonElement = $("#sidebarCollapse");

  // Attach a click event listener to the collapse button element
  collapseButtonElement.click(function () {
    // Toggle the 'active' class on the sidebar element
    sidebarElement.toggleClass("active");

    // Toggle the 'active' class on the collapse button element
    collapseButtonElement.toggleClass("active");
  });
});

function validateLogin(){
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  var usernameRegex = /^[a-zA-Z0-9]{4,7}$/;
  if(!usernameRegex.test(username)){
    document.getElementById("demo").innerHTML = "Invalid username. Use only letters and numbers";
    alert("Invalid username. Use only letters and numbers");
    return false;
  }

  if(password.length<6){
    alert("Password must be atleast 6 characters");
    return false;
  }
}
