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
          <div class="intro-text"><span class="name" >ตั้งรหัสผ่านใหม่</span></div>
        </div>
      </div>
    </div>
  </header>


  <section id="form">
    <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 fade-in">
          <form action="resetpassok.php" method="post">

            <div class="form-group">
              <label for="EmailAddress">รหัสผ่านใหม่</label>
              <input type="text" placeholder="Enter your e-mail address" class="form-control input-lg">
            </div>

            <div class="form-group">
              <label for="Password">ยืนยันรหัสผ่าน</label>
              <input type="password" placeholder="Enter your password" class="form-control input-lg">
            </div>

            <input type="submit" value="บันทึก" class="btn btn-success btn-lg">
          </form>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
