<!-- Thanh menu PC, Tablet -->
<div class="header">
    <div class="main_menu grid wide">
        <a href="/" class="home_gr">
            <img src="/public/img/icon/home_icon.png" alt="" class="home_img">
        </a>
        <ul>
            <li>
                <a href="#">Giới thiệu</a>
            </li>
            <li>
                <a href="#">Sản phẩm &nbsp;<i class="fa-solid fa-caret-down"></i></a>
                <ul class="sub_menu">
                    <li><a href="/index.php?action=sanpham/index">Tất cả</a></li>
                    <li><a onclick="DanhSach('iPhone')" href="#">iPhone</a></li>
                    <li><a onclick="DanhSach('Samsung')" href="#">Samsung</a></li>
                    <li><a onclick="DanhSach('OPPO')" href="#">OPPO</a></li>
                    <li><a onclick="DanhSach('Xiaomi')" href="#">Xiaomi</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Tin tức</a>
            </li>
            <li>
                <a href="#">Liên hệ</a>
            </li>
        </ul>
        <div class="timkiem_gr">
            <input type="text" id="TimKiem" class="timkiem_txt" placeholder="Bạn cần tìm sản phẩm nào ...">
            <button onclick="DanhSach()" class="timkiem_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <a href="/index.php?action=giohang/index" class="giohang_gr">
            <i class="fa-solid fa-cart-shopping"></i>
            <span id="thongbao_giohang" class="giohang_sl">0</span>
        </a>
        <div class="nguoidung_gr">
            <span onclick="getDangNhap()" class="nguoidung_dn">Đăng nhập</span>
            <span class="nguoidung_dx">Đăng xuất</span>
        </div>
    </div>
</div>

<!-- Menu mobile -->
<div class="mobile_menu">
    <span class="bieutuong_bars"><i class="fa-solid fa-bars"></i></span>
</div>
<!-- Content mobile -->
<div class="content_mobile">
    <ul>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
    </ul>
</div>
<!-- Modal đăng nhập -->
<div class="modal_dangnhap">
    <div class="modal_dangnhap_content">
        <div class="modal_dangnhap_header">
            <span class="modal_dangnhap_title">Đăng nhập</span>
            <img onclick="DongFormDangNhap()" src="/public/img/icon/close_dangnhap_icon.png" alt="" class="modal_dangnhap_icon">
        </div>
        <div class="modal_dangnhap_body">
            <input type="text" id="tendangnhap" class="modal_dangnhap_text" placeholder="Tên đăng nhập">
            <input type="password" id="matkhau" class="modal_dangnhap_text" placeholder="Mật khẩu">
        </div>
        <div class="modal_dangnhap_footer">
            <button onclick="postDangNhap()" class="modal_dangnhap_submit">Đăng nhập</button>
            <button onclick="DongFormDangNhap()" class="modal_dangnhap_huy">Hủy</button>
        </div>
    </div>
</div>
<!-- Thông báo thêm vào gio hàng -->
<div class="modal_cus">
    <div class="noidung">
        <div class="noidung-header">
            <span class="noidung-header_text">Thông báo</span>
        </div>
        <div class="noidung-body">
            <span class="noidung-body_thongbao"><i class="fa-solid fa-circle-check"></i> Đã thêm vào giỏ hàng</span>
            <button onclick="DongThongBao()" class="dongy">OK</button>
        </div>
    </div>
</div>
<script>
    function ThongBaoTrangThai(){
        var soluong = '<?php echo isset($_SESSION["soluong_tong"]) ? $_SESSION["soluong_tong"] : 0; ?>';
        //var idnguoidung = '<?php echo isset($_SESSION["idnguoidung"]) ? $_SESSION["idnguoidung"] : 0; ?>';
        // if(idnguoidung!=0){
        //     $('#chuadangnhap').css('display','none');
        //     $('#dadangnhap').css('display','block');
        // }else{
        //     $('#chuadangnhap').css('display','block');
        //     $('#dadangnhap').css('display','none');
        // }
        $('#thongbao_giohang').html(soluong)
    }
    ThongBaoTrangThai();

    function getDangNhap(){
        $('#tendangnhap').val('');
        $('#matkhau').val('');
        $('.modal_dangnhap').addClass('active_modal_dangnhap');
    }

    function DongFormDangNhap(){
        $('.modal_dangnhap').removeClass('active_modal_dangnhap');
    }

    function postDangNhap(){
        alert(4)
    }

    function DongThongBao(){
        $('.modal_cus').css('display','none');
    }
</script>