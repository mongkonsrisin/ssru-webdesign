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
          <div class="intro-text"><span class="name" >แจ้งโอนเงิน</span></div>
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
          <form action="paymentok.php" method="post">

            <div class="form-group">
              <label for="OrderId">เลขที่ออเดอร์<sup> *</sup></label>
              <input type="text" placeholder="Enter your order id" class="form-control input-lg">
            </div>

            <div class="form-group">
              <label for="Bank">ธนาคาร<sup> *</sup></label>
              <div class="radio">
                <label><input type="radio" name="bank" value="kbank"><span class="bank">ธนาคารกสิกรไทย</span></label>
              </div>
              <div class="radio">
                <label><input type="radio" name="bank" value="ktb"><span class="bank">ธนาคารกรุงไทย</span></label>
              </div>
              <div class="radio">
                <label><input type="radio" name="bank" value="scb"><span class="bank">ธนาคารไทยพาณิชย์</span></label>
              </div>
              <div class="radio">
                <label><input type="radio" name="bank" value="bbl"><span class="bank">ธนาคารกรุงเทพ</span></label>
              </div>
            </div>

            <div class="form-group">
              <label for="OrderId">จำนวนเงิน<sup> *</sup></label>
              <input type="text" placeholder="Enter your amount" class="form-control input-lg">
            </div>

            <div class="form-group">
              <label for="OrderId">วันที่โอนเงิน<sup> *</sup></label>
              <input type="date" placeholder="" class="form-control input-lg">
            </div>
            <div class="form-group">
              <label for="OrderId">เวลาที่โอนเงิน<sup> *</sup></label>
              <input type="time" placeholder="" class="form-control input-lg">
            </div>
            <div class="form-group">
              <label for="OrderId">หลักฐานการโอน<sup> *</sup></label>
              <input type="file" placeholder="" class="">
            </div>


            <input type="submit" value="ส่งข้อมูล" class="btn btn-success btn-lg">
          </form>
          <a href="#"><i class="fa fa-ban text-danger"></i></a>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
