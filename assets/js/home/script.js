//Preloader load event
$(window).on("load",function(){
  $(".loader-wrapper").fadeOut("slow");
});
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};
// Get the header
var header = document.getElementById("header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
// Smooth scroll active code
var scrollLink = $('.scroll');
    scrollLink.on('click', function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });
// Menu toggler
var element = document.getElementById("list");
function callmenu(){
  if(element.style.left != "0px" || element.style.left == ""){
    element.style.left = "0";}
  else if(element.style.left == "0px"){
    element.style.left = "-1000px"
  }
}