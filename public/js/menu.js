const user_name = document.getElementsByClassName("username_click")[0];
const click_menu = document.getElementsByClassName("click_menu")[0];
document.addEventListener('DOMContentLoaded', function () {
 click_menu.visibility = "hidden";
 user_name.addEventListener('click', () => {
    if (click_menu.style.visibility === "hidden") {
      click_menu.style.visibility = "visible";
    } else {
      click_menu.style.visibility = "hidden";
    }
})
})

const username = document.getElementById("logphoto");
const clickmenu = document.getElementsByClassName("click_menu")[0];
document.addEventListener('DOMContentLoaded', function () {
 clickmenu.visibility = "hidden";
 username.addEventListener('click', () => {
    if (clickmenu.style.visibility === "hidden") {
      clickmenu.style.visibility = "visible";
    } else {
      clickmenu.style.visibility = "hidden";
    }
})
})


