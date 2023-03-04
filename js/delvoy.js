
document.addEventListener("DOMContentLoaded", () => {



  //ADD FIXED HEADER OVER SCROLL
  if (window.matchMedia("(min-width: 992px)").matches) {
    // Only run the following code on devices over 992px width

    var masthead = document.querySelector("#masthead");
    var mastheadHeight = masthead.offsetHeight;

    window.addEventListener("scroll", function() {
      var scrollHeight = window.pageYOffset;

      if (scrollHeight > mastheadHeight) {
        masthead.classList.add("fixed-header");
      } else {
        masthead.classList.remove("fixed-header");
      }
    });
  }



  });
  
  
  
  
  
  
  