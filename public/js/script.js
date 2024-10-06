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

function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var usernameRegex = /^[a-zA-Z0-9]{4,7}$/;
    if (!usernameRegex.test(username)) {
        document.getElementById("demo").innerHTML =
            "Invalid username. Use only letters and numbers";
        alert("Invalid username. Use only letters and numbers");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be atleast 6 characters");
        return false;
    }
}

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

function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var usernameRegex = /^[a-zA-Z0-9]{4,7}$/;
    if (!usernameRegex.test(username)) {
        document.getElementById("demo").innerHTML =
            "Invalid username. Use only letters and numbers";
        alert("Invalid username. Use only letters and numbers");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be atleast 6 characters");
        return false;
    }
}

function handle_logout() {
    var indexRoute = document
        .getElementById("logout_button")
        .getAttribute("data-route");

    fetch("/logout", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
    })
        .then((response) => {
            if (response.ok) {
                // If the response status is okay (e.g., 200), redirect to the index page
                return response.json();
            } else {
                // If the response status is not okay, throw an error and handle it below
                throw new Error("Logout failed");
            }
        })
        .then((data) => {
            // Handle the response from the server
            console.log(data.message);

            // Redirect to the index page after successful logout
            window.location.href = indexRoute;
        })
        .catch((error) => {
            console.error("Error:", error);

            // Optionally, handle errors or display a message to the user
        });
}
