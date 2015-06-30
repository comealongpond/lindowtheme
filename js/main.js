/* 
CODE FOR THE FULL PAGE NAVIGATION TOGGLE
*/
$(document).ready(function() {
    $(".nav-toggle-open").click(function(){
      $(".nav-toggle-open").removeClass("show");
      $(".nav-toggle-open").addClass("hide");
      $(".nav-toggle-close").removeClass("hide");
      $(".nav-toggle-close").addClass("show"); 
      $(".full-overlay").addClass("show");
      $(".full-overlay").removeClass("hide");

      //Block scrolling when menu is open
      $('html, body').css({
        'overflow': 'hidden',
        'height': '100%'
});
    });
});
$(document).ready(function() {
    $(".nav-toggle-close").click(function(){
      $(".nav-toggle-close").removeClass("show");
      $(".nav-toggle-close").addClass("hide");
      $(".nav-toggle-open").removeClass("hide");
      $(".nav-toggle-open").addClass("show"); 
      $(".full-overlay").removeClass("show");
      $(".full-overlay").addClass("hide");

      //Allow scrolling again once menu is closed
      $('html, body').css({
        'overflow': 'auto',
        'height': 'auto'
});
    });
});
/* END OF FULL PAGE NAVIGATION CODE */

/* To make the sidebar the same height as the content area */
var setSideBarHeight = function()
{
	var h = $("#content").height();
  if(h > $("#sidebar").height())
  {
    $("#sidebar").css("height", h + "px");
  }
  else
  {
    $("#content").css("height", $("#sidebar").height()+ "px");
  }
}

$(window).on('load', function(){
  setSideBarHeight();
});

$(window).resize(function() 
{
  setSideBarHeight();
});
