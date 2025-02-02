<?php 
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assignment Frontend/css/buyer.css">
    <link rel="stylesheet" href="../Assignment Frontend/navbar/navbar.css">
    <link rel="stylesheet" href="../Assignment Frontend/css/footer.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar-container">
        <div class="navbar">
          <div class="logo">
            <a href="home.html"><img src="images/logo.png" alt="#" /></a>
          </div>
          <div class="link">
            <div class="menu">
              <nav>
                <ul>
                  <li><a href="home.html">HOME</a></li>
                  <li><a href="about.html">ABOUT</a></li>
                  <li><a href="contact.html">CONTACT US</a></li>
                </ul>
              </nav>
            </div>
            <div class="buttons">
                <button class="button sign-in1" id="menubtn">Sign in</button>
            </div>
            </div>
            <button class="button menu-btn" onclick="showDropdownMenu()">&#9776;</button>
          </div>
        <div class="dropdown-menu" id="dropdown-menu">
          <nav>
            <ul>
              <li><a href="home.html">HOME</a></li>
              <li><a href="about.html">ABOUT</a></li>
              <li><a href="contact.html">CONTACT US</a></li>
            </ul>
          </nav>
          <button class="button sign-in2" id="landing page 1">Sign in</button>
        </div>
      </div>
      <br>
      <br>
      <br>
    <div class="container">
        <div class="center">
            <div class="title">Shipping information</div>
        <form action="c:/xampp/htdocs/form data.php" method="post">
            <input type="email" id="e-mail" placeholder="E-mail" class="input">
            <div class="horizontalhalf-devider">
                <input type="text" id="f-name" placeholder="First name" class="input">
                <input type="text" id="l-name" placeholder="Last name" class="input">
            </div>
            <input type="text" id="address" placeholder="Street address" class="input">
            <div class="horizontalhalf-devider">
                <input type="text" id="town" placeholder="Town" class="input">
                <input type="text" id="postel-code" placeholder="Postel code" class="input">
            </div>
            <input type="number" id="phone" placeholder="Phone" class="input">
            <button type="submit" class="submitbtn" id="submitbutton">Place Order</button>
        </form> 
        </div>     
    </div>
    <script src="home.js"></script>

    <footer class="footer_main">
      <div class="footer_contain_1">
          <div class="footer_content">
              <div class="footer_detail">
                  <img id="footer_logo" src="images/logo.png" alt="pcoint logo">
                      <h1 id="d1">Buy your dream PC or Laptop</h1>
                      <h2 id="d2">About</h2>
                      <p id="p1">Welcome to our website, your ultimate destination for all things technology. 
                          We are committed to providing you with the very best in computer parts, offering a perfect blend of quality,
                          competitive pricing, and renowned brands.At our store, you'll find an extensive selection of premium brands, like INTEL, AMD, ASUS, and DELL in industry giants.</p>          
              </div>
              <div class="footer_detail">
                  <div class="detail_content">
                      <h2 id="d2">Branches</h2>
                      <div class="Branches">
                          <div class="b1">
                              <h3 id="d3">Colombo</h3>
                              <address>No 95, Gall Rd</address>
                              <address>Dehiwala</address>
                          </div>
                          <div class="b1">
                              <h3 id="d3">Galle</h3>
                              <address>88/7,Kithulampitiya</address>
                              <address>Galle</address>
                          </div>
                          
                      </div>
                      <h2 id="d2">Contact Us</h2>
                      <div class="Contact_us">
                          <a href="#">0772678223</a>
                          <a href="#">0112231314</a>
                          <a href="#">Pcenterofficial@gmail.com</a> 
                      </div>
                      
                      <div class="Follow_Us">
                          <a href=""><i class="fa-brands fa-facebook"></i></a>
                          <a href=""><i class="fa-brands fa-instagram"></i></a>
                          <a href=""><i class="fa-brands fa-twitter"></i></a>
                          <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                      </div>
                  </div>
                  
                  
              </div>
              <div class="footer_detail">
                  <div class="detail_content">
                      <h2 id="d2">Quick Links</h2>
                      <div class="Quick_links">
                          <p>Home</p><p>Store</p><p>About</p><p>Contact</p>
                      </div>
                      <h2 id="d2">Services</h2>
                      <div class="Services">
                          <p>Product Sales</p>
                          <p>Technical Support</p>
                          <p>Repair and Maintenance</p>
                          <p>Warranty and Returns</p>                          
                      </div>
                      
                      <h2 id="d2">Opening Hours</h2>
                      <div class="Opening_hours">
                          <table class="Time_table">
                              <tr>
                                 <td><b>Monday - Friday</b></td>
                                 <td><time>9.00 am - 5.00 pm</time></td> 
                              </tr>
                              <tr>
                                  <td><b>Saturday</b></td>
                                  <td><time>10.00 am - 3.00 pm</b></time></td> 
                               </tr>
                               <tr>
                                  <td><b>Sunday</b></td>
                                  <td><time>8.00 am - 2.00 pm</b></time></td> 
                               </tr>
                          </table>
                          
                      </div>

                  </div>
              </div>
          </div>
          
      </div>    
      <div class="footer_contain_2" style="background-color: rgba(14, 232, 151,0.9);">
          <p>© 2024 Copyright: <a href="Pcenter.org">Pcenter.com</a></p>
      </div>
  </footer>
</body>
</html>