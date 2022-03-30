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
<?php include_once __SITE_PATH . '/quanly/layouts/navigation.php';  ?>
<?php include_once __SITE_PATH . '/quanly/layouts/content_header.php';  ?>

<?php include_once __SITE_PATH . '/quanly/layouts/dothi.php';  ?>

<?php include_once __SITE_PATH . '/quanly/layouts/content_footer.php';  ?>
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
    var trucx = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'];
    var trucy = [1,4.5,6,5,7,2.3,10,1.1,2.3,5.6,9,9,7,8,5.2,3.3,0,5,0,7,8,10,6,6.5,7.5,9.1,7.7,7,9,10];
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
    });

    /** Đăng xuất */
    function DangXuat(){
        $.ajax({
            type: 'POST',
            url: '/quanly/nguoidung/nguoi_dung_dang_xuat.php',
            data: {},
            dataType: 'json',
            success: function(res){
                if(res.status = 200){
                    window.location="/index.php";
                }
            }
        })
    }
    </script>
</body>
</html>