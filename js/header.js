$(document).ready(function () {
  $(".menu-btn").click(function () {
    $(".topnav").addClass("active");
    $(".menu-btn").css("visibility", "hidden");
  });
  $(".close-btn").click(function () {
    $(".topnav").remove(".active");
    $(".menu-btn").css("visibility", "visible");
  });
});

const button = document.querySelector("#button-menu");
const sidebar = document.querySelector(".sidebar");
/*
button.onclick = function () {
  sidebar.classList.toggle("active");
};*/
