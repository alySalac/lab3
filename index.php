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
      <a href="index.html"><img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/online-shopping-logo%2Cecommerce-logo%2Cshopify-design-template-6e30b0d4ebadd7f0b368d600c50d9ada_screen.jpg?ts=1677668442" alt="Shop Online" width="125px" /></a>
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.html">Home</a></li>
        <li><a href="#S">Products</a></li>
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
      <img src="https://i.pinimg.com/736x/0a/f8/aa/0af8aa0bcfa5fbfd9afbf38d0ffd3de9.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/e9/72/46/e9724672ac6bfcbcda8ffc9fb19cd145.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/2e/72/ea/2e72ea5a00f5f4e856230ee55d91e3b2.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/bf/5c/41/bf5c417a3ad71fbf8df5133d97f9b4f6.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/49/83/19/498319a739482268d7d205d885049151.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/09/78/5f/09785f013a96d519b9f962ecd447a61c.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/a1/4a/26/a14a265c9e9a59fb944f615062314f6e.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/d2/18/95/d21895bf90bce40c84f53c239d489bd6.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/65/39/31/653931d9688cf7a844ea640647fd4f16.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/e7/c6/7a/e7c67a39ae5c5709963bc2fa24abfd57.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/50/21/42/5021427cf8bf52a7b9d92c3ecff6c6fe.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/f6/7a/af/f67aaf6d42f1c4de63887e55d91a5894.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/11/f0/ff/11f0ff6689c2460c4ed819d74814f57a.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/b8/65/ed/b865ed814f883b418179015f78fc34fc.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/2a/ca/12/2aca12fc6a699f282872504d00a71e5d.jpg" alt="" />
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
      <img src="https://i.pinimg.com/236x/75/ae/48/75ae4864278681a1fe34cc74bd32d165.jpg" alt="" />
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