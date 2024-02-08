<?php
include "config.php";  
  if (isset($_POST ['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `tb_userinfo` (`username`, `password`) VALUES ('$username', '$password')";

  $result = $conn->query($sql);

  if (isset($username) && isset ($password)){
    if ($result == TRUE) {
      echo "New record created successflly";
      // output data of each row
      header("Location: product.html");
    } else {
      echo "Error:" .$sql ."<br>". $conn->error; 
    }
    $conn->close();
  }
}

  ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>DevopsAct3</title>
</head>
<body>

<div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.html"><img src="https://img.freepik.com/free-vector/flat-design-clothing-logo-template_23-2149489910.jpg?w=740&t=st=1707317236~exp=1707317836~hmac=e1a682042d2e938831c578024cc4aadaf3221e941daf8afda4ab1383ef4319df" alt="RedStore" width="125px" /></a>
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.html">Home</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="#">About</a></li>
       
        <li><a href="account.html">Account</a></li>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
          Login
        </button>
      </ul>
      
      <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" >
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" name = "username" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" name = "password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name = "login" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      <script>
      $(document).ready(function(){
      $("#myBtn").click(function(){
     $("#myModal").modal();
       });
});
</script>
</nav>
    <div>
    <a href="cart.html"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px" height="30px" /></a>
    <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
  </div>
</div>

<div class="small-container">
  <div class="row row-2">
    <h2>Top Products</h2>
  </div>
  </div>
  <div class="row">
    <div class="col-4">
      <img src="https://down-ph.img.susercontent.com/file/sg-11134201-22110-k5mqzwvv1gjv47" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://down-ph.img.susercontent.com/file/16393e1842c613f2b9b852e70feb954a" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/0cMfpcr/product-4.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/0cMfpcr/product-4.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <img src="https://i.ibb.co/bQ5t8bR/product-5.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/vVpTyBD/product-6.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/hR5FGwH/product-7.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/QfCgdXZ/product-8.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <img src="https://i.ibb.co/nw5xZwk/product-9.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/9HCsmjf/product-10.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/JQ2MBHR/product-11.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>500.00</p>
    </div>

    <div class="col-4">
      <img src="https://i.ibb.co/nRZMs6Y/product-12.jpg" alt="" />
      <h4>PRODUCT NAME</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>500.00</p>
    </div>
  </div>

  <div class="page-btn">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
    <span>&#8594;</span>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download App for Android and iso mobile phone.</p>
        <div class="app-logo">
          <img src="https://i.ibb.co/KbPTYYQ/play-store.png" alt="" />
          <img src="https://i.ibb.co/hVM4X2p/app-store.png" alt="" />
        </div>
      </div>

      <div class="footer-col-2">
        <img src="https://i.ibb.co/j3FNGj7/logo-white.png" alt="" />
        <p>
          Our Purpose Is To Sustainably Make the Pleasure and Benefits of
          Sports Accessible to the Many.
        </p>
      </div>

      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li>Coupons</li>
          <li>Blog Post</li>
          <li>Return Policy</li>
          <li>Join Affiliate</li>
        </ul>
      </div>

      <div class="footer-col-4">
        <h3>Follow us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram</li>
          <li>YouTube</li>
        </ul>
      </div>
    </div>
    <hr />
  </div>
</div>

<!-- js for toggle menu -->
<script>
  var MenuItems = document.getElementById('MenuItems');
  MenuItems.style.maxHeight = '0px';

  function menutoggle() {
    if (MenuItems.style.maxHeight == '0px') {
      MenuItems.style.maxHeight = '200px';
    } else {
      MenuItems.style.maxHeight = '0px';
    }
  }
</script>
</body>
</html>