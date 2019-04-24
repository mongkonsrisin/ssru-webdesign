<?php define('X', TRUE); ?>
<html>
<head>
<title>OSK Shop</title>
<?php include 'includes/meta.php'; ?>
</head>
<body id="page-top" class="index">
  <?php include 'includes/header.php'; ?>
  <header>
    <div class="container dark">
      <div class="row">
        <div class="col-lg-12">
          <div class="intro-text"><span class="name" >เข้าสู่ระบบ</span></div>
        </div>
      </div>
    </div>
  </header>


  <section id="form">
    <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 fade-in">
          <p class="text-danger text-center">&nbsp;</p>
          <form action="profile.php" method="post">

            <div class="form-group">
              <label for="EmailAddress">อีเมล</label>
              <input type="text" placeholder="Enter your e-mail address" class="form-control input-lg">
            </div>

            <div class="form-group">
              <label for="Password">รหัสผ่าน</label>
              <input type="password" placeholder="Enter your password" class="form-control input-lg">
            </div>

            <p class="small"><a href="forgotpass.php">ลืมรหัสผ่าน</a></p>
            <input type="submit" value="เข้าสู่ระบบ" class="btn btn-success btn-lg">
          </form>
          <a href="login-error.php"><i class="fa fa-ban text-danger"></i></a>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
