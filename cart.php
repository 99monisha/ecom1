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
            <li><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="item.html"class="menu-btn">Product</a></li>
            <li><a href="#sale"class="menu-btn">Sale</a></li>
            <li><a href="#company"class="menu-btn">Company</a></li>
            <li  class="active1"><a href="cart.html"class="menu-btn">Cart</a></li>
            <li><a href="#contact"class="menu-btn">Contact</a></li>
</ul>
</nav>
<img src="images/11.PNG" class="menu" onclick="menutoggle()">
<a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
</div>


     <!---item details page-->
     <div class="part1 cart-page">
         <table>
             <tr>
                 <th>Product</th>
                 <th>Price</th>
                 <th>Total</th>
             </tr>
<tr>
    <td>
        <div class="cart-info">
            <img src="images/3a.jpg">
            <div>
                <p>My Favo neckless</p>
                <para>$560</para><br>
                <a href="">Remove</a>
            </div>
        </div>
    </td>
    <td><input type="number" value="1"></td>
    <td>$400</td>
</tr>
<tr>
    <td>
        <div class="cart-info">
            <img src="images/3a.jpg">
            <div>
                <p>My Favo neckless</p>
                <para>$560</para><br>
                <a href="">Remove</a>
            </div>
        </div>
    </td>
    <td><input type="number" value="1"></td>
    <td>$400</td>
</tr>
<tr>
    <td>
        <div class="cart-info">
            <img src="images/3a.jpg">
            <div>
                <p>My Favo neckless</p>
                <para>$560</para><br>
                <a href="">Remove</a>
            </div>
        </div>
    </td>
    <td><input type="number" value="1"></td>
    <td>$400</td>
</tr>
<tr>
    <td>
        <div class="cart-info">
            <img src="images/3a.jpg">
            <div>
                <p>My Favo neckless</p>
                <para>$560</para><br>
                <a href="">Remove</a>
            </div>
        </div>
    </td>
    <td><input type="number" value="1"></td>
    <td>$400</td>
</tr>
</table>
<div class="price">
    <table>
        <tr>
            <td>total price</td>
            <td>$4000</td>
        </tr>
        <tr>
            <td>Sub-total</td>
            <td>$40</td>
        </tr>
        <tr>
            <td>price</td>
            <td>$4000</td>
        </tr>
       
   
</div>
         </table>
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