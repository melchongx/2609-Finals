function hoverOnHeader() {
    let element = document.getElementById("headerHrID");
    element.classList.add("headerLine-vis");
}
function hoverOffHeader() {
    let element = document.getElementById("headerHrID");
    element.classList.remove("headerLine-vis");
}
function hoverOnStories() {
    let element = document.getElementById("storiesSubULID");
    element.classList.add("storiesSubUL-vis");
}
function hoverOffStories() {
    let element = document.getElementById("storiesSubULID");
    element.classList.remove("storiesSubUL-vis");
}
function toHomePage() {
    window.location.assign("home.php");
}
function toSignupPage() {
    window.location.assign("signup.php");
}
function toLoginPage() {
    window.location.assign("login.php");
}
function showPassword() {
    var x = document.getElementById("passWord");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }