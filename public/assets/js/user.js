const sideBtn = document.getElementById("aside");
// const toggle = document.getElementById("nav-toggle");
const toggleBtn = document.querySelector(".fa-angles-left");
const main = document.getElementById("main");
const footer = document.getElementById("fo");
// let list = document.querySelectorAll("body #aside .dashboard-links .dash-list");
// const title = document.getElementById("titled");

const toggleButton = () => {
    sideBtn.classList.toggle('close');
    // if (toggleBtn.classList.contains("fa-angles-left")) {
    //     toggleBtn.classList.remove('fa-angles-left');
    // }
    // else {
    //     if (toggleBtn.classList.remove("fa-angles-left")) {
    //         toggleBtn.classList.add('fa-angles-right');
    //     }
    //     else{
    //         toggleBtn.classList.add('fa-angles-left');
    //     }
    // }
    toggleBtn.classList.toggle('fa-angles-left');
    toggleBtn.classList.toggle('fa-angles-right');
    main.classList.toggle('active');
    footer.classList.toggle('active');
    // title.classList.toggle('active');
}
// function activeLink(){
//     list.forEach(item=>{
//         item.classList.remove("hovered");
//     });
//     this.classList.add("hovered");
// }

// list.forEach((item) => item.addEventListener("mouseover", activeLink));

// toggleButton();