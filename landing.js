

  // slides
const slides = [
  [
    "images/store/asus/1.png",
    "images/store/asus/2.png",
    "images/store/asus/3.png",
    "images/store/asus/4.png"
  ],
  [
    "images/store/acer/1.png",
    "images/store/acer/2.png",
    "images/store/acer/3.png",
    "images/store/acer/4.png"
  ],
  [
    "images/store/gigabyte/1.png",
    "images/store/gigabyte/2.png",
    "images/store/gigabyte/3.png",
    "images/store/gigabyte/4.png"
  ],
  [
    "images/store/hp/1.png",
    "images/store/hp/2.png",
    "images/store/hp/3.png",
    "images/store/hp/4.png"
  ],
  [
    "images/store/lenevo/1.png",
    "images/store/lenevo/2.png",
    "images/store/lenevo/3.png",
    "images/store/lenevo/4.png"
  ],
  [
    "images/store/msi/1.png",
    "images/store/msi/2.png",
    "images/store/msi/3.png",
    "images/store/msi/4.png"
  ],
  [
    "images/store/msi2/1.png",
    "images/store/msi2/2.png",
    "images/store/msi2/3.png",
    "images/store/msi2/4.png"
  ],
  [
    "images/store/rog/1.png",
    "images/store/rog/2.png",
    "images/store/rog/3.png",
    "images/store/rog/4.png"
  ],
  [
    "images/store/rog2/1.png",
    "images/store/rog2/2.png",
    "images/store/rog2/3.png",
    "images/store/rog2/4.png"
  ],
  [
    "images/store/rpg3/1.png",
    "images/store/rpg3/2.png",
    "images/store/rpg3/3.png",
    "images/store/rpg3/4.png"
  ],
  [
    "images/store/vivobook/1.png",
    "images/store/vivobook/2.png",
    "images/store/vivobook/3.png",
    "images/store/vivobook/4.png"
  ],
  [
    "images/store/zenbook/1.png",
    "images/store/zenbook/2.png",
    "images/store/zenbook/3.png",
    "images/store/zenbook/4.png"
  ]
      
      
];

function slideChange(y, n){
  document.getElementById("sliderImage").src = slides[y][n];
}

document.getElementById("buynow").addEventListener("click", () => {
  window.location.href = "http://localhost/Assignment%20Frontend/buyer.php";
});



  

