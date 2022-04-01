<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/quanly/css/style.css">
    <link rel="stylesheet" href="/quanly/hangsanxuat/css/style.css">
    <link rel="stylesheet" href="/public/css/all.min.css">
    <script src="/public/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/quanly/css/jquery.datetimepicker.css">
    <script src="/quanly/js/jquery.datetimepicker.js"></script>
    <title>Quản lý - hãng sản xuất</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['idnguoidung'])){
        header("Location: /");
    }
    ?>
    <?php include_once __SITE_PATH . '/quanly/layouts/navigation.php';  ?>
    <?php include_once __SITE_PATH . '/quanly/layouts/content_header.php';  ?>
    
    <!--Danh sách sản phẩm -->
    <div class="hangsanxuat_gr">
        <input type="hidden" id="TrangHienTai" value="1">
        <div class="hangsanxuat_title">HÃNG SẢN XUẤT</div>
        <div class="boloc_content">

            <table>
                <tr>
                    <td>Mã</td>
                    <td><input class="nhaptukhoa" type="text" id="boloc_content_ma"></td>
                </tr>
                <tr>
                    <td>Tên hãng</td>
                    <td><input class="nhaptukhoa" type="text" id="boloc_content_ten"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button onclick="DanhSach()" class="btn_submit">Tìm</button></td>
                </tr>
            </table>
        </div>
        <div id="danhsach"></div>
    </div>
    <?php include_once __SITE_PATH . '/quanly/layouts/content_footer.php';  ?>
    <!-- form thêm mới -->
    <div class="modal_them">
        <div class="content_them">
            <div class="header">
                <span class="header_title">Thêm mới</span>
                <span onclick="Huy()" class="header_icon">[X]</span>
            </div>
            <div class="body">
                <div class="info_gr">
                    <span class="info_label">Mã hãng</span>
                    <input type="text" class="info_text">
                </div>
                <div class="info_gr">
                    <span class="info_label">Tên hãng</span>
                    <input type="text" class="info_text">
                </div>
                <div class="info_gr_btn">
                    <button class="btn_them"><span class="icon"><i class="fa-solid fa-plus"></i></span> Thêm</button>
                    <button onclick="Huy()" class="btn_huy"><span class="icon"><i class="fa-solid fa-xmark"></i></span> Hủy</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function DanhSach(){
            var timkiem_header = $('#timkiem_header').val();
            var boloc_content_ma = $('#boloc_content_ma').val();
            var boloc_content_ten = $('#boloc_content_ten').val();
            $.ajax({
                type: 'POST',
                url: '/quanly/hangsanxuat/hang_san_xuat_danh_sach.php',
                data: {
                    timkiem_header: timkiem_header,
                    boloc_content_ma: boloc_content_ma,
                    boloc_content_ten: boloc_content_ten,
                    tranghientai: $('#TrangHienTai').val(),
                },
                dataType: 'html',
                success: function(res){
                    $('#danhsach').html(res);
                }
            });
        }
        DanhSach();

        function getThem(){
            $('.modal_them').addClass('active_them');
        }
        function Huy(){
            $('.modal_them').removeClass('active_them');
        }
    </script>
</body>
</html>