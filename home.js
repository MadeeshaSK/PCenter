
 
 if (window.location.href.includes("home.html")) {

  // banner
  let slideIndex = 0;

  const images = [
    "images/top_img.png",
    "images/top_img1.png",
    "images/top_img2.png",
    "images/top_img3.png"
  ];

  
  function showSlide(n) {
    if (n >= images.length) { slideIndex = 0; }
    if (n < 0) { slideIndex = images.length - 1; }
    
    document.getElementById("sliderImage").src = images[slideIndex];
    document.getElementById("count").innerText = slideIndex + 1;
  }
  
  function changeSlide(n) {
    showSlide(slideIndex += n);
  }
  
  let index = 0;

function delayedChangeSlide() {
    setTimeout(function() {
        changeSlide(index);
        index++; 
        delayedChangeSlide(); 
    }, 2000);
}

window.onload = () => {
  delayedChangeSlide();
}
document.getElementById("landing page").addEventListener("click", () => {
  window.location.href = "store.html";
})


}

document.getElementById("menubtn").addEventListener("click", () => {
  window.location.href = "login.html";
});

if(window.location.href.includes("Store.html")){
  var products = document.querySelectorAll('.product');
  products.forEach(function(product) {
      product.addEventListener('click', function() {
          var productId = this.id;
          switch (productId) {
              case '1':
                  window.location.href = 'laptop/lap8.html';
                  break;
              case '2':
                  window.location.href = 'laptop/lap1.html';
                  break;
              case '3':
                  window.location.href = 'laptop/lap9.html';
                  break;
              case '4':
                  window.location.href = 'laptop/lap10.html';
                  break;
              case '5':
                  window.location.href = 'laptop/lap2.html';
                  break;
              case '6':
                  window.location.href = 'laptop/lap7.html';
                  break;
              case '7':
                  window.location.href = 'laptop/lap3.html';
                  break;
              case '8':
                  window.location.href = 'laptop/lap12.html';
                  break;
              case '9':
                  window.location.href = 'laptop/lap6.html';
                  break;
              case '10':
                  window.location.href = 'laptop/lap11.html';
                  break;
              case '11':
                  window.location.href = 'laptop/lap5.html';
                  break;
              case '12':
                  window.location.href = 'laptop/lap4.html';
                  break;
              default:
                  console.log('No action defined for this product');
          }
      });
  });
}
  
 


