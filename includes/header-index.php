<?php
if(!defined('X')) {
   header('Location: index.php');
}
?>
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
          <li><a href="contactus.php">ติดต่อเรา</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php"><i class="fa fa-edit"></i> <span style="font-weight:500">สมัครสมาชิก</span></a></li>
          <li><a href="login.php"><i class="fa fa-sign-in"></i> <span style="font-weight:500">เข้าสู่ระบบ</span></a></li>
          <li><a href="#"><span class="fa fa-shopping-bag"></span> <span style="font-weight:500">ตะกร้าสินค้า</span></a></li>
        </ul>
      </div>
    </div>
  	<div class="logo anim"><a href="index.php">
          <img src="assets/image/profile.png"><br>
          <p class="shop-name">OSK SHOP</p>
          </a></div>
  </nav>
