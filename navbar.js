$(document).ready(function(){
    $('#menuBtn').click(function(){
      $('.menu').toggleClass('show'); // Toggle the 'show' class on the menu
    });
  });
 
  
  function showDropdownMenu() {
    let toggle = document.getElementById("dropdown-menu");
    if(toggle.style.display == "none"){
      toggle.style.display = "flex";
    }else{
      toggle.style.display = "none";
    }
}