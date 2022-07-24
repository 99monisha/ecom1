<?php
include("includes/db.php");


?>

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
<div class="row">
    <div class="column">
      <div class="slider1">
      <div id="slider">
        <div class="slide">
        <h1>This is the ebsite <br>also..</h1>
        <p>Lorem ipsum dolor sit, 
            amet consectetur adipisicing elit. Sapiente aut perferendis quo,<br> vel distinctio 
             recusandae expedita?</p>
             <a href=""class="btnn">Bye Now!&#8594;</a>
    </div>
    <div class="slide">
      <h1>This is the ebsite <br>also..</h1>
      <p>Lorem ipsum dolor sit, 
          amet consectetur adipisicing elit. Sapiente aut perferendis quo,<br> vel distinctio 
           recusandae expedita?</p>
           <a href=""class="btnn">Bye Now!&#8594;</a>
  </div>
  <div class="slide">
    <h1>This is the ebsite <br>also..</h1>
    <p>Lorem ipsum dolor sit, 
        amet consectetur adipisicing elit. Sapiente aut perferendis quo,<br> vel distinctio 
         recusandae expedita?</p>
         <a href=""class="btnn">Bye Now!&#8594;</a>
</div>
<div class="slide">
  <h1>This is the ebsite <br>also..</h1>
  <p>Lorem ipsum dolor sit, 
      amet consectetur adipisicing elit. Sapiente aut perferendis quo,<br> vel distinctio 
       recusandae expedita?</p>
       <a href=""class="btnn">Bye Now!&#8594;</a>
</div>
  </div>
  </div></div>
    <div class="column">
        <img src="images/2.png">
    </div>
</div>

<div class="control">
  <div id="line1"></div>
  <div id="line2"></div>
  <div id="line3"></div>
  <div id="line4"></div>
  <div id="active"></div>
</div>
</div></div> 
               <!--subcategori section-->
               <div class="section2">
                   <div class="sub-sec2">
                   <div class="row">
                       <div class="column1"><img src="images/2a.jpg"></div>
                       <div class="column1"><img src="images/2b.jpg"></div>
                       <div class="column1"><img src="images/2d.jpg"></div>
                   </div>
               </div>
            </div>



      <!--subproduct section-->   
      <div class="sub-sec2">
          <h2 class="title">Product Features</h2>
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
      
      <h2 class="title">New Product Features</h2>
      <div class="row">
        <div class="column2">
            <img src="images/2.png">
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
          <img src="images/2a.jpg">
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
          <img src="images/2c.jpg">
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
    <div class="row">
        <div class="column2">
            <img src="images/2.png">
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
          <img src="images/7.jpg">
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
          <img src="images/7.png">
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
          <img src="images/8.PNG">
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
    <div class="row">
        <div class="column2">
            <img src="images/9.PNG">
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
          <img src="images/10.PNG">
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
          <img src="images/11.PNG">
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
          <img src="images/2a.jpg">
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
    <!---our offer-->
    <h2 class="title">Product Sale</h2>
    <div class="section3" id="sale">
        <div class="sub-sec2">
            <div class="row">
                <div class="column">
                    <img src="images/7.png" class="sub-img">
                </div>
                <div class="column">
                    <div class="jewl">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <h1>Lorem ipsum.</h1>
                        <para>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium,
                             eos aliquid nesciunt iusto dolor quae quos eveniet veritatis obcaecati,
                              quidem cum quo ex. Earum, at enim.
                    </para>
                  
                </div>
                <a href=""class="btnn">Bye Now!&#8594;</a>
            </div>
        </div>
    </div>
  </div>
     <!----testimonial--->
<div class="section4" id="company">
    <div class="sub-sec2">
        <div class="row">
            <div class="column1">
              <i class="fas fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, voluptatum possimus. 
                    Quidem asperiores tempora voluptatum. Voluptatum eligendi at obcaecati consectetur.
                 </p>
                 <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <img src="images/9.PNG">
                  <h3>MOnisha Dolai</h3>
            </div>
            <div class="column1">
              <i class="fas fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, voluptatum possimus. 
                    Quidem asperiores tempora voluptatum. Voluptatum eligendi at obcaecati consectetur.
                 </p>
                 <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <img src="images/11.PNG">
                  <h3>MOnisha Dolai</h3>
            </div>
            <div class="column1">
              <i class="fas fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, voluptatum possimus. 
                    Quidem asperiores tempora voluptatum. Voluptatum eligendi at obcaecati consectetur.
                 </p>
                 <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <img src="images/11.PNG">
                  <h3>MOnisha Dolai</h3>
            </div>
        </div>
    </div>
<!--footer-->
<?php include("includes/footer.php");?>


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
  var slider=document.getElementById("slider");
  var active=document.getElementById("active");
  var line1=document.getElementById("line1");
  var line2=document.getElementById("line2");
  var line3=document.getElementById("line3");
  var line4=document.getElementById("line4");
  line1.onclick=function(){
    slider.style.transform = 'translateX(0)';
    active.style.top = '0px';
  }
  line2.onclick=function(){
    slider.style.transform = 'translateX(-25%)';
    active.style.top = '80px';
  }
  line3.onclick=function(){
    slider.style.transform = 'translateX(-50%)';
    active.style.top = '160px';
  }
  line4.onclick=function(){
    slider.style.transform = 'translateX(-75%)';
    active.style.top = '240px';
  }
</script>
</body>
</html>