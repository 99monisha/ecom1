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
       <div class="sub-sec2 one-pro">
          <div class="row">
              <div class="column">
                  <img src="images/10.PNG"width="100%" id="itemsimg">
                  <div class="small-img-row">
                      <div class="small-img-col">
                        <img src="images/10.PNG"width="100%" class="small-itmes-img">
                      </div>
                      <div class="small-img-col">
                        <img src="images/11.PNG"width="100%" class="small-itmes-img">
                      </div>
                      <div class="small-img-col">
                        <img src="images/9.PNG"width="100%" class="small-itmes-img">
                      </div>
                      <div class="small-img-col">
                        <img src="images/8.PNG"width="100%" class="small-itmes-img">
                      </div>
                  </div>
              </div>


              
              <div class="column">
                  <p>My wonder Neckless</p>
                  <h1>Lorem ipsum dolor elit. Soluta, quisquam.</h1>
                  <h4>$5678</h4>
                  <select>
                      <option>Select Size</option>
                      <option>Select Sizeh</option>
                      <option>Select Sizel</option>
                      <option>Select Sizeg</option>
                  </select>
                  <input type="number" value="1">
                  <a href="" class="btnn">Add to Cart</a>

                  <h3>Product Details</h3>
                         <br>
                  <p>Lorem ipsum dolor sit amet consectetur, 
adipisicing elit. Deserunt itaque accusamus iusto quod molestiae quae illum voluptate rerum vero!</p>
              </div>
          </div>
        </div>
        <div class="sub-sec2 one-pro">
            <div class="row row11"> 
                <h3>Product Details</h3>
                <p>View more</p>
            </div>
          </div>

        <div class="sub-sec2">
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

<script>
var itemsimg = document.getElementById("itemsimg");
var smallimg = document.getElementsByClassName("small-itmes-img");


smallimg[0].onclick=function(){
    itemsimg.src=smallimg[0].src;
}
smallimg[1].onclick=function(){
    itemsimg.src=smallimg[1].src;
}
smallimg[2].onclick=function(){
    itemsimg.src=smallimg[2].src;
}
smallimg[3].onclick=function(){
    itemsimg.src=smallimg[3].src;
}
</script>
</body>
</html>