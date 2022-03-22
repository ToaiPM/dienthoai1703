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
                <a href="#">Danh mục &nbsp;<i class="fa-solid fa-caret-down"></i></a>
                <ul class="sub_menu">
                    <li><a href="#">iPhone</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">OPPO</a></li>
                    <li><a href="#">Xiaomi</a></li>
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
        <div class="giohang_gr">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="giohang_sl">0</span>
        </div>
        <div class="nguoidung_gr">
            <span onclick="getDangNhap()" class="nguoidung_dn">Đăng nhập</span>
            <span class="nguoidung_dx">Đăng xuất</span>
        </div>
    </div>
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
<script>
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
</script>