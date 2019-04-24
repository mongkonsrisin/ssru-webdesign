<?php define('X', TRUE); ?>
<html>
<head>
<title>OSK Shop</title>
<?php include 'includes/meta.php'; ?>
</head>
<body id="page-top" class="index">
<?php include 'includes/header-member.php'; ?>
<header>
  <div class="container dark">
      <div class="row">
          <div class="col-lg-12">
              <div class="intro-text">
                  <span class="name" >แก้ไขรหัสผ่าน</span>
            </div>
          </div>
      </div>
  </div>
</header>



<!-- Edit Profile Form Zone-->
<section id="form">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 fade-in">
        <form action="profile.php" method="post">
          <div class="form-group">
            <label for="FirstName">รหัสผ่านเดิม</label>
            <input type="password" placeholder="Enter your old password" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="LastName">รหัสผ่านใหม่</label>
            <input type="password" placeholder="Enter your new password" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="TelephoneNumber">ยืนยันรหัสผ่าน</label>
            <input type="password"  placeholder="Confirm your password" class="form-control input-lg">
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
