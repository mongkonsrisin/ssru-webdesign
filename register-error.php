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
      <div class="col-sm-8">
        <form action="register.php" method="post">
          <div class="form-group">
            <label for="FirstName">ชื่อ</label>
            <input type="text" value="ประยุทธ์" placeholder="Enter your firstname" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="LastName">นามสกุล</label>
            <input type="text" value="จันทร์โอชา" placeholder="Enter your lastname" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="TelephoneNumber">เบอร์โทรศัพท์</label>
            <input type="text" value="191" placeholder="Enter your phone number" class="form-control form-error input-lg">
            <p class="text-danger text-center">เบอร์โทรศัพท์ไม่ถูกต้อง</p>
          </div>
          <div class="form-group">
            <label for="EmailAddress">อีเมล</label>
            <input type="text" value="prayuth.c@gmail.com" placeholder="Enter your e-mail address" class="form-control form-error input-lg">
            <p class="text-danger text-center">อีเมลนี้ถูกใช้งานแล้ว</p>
          </div>
          <div class="form-group">
            <label for="Password">รหัสผ่าน</label>
            <input type="password" value="12345678" placeholder="Enter your password" class="form-control input-lg">
          </div>

          <div class="form-group">
            <label for="ConfirmPassword">ยืนยันรหัสผ่าน</label>
            <input type="password" value="1234" placeholder="Confirm your password" class="form-control form-error input-lg">
          </div>
          <input type="submit" value="สมัครสมาชิก" class="btn btn-success btn-lg">
        </form>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</section>










  <?php include 'includes/footer.php'; ?>

</body>
</html>
