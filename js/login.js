document.getElementById("loginButton").addEventListener("click", loginFunc);

function loginFunc() {
    let email = document.getElementById("form2Example17").value
    let password = document.getElementById("form2Example27").value

    // Needs DB integration
    if (email && password) {
        window.location.href = " /dashboard.html";
    }
    else {
        alert("Invalid login. Please try again.")
    }
}
