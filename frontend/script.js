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