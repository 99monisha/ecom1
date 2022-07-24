<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My e-commerce website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
    <div class="section1" id="home">
    <div class="part1">
    <div class="navi">
        <div class="main-logo">DIAMOND </div>
        <nav>
        <ul id="menuitems">
            <li class="active"><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="item.html"class="menu-btn">Product</a></li>
            <li><a href="#sale"class="menu-btn">Sale</a></li>
            <li><a href="#company"class="menu-btn">Company</a></li>
            <li><a href="cart.html"class="menu-btn">Cart</a></li>
            <li><a href="#contact"class="menu-btn">Contact</a></li>
</ul>
</nav>
<img src="images/11.PNG" class="menu" onclick="menutoggle()">
<a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
</div>

      <!--subproduct section-->   
      <div class="sub-sec2">
<div class="row row11">
    <h2>Our Products</h2>
    <select>
        <option>Defalt</option>
        <option>Short by sale</option>
        <option>Short by price</option>
        <option>Short by rating</option>
        <option>Short by value</option>
    </select>
</div>



        <div class="row">
            <div class="column2">
                <img src="images/5.jpg">
                <h4>Designer Necklase Set</h4>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p>$100.00</p>
            </div>
            <div class="column2">
              <img src="images/4.jpg">
              <h4>Designer Necklase Set</h4>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <p>$100.00</p>
          </div>
          <div class="column2">
              <img src="images/6.jpg">
              <h4>Designer Necklase Set</h4>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <p>$100.00</p>
          </div>
          <div class="column2">
              <img src="images/2d.jpg">
              <h4>Designer Necklase Set</h4>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <p>$100.00</p>
          </div>
          <div class="column2">
            <img src="images/5.jpg">
            <h4>Designer Necklase Set</h4>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <p>$100.00</p>
        </div>
        <div class="column2">
          <img src="images/4.jpg">
          <h4>Designer Necklase Set</h4>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$100.00</p>
      </div>
      <div class="column2">
          <img src="images/6.jpg">
          <h4>Designer Necklase Set</h4>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$100.00</p>
      </div>
      <div class="column2">
          <img src="images/2d.jpg">
          <h4>Designer Necklase Set</h4>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>$100.00</p>
      </div>
      <div class="column2">
        <img src="images/5.jpg">
        <h4>Designer Necklase Set</h4>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>$100.00</p>
    </div>
    <div class="column2">
      <img src="images/4.jpg">
      <h4>Designer Necklase Set</h4>
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>$100.00</p>
  </div>
  <div class="column2">
      <img src="images/6.jpg">
      <h4>Designer Necklase Set</h4>
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>$100.00</p>
  </div>
  <div class="column2">
      <img src="images/2d.jpg">
      <h4>Designer Necklase Set</h4>
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>$100.00</p>
  </div>
  <div class="column2">
    <img src="images/5.jpg">
    <h4>Designer Necklase Set</h4>
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
    </div>
    <p>$100.00</p>
</div>
<div class="column2">
  <img src="images/4.jpg">
  <h4>Designer Necklase Set</h4>
  <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
  </div>
  <p>$100.00</p>
</div>
<div class="column2">
  <img src="images/6.jpg">
  <h4>Designer Necklase Set</h4>
  <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
  </div>
  <p>$100.00</p>
</div>
<div class="column2">
  <img src="images/2d.jpg">
  <h4>Designer Necklase Set</h4>
  <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
  </div>
  <p>$100.00</p>
</div>
<div class="column2">
    <img src="images/5.jpg">
    <h4>Designer Necklase Set</h4>
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
    </div>
    <p>$100.00</p>
</div>
<div class="column2">
  <img src="images/4.jpg">
  <h4>Designer Necklase Set</h4>
  <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
  </div>
  <p>$100.00</p>
</div>
<div class="column2">
  <img src="images/6.jpg">
  <h4>Designer Necklase Set</h4>
  <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
  </div>
  <p>$100.00</p>
</div>
<div class="column2">
  <img src="images/2d.jpg">
  <h4>Designer Necklase Set</h4>
  <div class="star">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
  </div>
  <p>$100.00</p>
</div>
</div>
<div class="btn12">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
</div>
        </div>
        </div>
    

<!--footer-->

<?php include("include/footer.php");?>



<script>
  var menuitems = document.getElementById("menuitems");
  menuitems.style.maxHeight = "0px"
  function menutoggle(){
    if(menuitems.style.maxHeight =="0px")
    {
      menuitems.style.maxHeight = "200px";
    }
    else{
      menuitems.style.maxHeight = "0px";
    }
  }
</script>
</body>
</html>