<?php define('X', TRUE); ?>
<html>
<head>
<title>OSK Shop</title>
<?php include 'includes/meta.php'; ?>
</head>
<body id="page-top" class="index">
<?php include 'includes/header-member.php'; ?>



<!-- Header Zone-->
<header>
  <div class="container dark">
    <div class="row">
      <div class="col-lg-12">
        <div class="intro-text">
          <span class="name" >ข้อมูลสมาชิก</span>
        </div>
      </div>
    </div>
  </div>
</header>







<!-- Profile Zone-->
<section id="profile">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>เฮอร์ไมโอนี่ เกรนเจอร์</h2>
        <a href="editprofile.php"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> แก้ไขโปรไฟล์</button></a>
        <a href="editpassword.php"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-key"></i> แก้ไขรหัสผ่าน</button></a>
      </div>
    </div>
    <div class="row">
      <!--Start Customer Order Responsive Table-->
      <div class=" table-responsive">
        <table class="table">
           <thead>
             <tr>
               <th>#</th>
               <th>รายละเอียด</th>
               <th>ราคา</th>
               <th>สถานะ</th>
               <th>Tracking Number</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1</td>
               <td>Doe</td>
               <td>120</td>
               <td>รอการชำระเงิน</td>
               <td></td>
             </tr>
             <tr>
               <td>2</td>
               <td>Moe</td>
               <td>500</td>
               <td>รอการชำระเงิน</td>
               <td></td>
             </tr>
             <tr>
               <td>3</td>
               <td>Dooley</td>
               <td>790</td>
               <td>รอการจัดส่ง</td>
               <td></td>
             </tr>
             <tr>
               <td>4</td>
               <td>Dooley</td>
               <td>790</td>
               <td>รอการจัดส่ง</td>
               <td></td>
             </tr>
             <tr>
               <td>5</td>
               <td>Dooley</td>
               <td>790</td>
               <td>จัดส่งสินค้าแล้ว</td>
               <td>RG 1234 5678 9 TH</td>
             </tr>
             <tr>
               <td>6</td>
               <td>Dooley</td>
               <td>790</td>
               <td>จัดส่งสินค้าแล้ว</td>
               <td>RG 1234 5678 9 TH</td>
             </tr>
             <tr>
               <td>7</td>
               <td>Dooley</td>
               <td>790</td>
               <td>จัดส่งสินค้าแล้ว</td>
               <td>RG 1234 5678 9 TH</td>
             </tr>
             <tr>
               <td>8</td>
               <td>Dooley</td>
               <td>790</td>
               <td>จัดส่งสินค้าแล้ว</td>
               <td>RG 1234 5678 9 TH</td>
             </tr>
           </tbody>
         </table>
       </div>
       <!--End Customer Order Responsive Table-->
    </div>
  </div>
</section>




  <?php include 'includes/footer.php'; ?>


</body>
</html>
