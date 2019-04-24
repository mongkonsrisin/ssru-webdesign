<?php define('X', TRUE); ?>
<html>
<head>
<title>OSK Shop</title>
<?php include 'includes/meta.php'; ?>
</head>
<body id="page-top" class="index">
<?php include 'includes/header.php'; ?>



<!-- Header Zone-->
<header>
  <div class="container dark">
    <div class="row">
      <div class="col-lg-12">
        <div class="intro-text">
          <span class="name" >สมัครสมาชิก</span>
        </div>
      </div>
    </div>
  </div>
</header>



<!-- Register Form Zone-->
<section id="form">
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 fade-in">
        <form action="registerok.php" method="post">

                <div class="form-group">
                    <label for="FirstName">ชื่อ<sup> *</sup></label>
                    <input type="text" placeholder="Enter your firstname" class="form-control input-lg">
                </div>

          <div class="form-group">
            <label for="LastName">นามสกุล<sup> *</sup></label>
            <input type="text" placeholder="Enter your lastname" class="form-control input-lg">
          </div>

          <div class="form-group">
            <label for="EmailAddress">อีเมล<sup> *</sup></label>
            <input type="text" placeholder="Enter your e-mail address" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="Password">รหัสผ่าน<sup> *</sup></label>
            <input type="password" placeholder="Enter your password" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="ConfirmPassword">ยืนยันรหัสผ่าน<sup> *</sup></label>
            <input type="password" placeholder="Confirm your password" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="TelephoneNumber">เบอร์โทรศัพท์</label>
            <input type="text" placeholder="Enter your phone number" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="ReceiverAddress">ที่อยู่</label>
            <textarea   placeholder="Enter your receiver address" class="form-control input-lg"></textarea>
          </div>
          <input type="submit" class="btn btn-success btn-lg" value="สมัครสมาชิก">
        </form>
        <a href="register-error.php"><i class="fa fa-ban text-danger"></i></a>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</section>










  <?php include 'includes/footer.php'; ?>

</body>
</html>
