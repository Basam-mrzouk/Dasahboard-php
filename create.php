<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link href="includs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="includs/assets/css/fontawesome.css">
    <link rel="stylesheet" href="includs/assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="includs/assets/css/owl.css">
    <link rel="stylesheet" href="includs/assets/css/animate.css">
    <link rel="stylesheet"href="includs/https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>

<?php

session_start();
if(isset($_SESSION["bassam"])){


  include('Admin/includes/dab/db.php');
  include('Admin/includes/temp/header.php');
$q1 =$connect->prepare("select * from users");
$q1->execute();
$userCount =$q1->rowCount();

$q2 =$connect->prepare("select * from categroy");
$q2->execute();
$catCount =$q2->rowCount();


$q3 =$connect->prepare("select * from posts");
$q3->execute();
$postCount =$q3->rowCount();


$q4 =$connect->prepare("select * from comment");
$q4->execute();
$comentCount =$q4->rowCount();

?>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="includs/assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Home</a></li>
                       
                      <li><a href="details.html" class="active">Item Details</a></li>
                      <li><a href="author.php">Author</a></li>
                      <li><a href="explore.php">Explore</a></li>
                      <li><a href="create.php">Create Yours</a></li>
                      <li><a href="Admin/logaut.php">Lay out</a></li>
                      </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Liberty NFT Market</h6>
          <h2>Create Your NFT Now.</h2>
          <span>Home > <a href="#">Create Yours</a></span>
          <div class="buttons">
            <div class="main-button">
              <a href="explore.html">Explore Our Items</a>
            </div>
            <div class="border-button">
              <a href="create.html">Create Your NFT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Apply For <em>Your Item</em> Here.</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                  <label for="title">Item Title</label>
                  <input type="title" name="title" id="title" placeholder="Ex. Lyon King" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="description">Description For Item</label>
                  <input type="description" name="description" id="description" placeholder="Give us your idea" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="username">Your Username</label>
                  <input type="username" name="username" id="username" placeholder="Ex. @alansmithee" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="price">Price Of Item</label>
                  <input type="price" name="price" id="price" placeholder="Price depends on quality. Ex. 0.06 ETH" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="royalities">Royalties</label>
                  <input type="royalities" name="royalities" id="royalities" placeholder="Common royalties 1-25%" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="file">Your File</label>
                  <input type="file" id="file" name="myfiles[]" multiple />
                </fieldset>
              </div>
              <div class="col-lg-8">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Submit Your Applying</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>This Is <em>Your Item</em> Preview.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="includs/assets/images/create-yours.jpg" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4>Dolores Haze Westworld Eye</h4>
          <span class="author">
            <img src="includs/assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>Kataleya Smithee<br><a href="#">@kataleey</a></h6>
          </span>
          <p>Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="row">
            <div class="col-3">
              <span class="bid">
                Current Bid<br><strong>0.06 ETH</strong><br><em>($8055,35)</em>
              </span>
            </div>
            <div class="col-4">
              <span class="owner">
                Owner<br><strong>Alan Smithee</strong><br><em>(@asmithee)</em>
              </span>
            </div>
            <div class="col-5">
              <span class="ends">
                Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(January 22nd, 2021)</em>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
          &nbsp;&nbsp;
          Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>
  <?php

include('Admin/includes/temp/footer.php');
}else{
    echo "<h2 style='text-align:center;background:red;color:white;'>plase log in</h2>";
    header("refresh:2;url=Admin/login.php");

}
?>
 <!-- Scripts -->
 <!-- Bootstrap core JavaScript -->
 <script src="includs/vendor/jquery/jquery.min.js"></script>
 <script src="includs/vendor/bootstrap/js/bootstrap.min.js"></script>

 <script src="includs/includs/assets/js/isotope.min.js"></script>
 <script src="includs/includs/assets/js/owl-carousel.js"></script>

 <script src="includs/assets/js/tabs.js"></script>
 <script src="includs/assets/js/popup.js"></script>
 <script src="includs/assets/js/custom.j"></script>
  </body>
</html>