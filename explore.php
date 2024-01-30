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
                       
                      <li><a href="details.php" class="active">Item Details</a></li>
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

  
  <div class="discover-items">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="banner">Double Item</span>
              </div>
              <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-01.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-02.jpg" alt="" style="border-radius: 20px;">
                <h4>His Other Half</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <span>Current Bid: <br> <strong>8.16 ETH</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Category: <br> <strong>Digital Art</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Collection:: <br> <strong>2/2</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                <h4>Genesis Meta Boom</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>5.15 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>26th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-04.jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>3.63 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>24th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                <h4>Pixel Sand Box</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-04.jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-06.jpg" alt="" style="border-radius: 20px;">
                <h4>Invisible NFT Land</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="includs/assets/images/discover-05.jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.64 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="details.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="top-seller">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Our Top Sellers This Week.</h2>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>1.</h4>
                <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>NFT Top Artist<br><a href="#">8.6 ETH or $12,000</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>2.</h4>
                <img src="includs/assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>George Brandon<br><a href="#">4.8 ETH or $14,000</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>3.</h4>
                <img src="includs/assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Johnny Mayson<br><a href="#">6.2 ETH or $26,000</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>4.</h4>
                <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Liberty Artist<br><a href="#">4.5 ETH or $11,600</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>5.</h4>
                <img src="includs/assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Ronald Martino<br><a href="#">7.2 ETH or $14,500</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>6.</h4>
                <img src="includs/assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Anthony Brown<br><a href="#">8.6 ETH or $7,400</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>7.</h4>
                <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Liberty Artist<br><a href="#">9.8 ETH or $14,200</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>8.</h4>
                <img src="includs/assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Ronald Martino<br><a href="#">6.5 ETH or $15,000</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>9.</h4>
                <img src="includs/assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>David Walker<br><a href="#">2.5 ETH or $12,000</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>10.</h4>
                <img src="includs/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Liberty Artist<br><a href="#">8.8 ETH or $16,800</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>11.</h4>
                <img src="includs/assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Anthony Brown<br><a href="#">7.5 ETH or $15,400</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>12.</h4>
                <img src="includs/assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>David Walker<br><a href="#">5.2 ETH or $12,300</a></h6>
              </div>
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