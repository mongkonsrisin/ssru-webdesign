<?php
if(!defined('X')) {
   header('Location: index.php');
}
?>
<!-- Start a Navigation Bar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span>

      </span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="items/index.php">สินค้า</a></li>
        <li><a href="informpayment.php">แจ้งโอนเงิน</a></li>
        <li><a href="aboutus.php">เกี่ยวกับเรา</a></li>
        <li><a href="contactus.php">ติดต่อเรา</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><i class="fa fa-user"></i> <span style="font-weight:500">เฮอร์ไมโอนี่</span></a></li>
        <li><a href="index.php"><i class="fa fa-sign-out"></i> <span style="font-weight:500">ออกจากระบบ</span></a></li>
        <li><a href="#"><span class="fa fa-shopping-bag"></span> <span style="font-weight:500">ตะกร้าสินค้า [ </span><span class="shopping-cart-count"> 5 </span> ] </a></li>
      </ul>
    </div>
  </div>
	<div class="logo"><a href="index.php">
        <img src="assets/image/profile.png"><br>
        <p class="shop-name">OSK SHOP</p>
        </a></div>
</nav>
<!-- End a Navigation Bar-->
