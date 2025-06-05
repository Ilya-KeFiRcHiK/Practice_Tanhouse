document.querySelector("#menu-toggle").addEventListener("click", function(e){
    const menuList = document.querySelector(".menu-list");
    if (menuList.classList.contains('show')) {
        menuList.classList.remove("show");
    } else {
        menuList.classList.add("show");
    }
});





