<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/quanly/css/style.css">
    <link rel="stylesheet" href="/public/css/all.min.css">
    <script src="/public/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <link rel="stylesheet" href="/quanly/css/jquery.datetimepicker.css">
    <script src="/quanly/js/jquery.datetimepicker.js"></script>
    <title>Quản lý</title>
</head>
<body>
<?php
  if(!isset($_SESSION['idnguoidung'])){
      header("Location: /");
  }
?>
<div class="navigation">
  <ul>
    <li>
      <a href="#">
        <span class="icon"><i class="fa-solid fa-house"></i></span>
        <span class="title">Cửa hàng</span>
      </a>
      <input type="checkbox" name="codinh" id="codinh" class="codinh" title="Cố định">
    </li>
    <li>
      <a href="">
        <span class="icon"><i class="fa-solid fa-user"></i></span>
        <span class="title">Cấu hình</span>
      </a>
    </li>
    <li>
      <a href="">
        <span class="icon"><i class="fa-solid fa-comment"></i></span>
        <span class="title">Tin nhắn</span>
      </a>
    </li>
    <li>
      <a href="">
        <span class="icon"><i class="fa-solid fa-product-hunt"></i></span>
        <span class="title">Sản phẩm</span>
      </a>
    </li>
    <li>
      <a href="">
        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
        <span class="title">Lịch</span>
      </a>
    </li>
    <li>
      <a href="">
        <span class="icon"><i class="fa-solid fa-circle-info"></i></span>
        <span class="title">Trợ giúp</span>
      </a>
    </li>
    <li>
      <a href="">
        <span class="icon"><i class="fa-solid fa-gear"></i></span>
        <span class="title">Cài đặt</span>
      </a>
    </li>
    <li>
      <a href="">
        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
        <span class="title">Đăng xuất</span>
      </a>
    </li>
  </ul>
</div>

<div class="content">
  <!-- start menu -->
  <div class="menu_main">
    <input type="text" class="txt_timkiem">
    <button class="btn_timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
    <div class="nguoidung">
      <a href="#" class="dangxuat" title="Đăng xuất">
        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
      </a>
    </div>
  </div>
  <div class="tieude">Thống kê đơn hàng doanh số</div>
  <div class="boloc">
    <label for="" class="nhaplieu_title">Từ ngày&nbsp;</label>
    <input type="text" id="tungay_text" class="nhaplieu">
    <label for="" class="nhaplieu_title">&nbsp;&nbsp;Đến ngày&nbsp;</label>
    <input type="text" id="denngay_text" class="nhaplieu">
    <button class="btn_loc">Lấy dữ liệu</button>
  </div>
  <!-- End menu -->

  <div class="bieudo">
    <div class="bieudo__item" style="--percent: 10%">10%</div>
    <div class="bieudo__item" style="--percent: 20%">20%</div>
    <div class="bieudo__item" style="--percent: 45%">45%</div>
    <div class="bieudo__item" style="--percent: 35%">35%</div>
    <div class="bieudo__item" style="--percent: 17%">17%</div>
    <div class="bieudo__item" style="--percent: 90%">90%</div>
    <div class="bieudo__item" style="--percent: 70%">70%</div>
  </div>
  <canvas id="dothi_line"></canvas>
</div>
    <script>
    $('#codinh').click(function(){
        if(this.checked == true){
        $('.content').addClass("thaydoicontent")
        $('.navigation').addClass("thaydoinavigation")
        }else{
        $('.content').removeClass("thaydoicontent")
        $('.navigation').removeClass("thaydoinavigation")
        }
    });

    /** Xử lý thời gian */
    $('#tungay_text').datetimepicker({format: 'd/m/Y',lang: 'vi'});
    $('#tungay_text').val('01/'+'<?php echo date('m/Y'); ?>')
    $('#denngay_text').datetimepicker({format: 'd/m/Y',lang: 'vi'});
    $('#denngay_text').val('<?php echo date('d/m/Y'); ?>');

    /** Đồ thị */
    var trucx = ['Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ nhật'];
    var trucy = [1,4.5,6,5,7,2.3,10];
    var dt = document.getElementById('dothi_line').getContext('2d');
    var duong = new Chart(dt,{
        type: 'line',
        data: {
        labels: trucx,
        datasets: [{
            label: 'Doanh số',
            data: trucy
        }]
        }
    })
    </script>
</body>
</html>