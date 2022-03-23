<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/img/icon/link_icon.jpg" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="/public/css/grid.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/all.min.css">
    <link rel="stylesheet" href="/sanpham/css/style.css">
    <script src="/public/js/jquery.min.js"></script>
    
    <title>Sản phẩm</title>
</head>
<body>
    <!-- Thanh menu -->
    <?php include_once __SITE_PATH . '/layouts/header.php'; ?>

    <!--Danh sách sản phẩm -->
    <div class="sanpham_gr">
        <input type="hidden" id="TrangHienTai" value="1">
        <div class="grid wide" id="danhsach"></div>
    </div>

    <!-- Footer -->
    <?php include_once __SITE_PATH . '/layouts/footer.php'; ?>
    <script>
        function DanhSach(hangsanxuat=''){
            $.ajax({
                type: 'POST',
                url: '/sanpham/san_pham_danh_sach.php',
                data: {
                    TimKiem: $('#TimKiem').val(),
                    hangsanxuat: hangsanxuat,
                    tranghientai: $('#TrangHienTai').val()
                },
                dataType: 'html',
                success: function(kq){
                    $('#danhsach').html(kq)
                }
            });
        }
        DanhSach();

        function ThemVaoGioHang(idSanPham){
            $.ajax({
                type: 'POST',
                url: '/home/home_them_vao_gio_hang.php',
                data: {
                    idSanPham: idSanPham,
                    hinhanh: $('#hinhanh_'+idSanPham).attr('src'),
                    tendienthoai: $('#tendienthoai_'+idSanPham).html(),
                    giaban: $('#giaban_'+idSanPham).attr('val')
                },
                dataType: 'json',
                success: function(response){
                    if(response.status ==200){
                        $('#thongbao_giohang').html(response.soluong);
                        $('.modal_cus').css('display','flex');
                    }else{
                        alert('Không thể thêm');
                    }
                }
            });
        }
    </script>
</body>
</html>