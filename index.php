<?php define( 'X', TRUE); ?>
<html>
<head>
<title>OSK Shop</title>
<?php include 'includes/meta.php'; ?>
<script type="text/javascript">
    var addToHomeConfig = {
        animationIn: 'bubble',
        animationOut: 'drop',
        lifespan: 10000,
        expire: 2,
        touchIcon: true,
        message: '&#3585;&#3604;&#3648;&#3614;&#3639;&#3656;&#3629; Save &#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3621;&#3591;  <strong>%device</strong> &#3650;&#3604;&#3618;&#3585;&#3604;&#3607;&#3637;&#3656; `%icon`.'
        };
</script>
</head>

<body id="page-top" class="index">





  <!-- Navigation Menu -->
  <?php include 'includes/header-index.php'; ?>





    <!-- School Background -->
    <header id="index" class="fade-in fade-first">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive fade-in fade-second" src="assets/image/school-logo.jpg" alt="My School Logo">
                    <div class="intro-text fade-in fade-third">
                        <span class="thai-name">โรงเรียนสวนกุหลาบวิทยาลัย</span>
                        <span class="eng-name">Suankularb Wittayalai School</span>
                    </div>
                </div>
            </div>
        </div>
    </header>





    <section id="hot-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>สินค้าใหม่</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
              <!-- #1 -->
              <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="items/photo/dummy-item.png">
                      <h2><a href="#">ถุงผ้า</a></h2>
                      <h3>150 ฿</h3>
                      <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#dummydata">
                          <i class="fa fa-shopping-bag"></i> เพิ่มลงตะกร้า
                      </buton>
                  </div>
              </div>

              <!-- #2 -->
              <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="items/photo/dummy-item.png">
                      <h2><a href="#">ถุงผ้า</a></h2>
                      <h3>150 ฿</h3>
                      <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#dummydata">
                          <i class="fa fa-shopping-bag"></i> เพิ่มลงตะกร้า
                      </buton>
                  </div>
              </div>

              <!-- #3 -->
              <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="items/photo/dummy-item.png">
                      <h2><a href="#">ถุงผ้า</a></h2>
                      <h3>150 ฿</h3>
                      <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#dummydata">
                          <i class="fa fa-shopping-bag"></i> เพิ่มลงตะกร้า
                      </buton>
                  </div>
              </div>
            </div>
            <div class="row text-center">
                <a href="items/"><button class="btn btn-default input-lg">ดูทั้งหมด</button></a>
            </div>
        </div>
    </section>




    <!-- School Address and Copyright -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
<!-- Love me, Love my code -->
