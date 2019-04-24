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
        <li><a href="#">ริสแบนด์</a></li>
        <li><a href="#">กระเป๋า</a></li>
        <li><a href="#">เสื้อ</a></li>
        <li><a href="#">เครื่องเขียน</a></li>
        <li><a href="#">เคสโทรศัพท์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../register.php"><i class="fa fa-edit"></i> <span style="font-weight:500">สมัครสมาชิก</span></a></li>
        <li><a href="../login.php"><i class="fa fa-sign-in"></i> <span style="font-weight:500">เข้าสู่ระบบ</span></a></li>
        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span style="font-weight:500">ตะกร้าสินค้า</span></a></li>
      </ul>
    </div>
  </div>
	<div class="logo"><a href="../index.php">
        <img src="../assets/image/profile.png"><br>
        <p class="shop-name">OSK SHOP</p>
        </a></div>
</nav>
<!-- End a Navigation Bar-->
