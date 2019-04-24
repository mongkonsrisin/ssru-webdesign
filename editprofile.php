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
                  <span class="name" >แก้ไขข้อมูลสมาชิก</span>
            </div>
          </div>
      </div>
  </div>
</header>



<!-- Edit Profile Form Zone-->
<section id="form">
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 fade-in">
        <form action="profile.php" method="post">
          <div class="form-group">
            <label for="FirstName">ชื่อ</label>
            <input type="text" value="เฮอร์ไมโอนี่" placeholder="Enter your firstname" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="LastName">นามสกุล</label>
            <input type="text" value="เกรนเจอร์" placeholder="Enter your lastname" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="EmailAddress">อีเมล</label>
            <input type="text" value="suanigniter@gmail.com" placeholder="Enter your e-mail address" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="TelephoneNumber">เบอร์โทรศัพท์</label>
            <input type="text" value="0819337031" placeholder="Enter your phone number" class="form-control input-lg">
          </div>
          <div class="form-group">
            <label for="ReceiverAddress">ที่อยู่จัดส่งสินค้า</label>
            <textarea placeholder="Enter your receiver address" class="form-control input-lg">88 ถ.ตรีเพชร แขวงวังบูรพา เขตพระนคร กทม. 10200</textarea>
          </div>
          <input type="submit" value="บันทึก" class="btn btn-success btn-lg">
        </form>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
